<?php

use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
| Shuki Crafts pages (Blade views in resources/views/pages).
| Products, cart and accounts are still static sample data;
| the shop backend (database, cart, checkout, auth) comes next.
*/

Route::view('/', 'pages.home')->name('home');
Route::view('/about-us', 'pages.about')->name('about');
Route::view('/product-category/dinnerware', 'pages.dinnerware')->name('dinnerware');
Route::view('/product-category/tea-and-coffee', 'pages.tea-and-coffee')->name('tea-and-coffee');
Route::view('/product-category/serveware', 'pages.serveware')->name('serveware');
Route::view('/product-category/gift-packs', 'pages.gift-packs')->name('gift-packs');
Route::view('/shop/vienna-blue-12-pcs-tea-set', 'pages.product')->name('product');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/checkout/order-received', 'pages.order-received')->name('checkout.received');
Route::view('/search', 'pages.search')->name('search');
Route::view('/my-account', 'pages.account')->name('account');
Route::view('/my-account/lost-password', 'pages.lost-password')->name('password.request');
Route::view('/my-account/reset-password', 'pages.reset-password')->name('password.reset');
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/order-tracking', 'pages.order-tracking')->name('order-tracking');
Route::view('/shipping', 'pages.shipping')->name('shipping');
Route::view('/refund-policy', 'pages.refund-policy')->name('refund-policy');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/terms-and-conditions', 'pages.terms')->name('terms');

// forms that are not connected to the shop yet: confirm and go back to the page
Route::post('/contact', [FormController::class, 'contact'])->name('contact.send');
Route::post('/order-tracking', [FormController::class, 'trackOrder'])->name('order-tracking.track');
Route::post('/newsletter', [FormController::class, 'newsletter'])->name('newsletter.subscribe');
Route::post('/my-account/details', [FormController::class, 'accountDetails'])->name('account.details');
Route::post('/my-account/address', [FormController::class, 'accountAddress'])->name('account.address');
Route::post('/my-account/lost-password', [FormController::class, 'lostPassword'])->name('password.email');
Route::post('/my-account/reset-password', [FormController::class, 'resetPassword'])->name('password.update');

// old WordPress URLs from the live site
Route::permanentRedirect('/cart-2', '/cart');
Route::permanentRedirect('/checkout-2', '/checkout');
Route::permanentRedirect('/my-account-2', '/my-account');
Route::permanentRedirect('/my-account-2/lost-password', '/my-account/lost-password');
Route::permanentRedirect('/contact-us', '/contact');
Route::permanentRedirect('/shop', '/search');
Route::permanentRedirect('/shop/categories', '/');
Route::get('/product-category/{slug}', function (string $slug) {
    $type = ['dinner-sets' => 'dinner-sets', 'designer-ware' => 'designer-ware', 'white-porcelain' => 'white-porcelain', 'new-arrivals' => null][$slug] ?? false;
    if ($slug === 'coloured-mugs') {
        return redirect()->route('tea-and-coffee', ['type' => 'coloured-mugs'], 301);
    }
    abort_if($type === false, 404);
    return redirect()->route('dinnerware', $type ? ['type' => $type] : [], 301);
})->where('slug', 'dinner-sets|designer-ware|white-porcelain|new-arrivals|coloured-mugs');
