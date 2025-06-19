<?php

use Illuminate\Support\Facades\Route;
// ============================== FRONT ==============================

use \App\Http\Controllers\{
    HomeController,
    ContactController,
    GalleryController,
};

// ============================== FRONT PAGES ============================== //
Route::controller(HomeController::class)->group(function () {
    Route::get('/',  'index');
});
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact.html',  'index');
});
Route::controller(GalleryController::class)->group(function () {
    Route::get('/gallery.html',  'index');
});
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'vi'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
});
