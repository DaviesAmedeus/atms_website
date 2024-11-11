<?php

use App\Http\Controllers\Website\FallbackController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::fallback(FallbackController::class);

Route::controller(WebsiteController::class)->group(function(){
    Route::get('/', 'index')->name('website.index');
    Route::get('/about/about_atms', 'aboutAtms')->name('website.about_atms');
    Route::get('/about/about_team', 'aboutTeam')->name('website.about_team');

    Route::get('/services/fleet_services', 'fleetServices')->name('website.fleet_services');
        Route::get('/services/fleet_services/online_tracking', 'onlineTracking')->name('website.services.online_tracking');
        Route::get('/services/fleet_services/fuel_monitoring', 'fuelMonitoring')->name('website.services.fuel_monitoring');
        Route::get('/services/fleet_services/driver_behavior', 'driverBehavior')->name('website.services.driver_behavior');
        Route::get('/services/fleet_services/video_telematics', 'videoTelematics')->name('website.services.video_telematics');

    Route::get('/services/ict_services', 'ictServices')->name('website.ict_services');
    Route::get('/under_construction', 'underConstruction')->name('website.under_construction');
    Route::get('/gallery', 'gallery')->name('website.gallery');
    Route::get('/contact', 'contact')->name('website.contact');
    });

