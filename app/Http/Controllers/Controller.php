<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $data;
    protected $modelCountry;
    protected $modelBrand;
    protected $modelProduct;
    protected $modelLander;
    protected $modelCheckout;
    protected $modelThankyou;
    protected $modelVariation;
    protected $modelVariationPrice;
    protected $modelCurrency;
    protected $modelCoupon;
    protected $modelTest;
    protected $modelSession;
    protected $modelEvent;
    protected $modelOrder;
    protected $modelStatistic;
    protected $modelDomain;

    public function getMultipleItemsFromQuery($data, $keyForGroup) {
        $orderedList = array();

        foreach($data as $val) {
            $orderedList[$val[$keyForGroup]][] = $val;
        }

        return collect($orderedList);
    }

    public function prepareDataForTableAjax(Request $request, $data, $keyForGroup, $isForRender = false, $perPage = 10, $currentPage = 1, $tableViewName){
        $orderedList = array();
        foreach($data as $val) {
            $orderedList[$val[$keyForGroup]][] = $val;
        }

        $itemCollection = collect($orderedList);
        $currentPageItems = $itemCollection->slice(((int)$currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems = new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        $paginatedItems->setPath('');
        if($request->ajax()){
            return view('admin.components.'.$tableViewName, compact(array('paginatedItems')))->render();
        }
        else{
            return $paginatedItems;
        }
    }

    public function paginateDataWithTable(Request $request, $data, $perPage = 10, $currentPage = 1, $tableViewName)
    {
        $itemCollection = $data;
        $currentPageItems = $itemCollection->slice(((int)$currentPage * $perPage) - $perPage, $perPage)->all();
        $paginatedItems = new LengthAwarePaginator($currentPageItems, count($itemCollection), $perPage);

        $paginatedItems->setPath('');

        if($request->ajax()){
            return view('admin.components.'.$tableViewName, compact(array('paginatedItems')))->render();
        }
        else{
            return $paginatedItems;
        }
    }
}
