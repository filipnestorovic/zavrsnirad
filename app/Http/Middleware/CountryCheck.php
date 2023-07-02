<?php

namespace App\Http\Middleware;

use App\Models\Country;
use Closure;
use Illuminate\Http\Request;
use Stevebauman\Location\Facades\Location;

class CountryCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next)
    {
        $countryModel = new Country();
        $countryShortcode = strtolower($request->route('country')); // get country from url

        if($countryShortcode != null && $countryShortcode != "") {
            $result = $countryModel->getActiveCountryByShortcode($countryShortcode);
        } else {
            $result = null;
        }

        if($result === null) {
            $countryCodeFromIp = $this->getLocationByIp($request);
            $checkCountryIp = $countryModel->getActiveCountryByShortcode($countryCodeFromIp);
            if($checkCountryIp === null) {
                $request->request->add(['countryShortcode' => "rs"]);
                $request->request->add(['countryId' => 1]);
            } else {
                $request->request->add(['countryShortcode' => $checkCountryIp->country_code]);
                $request->request->add(['countryId' => $checkCountryIp->id_country]);
            }

        } else {
            $request->request->add(['countryShortcode' => $result->country_code]);
            $request->request->add(['countryId' => $result->id_country]);
        }

        $request->route()->forgetParameter('country');

        return $next($request);
    }

    private function getLocationByIp(Request $request) {
        $request_ip = request()->ip();
        if($request_ip === null) {
            return 'rs';
        } else {
            $position = Location::get($request_ip);
            return $position != null ? strtolower($position->countryCode) : 'rs';
        }
    }
}
