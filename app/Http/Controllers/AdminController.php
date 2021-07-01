<?php

namespace App\Http\Controllers;

use App\Models\Pixel;
use App\Models\Statistic;
use App\Models\Variation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models;
use App\Models\Country;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //logika za logovanje i Auth

    public function __construct()
    {
//        $this->middleware('countryCheck');
        $this->modelStatistic = new Statistic();
        $this->modelVariation = new Variation();
        $this->modelCountry = new Country();
    }

    public function admin() {
        $this->data['countries'] = $this->modelCountry->getAllCountries();
        return view('admin.index', $this->data);
    }

    public function logout() {
        Auth::logout();
        return redirect('/login');
    }

    public function getActiveVariationsStatistic(Request $request) {

        $country_id = $request->get('country_id');

        $orders = $this->modelStatistic->getLastOrders($country_id);
        $collection = collect($orders);
        $messagesUnique = $collection->unique('variation_id')->slice(0,10);
        $uniqueVariation = $messagesUnique->values()->all();

        $todayOrders = 0;
        $todayRevenue = 0;
        $orderDate = $collection->where('created_at','>=',Carbon::now()->toDateString());
        if(count($orderDate) > 0) {
            foreach($orderDate as $singleOrder) {
                $todayOrders++;
                $todayRevenue += $singleOrder->price;
            }
        }

        foreach($uniqueVariation as $order) {
            $singleVariationVisits = $this->modelStatistic->getSingleTestStatistic(null, null, $order->variation_id);
            $array[0] = [];
            $array[$order->variation_id] = [];
            if(count($singleVariationVisits)>0) {
                foreach ($singleVariationVisits as $key => $value) {
                    if($key === 0) {
                        $array[$order->variation_id]['variation_name'] = $value->variation_name;
                        $array[$order->variation_id]['id_variation'] = $order->variation_id;
                    }
                    $array[$order->variation_id][$value->event_name] = $value->VariationVisits;
                }
            }

            $allOrders = $this->modelVariation->getAllOrdersForVariation($order->variation_id);
            $allOrdersCount = 0;
            $revenueTotal = 0;
            if(count($allOrders) > 0) {
                foreach($allOrders as $order1) {
                    $allOrdersCount++;
                    $revenueTotal += $order1->price;
                }
                $array[$order->variation_id]['orders_count'] = $allOrdersCount;
                $array[$order->variation_id]['orders_revenue'] = $revenueTotal;

                $selectedCountry = $this->modelCountry->getCountry($country_id);
                $array[$order->variation_id]['currency'] = $selectedCountry->currency_symbol;
                $array[0]['todayOrders'] = $todayOrders;
                $array[0]['todayRevenue'] = $todayRevenue;
                $array[0]['currency'] = $selectedCountry->currency_symbol;
            }
        }

        if(!empty($array)) {
            $currentPage = $request->get('page');
            if($currentPage==null||$currentPage==""||$currentPage<1){
                $currentPage = 1;
            }
            $perPage = 10;
            $itemCollection = collect($array);
            $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
            $paginatedItems = new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
            $paginatedItems->setPath('');
            if($request->ajax()){
                return view('admin.components.statisticVariationTable', compact(array('paginatedItems')))->render();
            } else {
                return $paginatedItems;
            }
        }
    }

}
