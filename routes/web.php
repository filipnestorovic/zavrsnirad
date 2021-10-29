<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::group([ 'middleware' => ['admin']], function() {
    Route::domain('new.wombatsbrand.com')->middleware(['auth'])->group(function () {
        Route::get('/', [App\Http\Controllers\AdminController::class, 'admin'])->name('adminDashboard');
        Route::get('/logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logoutAdmin');

        Route::get('/country', [App\Http\Controllers\CountryController::class, 'countryIndex'])->name('countryIndex');
        Route::post('/addCountry', [App\Http\Controllers\CountryController::class, 'addCountry'])->name('addCountry');
        Route::get('/getCountry/{id}', [App\Http\Controllers\CountryController::class, 'getCountry'])->name('getCountry');
        Route::post('/editCountry', [App\Http\Controllers\CountryController::class, 'editCountry'])->name('editCountry');
        Route::get('/deleteCountry/{id}', [App\Http\Controllers\CountryController::class, 'deleteCountry'])->name('deleteCountry');

        Route::post('/addCurrency', [App\Http\Controllers\CountryController::class, 'addCurrency'])->name('addCurrency');
        Route::get('/getCurrency/{id}', [App\Http\Controllers\CountryController::class, 'getCurrency'])->name('getCurrency');
        Route::post('/editCurrency', [App\Http\Controllers\CountryController::class, 'editCurrency'])->name('editCurrency');
        Route::get('/deleteCurrency/{id}', [App\Http\Controllers\CountryController::class, 'deleteCurrency'])->name('deleteCurrency');

        Route::get('/brand', [App\Http\Controllers\BrandController::class, 'brandIndex'])->name('brandIndex');
        Route::post('/addBrand', [App\Http\Controllers\BrandController::class, 'addBrand'])->name('addBrand');
        Route::get('/getBrand/{id}', [App\Http\Controllers\BrandController::class, 'getBrand'])->name('getBrand');
        Route::post('/editBrand', [App\Http\Controllers\BrandController::class, 'editBrand'])->name('editBrand');
        Route::get('/deleteBrand/{id}', [App\Http\Controllers\BrandController::class, 'deleteBrand'])->name('deleteBrand');
        Route::get('/getBrandDomains/{id}', [App\Http\Controllers\DomainController::class, 'getBrandDomains'])->name('getBrandDomains');

        Route::post('/addDomain', [App\Http\Controllers\DomainController::class, 'addDomain'])->name('addDomain');
        Route::get('/getDomain/{id}', [App\Http\Controllers\DomainController::class, 'getDomain'])->name('getDomain');
        Route::post('/editDomain', [App\Http\Controllers\DomainController::class, 'editDomain'])->name('editDomain');
        Route::get('/deleteDomain/{id}', [App\Http\Controllers\DomainController::class, 'deleteDomain'])->name('deleteDomain');

        Route::get('/product', [App\Http\Controllers\ProductController::class, 'productIndex'])->name('productIndex');
        Route::post('/addProduct', [App\Http\Controllers\ProductController::class, 'addProduct'])->name('addProduct');
        Route::get('/getProduct/{id}', [App\Http\Controllers\ProductController::class, 'getProduct'])->name('getProduct');
        Route::post('/editProduct', [App\Http\Controllers\ProductController::class, 'editProduct'])->name('editProduct');
        Route::get('/deleteProduct/{id}', [App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('deleteProduct');
        Route::get('/restoreProduct/{id}', [App\Http\Controllers\ProductController::class, 'restoreProduct'])->name('restoreProduct');

        Route::get('/productReviews/{id}', [App\Http\Controllers\ProductController::class, 'productReviews'])->name('productReviews');
        Route::post('/addReview', [App\Http\Controllers\ProductController::class, 'addReview'])->name('addReview');
        Route::get('/getReview/{id}', [App\Http\Controllers\ProductController::class, 'getReview'])->name('getReview');
        Route::post('/editReview', [App\Http\Controllers\ProductController::class, 'editReview'])->name('editReview');
        Route::get('/deleteReview/{id}', [App\Http\Controllers\ProductController::class, 'deleteReview'])->name('deleteReview');

        Route::get('/getPixels', [App\Http\Controllers\PixelController::class, 'getPixels'])->name('getPixels');
        Route::get('/getPixel/{id}', [App\Http\Controllers\PixelController::class, 'getPixel'])->name('getPixel');
        Route::post('/addPixel', [App\Http\Controllers\PixelController::class, 'addPixel'])->name('addPixel');
        Route::post('/editPixel', [App\Http\Controllers\PixelController::class, 'editPixel'])->name('editPixel');
        Route::post('/deletePixel', [App\Http\Controllers\PixelController::class, 'deletePixel'])->name('deletePixel');

        Route::post('/connectBrandPixel', [App\Http\Controllers\PixelController::class, 'connectBrandPixel'])->name('connectBrandPixel');
        Route::post('/connectProductPixel', [App\Http\Controllers\PixelController::class, 'connectProductPixel'])->name('connectProductPixel');
        Route::post('/connectDomainPixel', [App\Http\Controllers\PixelController::class, 'connectDomainPixel'])->name('connectDomainPixel');

        Route::get('/getBrandPixelForSingleProduct/{id}', [App\Http\Controllers\PixelController::class, 'getBrandPixelForSingleProduct'])->name('getBrandPixelForSingleProduct');
        Route::get('/getProductPixel/{id}', [App\Http\Controllers\PixelController::class, 'getProductPixel'])->name('getProductPixel');

        Route::get('/disconnectBrandPixel/{id}', [App\Http\Controllers\PixelController::class, 'disconnectBrandPixel'])->name('disconnectBrandPixel');
        Route::get('/disconnectProductPixel/{id}', [App\Http\Controllers\PixelController::class, 'disconnectProductPixel'])->name('disconnectProductPixel');
        Route::get('/disconnectDomainPixel/{id}', [App\Http\Controllers\PixelController::class, 'disconnectDomainPixel'])->name('disconnectDomainPixel');

        Route::get('/lander', [App\Http\Controllers\PageController::class, 'landerIndex'])->name('landerIndex');
        Route::post('/addLander', [App\Http\Controllers\PageController::class, 'addLander'])->name('addLander');
        Route::get('/getLander/{id}', [App\Http\Controllers\PageController::class, 'getLander'])->name('getLander');
        Route::post('/editLander', [App\Http\Controllers\PageController::class, 'editLander'])->name('editLander');
        Route::get('/deleteLander/{id}', [App\Http\Controllers\PageController::class, 'deleteLander'])->name('deleteLander');
        Route::get('/restoreLander/{id}', [App\Http\Controllers\PageController::class, 'restoreLander'])->name('restoreLander');

        Route::get('/checkout', [App\Http\Controllers\PageController::class, 'checkoutIndex'])->name('checkoutIndex');
        Route::post('/addCheckout', [App\Http\Controllers\PageController::class, 'addCheckout'])->name('addCheckout');
        Route::get('/getCheckout/{id}', [App\Http\Controllers\PageController::class, 'getCheckout'])->name('getCheckout');
        Route::post('/editCheckout', [App\Http\Controllers\PageController::class, 'editCheckout'])->name('editCheckout');
        Route::get('/deleteCheckout/{id}', [App\Http\Controllers\PageController::class, 'deleteCheckout'])->name('deleteCheckout');

        Route::get('/thankyou', [App\Http\Controllers\PageController::class, 'thankyouIndex'])->name('thankyouIndex');
        Route::post('/addThankyou', [App\Http\Controllers\PageController::class, 'addThankyou'])->name('addThankyou');
        Route::get('/getThankyou/{id}', [App\Http\Controllers\PageController::class, 'getThankyou'])->name('getThankyou');
        Route::post('/editThankyou', [App\Http\Controllers\PageController::class, 'editThankyou'])->name('editThankyou');
        Route::get('/deleteThankyou/{id}', [App\Http\Controllers\PageController::class, 'deleteThankyou'])->name('deleteThankyou');

        Route::get('/coupon', [App\Http\Controllers\CouponController::class, 'couponIndex'])->name('couponIndex');
        Route::post('/addCoupon', [App\Http\Controllers\CouponController::class, 'addCoupon'])->name('addCoupon');
        Route::get('/getCoupon/{id}', [App\Http\Controllers\CouponController::class, 'getCoupon'])->name('getCoupon');
        Route::post('/editCoupon', [App\Http\Controllers\CouponController::class, 'editCoupon'])->name('editCoupon');
        Route::get('/deleteCoupon/{id}', [App\Http\Controllers\CouponController::class, 'deleteCoupon'])->name('deleteCoupon');

        Route::get('/variations', [App\Http\Controllers\VariationController::class, 'variationsIndex'])->name('variationsIndex');
        Route::post('/newVariation', [App\Http\Controllers\VariationController::class, 'newVariation'])->name('newVariation');
        Route::get('/variation/{id?}', [App\Http\Controllers\VariationController::class, 'variation'])->name('variation');
        Route::post('/addVariation', [App\Http\Controllers\VariationController::class, 'addVariation'])->name('addVariation');
        Route::post('/editVariation', [App\Http\Controllers\VariationController::class, 'editVariation'])->name('editVariation');
        Route::get('/deleteVariation/{id}', [App\Http\Controllers\VariationController::class, 'deleteVariation'])->name('deleteVariation');
        Route::get('/deleteVariationPrice/{id?}', [App\Http\Controllers\VariationController::class, 'deleteVariationPrice'])->name('deleteVariationPrice');
        Route::get('/restoreVariation/{id?}', [App\Http\Controllers\VariationController::class, 'restoreVariation'])->name('restoreVariation');
        Route::post('/addCouponsToVariation', [App\Http\Controllers\VariationController::class, 'addCouponsToVariation'])->name('addCouponsToVariation');
        Route::post('/addPricesToVariation', [App\Http\Controllers\VariationController::class, 'addPricesToVariation'])->name('addPricesToVariation');
        Route::get('/copyVariation/{id?}', [App\Http\Controllers\VariationController::class, 'copyVariation'])->name('copyVariation');

        Route::get('/ajaxData/getVariationsAjax', [App\Http\Controllers\VariationController::class, 'getVariationsAjax'])->name('getVariationsAjax');
        Route::get('/ajaxData/getProductsAjax', [App\Http\Controllers\ProductController::class, 'getProductsAjax'])->name('getProductsAjax');
        Route::get('/ajaxData/getTestsAjax/{id?}', [App\Http\Controllers\TestController::class, 'getTestsAjax'])->name('getTestsAjax');
        Route::get('/ajaxData/getLandersAjax/{id?}', [App\Http\Controllers\PageController::class, 'getLandersAjax'])->name('getLandersAjax');
        Route::get('/ajaxData/getActiveVariationsStatistic', [App\Http\Controllers\AdminController::class, 'getActiveVariationsStatistic'])->name('getActiveVariationsStatistic');
        Route::get('/ajaxData/getVariationStatisticByDate', [App\Http\Controllers\VariationController::class, 'getVariationStatisticByDate'])->name('getVariationStatisticByDate');

        Route::get('/tests', [App\Http\Controllers\TestController::class, 'testsIndex'])->name('testsIndex');
        Route::post('/createTest', [App\Http\Controllers\TestController::class, 'createTest'])->name('createTest');
        Route::get('/test/{id}', [App\Http\Controllers\TestController::class, 'singleTest'])->name('singleTest');
        Route::post('/addVariationToTest', [App\Http\Controllers\TestController::class, 'addVariationToTest'])->name('addVariationToTest');
        Route::get('/getTestVariation/{id}', [App\Http\Controllers\TestController::class, 'getTestVariation'])->name('getTestVariation');
        Route::post('/editTestVariationTraffic', [App\Http\Controllers\TestController::class, 'editTestVariationTraffic'])->name('editTestVariationTraffic');
        Route::get('/removeVariationFromTest/{id}', [App\Http\Controllers\TestController::class, 'removeVariationFromTest'])->name('removeVariationFromTest');
        Route::get('/restoreVariationTest/{id}', [App\Http\Controllers\TestController::class, 'restoreVariationTest'])->name('restoreVariationTest');

        Route::get('/startTest/{id}/{wrongSum?}/{pricesNotSet?}', [App\Http\Controllers\TestController::class, 'startTest'])->name('startTest');
        Route::get('/pauseTest/{id}', [App\Http\Controllers\TestController::class, 'pauseTest'])->name('pauseTest');
        Route::get('/endTest/{id}', [App\Http\Controllers\TestController::class, 'endTest'])->name('endTest');

        Route::get('/event', [App\Http\Controllers\EventController::class, 'eventIndex'])->name('eventIndex');
        Route::post('/addEvent', [App\Http\Controllers\EventController::class, 'addEvent'])->name('addEvent');
        Route::get('/getEvent/{id}', [App\Http\Controllers\EventController::class, 'getEvent'])->name('getEvent');
        Route::post('/editEvent', [App\Http\Controllers\EventController::class, 'editEvent'])->name('editEvent');
        Route::get('/deleteEvent/{id}', [App\Http\Controllers\EventController::class, 'deleteEvent'])->name('deleteEvent');

        Route::get('/api/getProductPrices/{country}/{sku}', [App\Http\Controllers\ApiController::class, 'getProductPrices'])->name('getProductPrices');

        require __DIR__.'/auth.php';

    });
});

Route::group(['middleware' => ['guest']], function () {
    $webRoutes = function() {
        Route::get('/{slug}/thankyou', [App\Http\Controllers\HomeController::class, 'thankyou'])->name('thankyou');
        Route::get('/{slug}/checkout/{coupon?}', [App\Http\Controllers\HomeController::class, 'checkout'])->name('checkout');
        Route::get('/{slug?}/{coupon?}', [App\Http\Controllers\HomeController::class, 'lander'])->name('lander');

        Route::post('/order', [App\Http\Controllers\OrderController::class, 'order'])->name('order');
        Route::post('/upCrossSellOrder', [App\Http\Controllers\OrderController::class, 'upCrossSellOrder'])->name('upCrossSellOrder');
    };

    Route::get('/ajax/sendConversionApiFB', [App\Http\Controllers\HomeController::class, 'sendConversionApiFB'])->name('sendConversionApiFB');
    Route::post('/insertSessionAjax', [App\Http\Controllers\HomeController::class, 'insertEventDbAjax'])->name('insertEventDbAjax');
    Route::post('/validatePhoneNumber', [App\Http\Controllers\HomeController::class, 'validatePhoneNumber'])->name('validatePhoneNumber');

    Route::post('/selectCountry', [App\Http\Controllers\HomeController::class, 'selectCountry'])->name('selectCountry');

    Route::domain('{country?}.{site?}.{domain?}')->middleware('countryCheck')->group($webRoutes);
    Route::domain('{site?}.{domain?}')->middleware('countryCheck')->group($webRoutes);
});
