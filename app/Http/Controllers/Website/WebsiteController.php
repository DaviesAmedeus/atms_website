<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){

        $viewData['title'] = "Home";
        return view('website.index', compact('viewData'));
    }

    public function aboutAtms(){

        $viewData['title'] = "About ATMS";
        return view('website.about-atms', compact('viewData'));
    }

    public function aboutTeam(){

        $viewData['title'] = "ATMS Team";
        return view('website.about-team', compact('viewData'));
    }

    public function fleetServices(){

        $viewData['title'] = "Fleet Services";
        return view('website.fleet-services', compact('viewData'));
    }

    public function ictServices(){

        $viewData['title'] = "Ict Services";
        return view('website.ict-services', compact('viewData'));
    }

    public function underConstruction(){

        $viewData['title'] = "Page under construction";
        return view('website.under-construction', compact('viewData'));
    }


    public function gallery(){

        $viewData['title'] = "ATMS galllery";
        return view('website.gallery', compact('viewData'));
    }


    public function contact(){

        $viewData['title'] = "Contact";
        return view('website.contact', compact('viewData'));
    }


    public function onlineTracking(){

        $viewData['title'] = "Online Tracking";
        return view('website.service.fleet.online-tracking', compact('viewData'));
    }

    public function videoTelematics(){

        $viewData['title'] = "Video Telematics";
        return view('website.service.fleet.video-telematics', compact('viewData'));
    }

    public function fuelMonitoring(){

        $viewData['title'] = "Video Telematics";
        return view('website.service.fleet.fuel-monitoring', compact('viewData'));
    }

    public function driverBehavior(){

        $viewData['title'] = "Driver Behavior";
        return view('website.service.fleet.driver-behavior', compact('viewData'));
    }


}
