<?php

namespace App\Http\Middleware;

use App\Models\Country;
use Closure;
use Illuminate\Http\Request;
use App\Models;
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

    private $unexistingCountryName;

    public function handle(Request $request, Closure $next)
    {
        if(request()->ip() === "127.0.0.1") {
            $countryCodeFromIp = "rs";
            $this->unexistingCountryName = "Localhost";
        } else {
            $countryCodeFromIp = $this->getLocationByIp($request); // get country from customer ip
        }

        $countryModel = new Country();
        $countryShortcode = strtolower($request->route('country')); // get country from url
        $result = $countryModel->getActiveCountryByShortcode($countryShortcode);

        if($result === null) { //if country is not set in url
            $checkCountryIp = $countryModel->getActiveCountryByShortcode($countryCodeFromIp);
            $host = $request->getHost();
            $whitelist = ["cleanmaster.rs"];
            if(in_array($host, $whitelist)) {
                $request->request->add(['countryShortcode' => "rs"]);
                $request->request->add(['countryId' => 1]);
            } else {
                if($checkCountryIp === null) {
                    $request->request->add(['unexistingCountry' => $countryCodeFromIp]);
                    $request->request->add(['unexistingCountryName' => $this->unexistingCountryName]);
                } else {
                    $request->request->add(['countryShortcode' => $checkCountryIp->country_code]);
                    $request->request->add(['countryId' => $checkCountryIp->id_country]);
                }
            }
        } else { //if country is set in url
            $request->request->add(['countryShortcode' => $result->country_code]);
            $request->request->add(['countryId' => $result->id_country]);
        }

        $request->route()->forgetParameter('country');

        return $next($request);
    }

    private function getLocationByIp(Request $request) {
        $position = Location::get(request()->ip());
        $countryCode = strtolower($position->countryCode);
        $this->unexistingCountryName = $position->countryName;
        return $countryCode;
    }
}
