<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Service;
use App\Models\Slide;
use App\Models\User;
use Illuminate\Http\Request;

class RoutingController extends Controller
{
    function home()
    {
        $data['service'] = Service::all();
        $data['project'] = Project::latest()->take(2)->get();
        $data['slide'] = Slide::all();
        return view("website.index", $data);
    }
    function about()
    {
        $data['service'] = Service::all();
        $data["user"] = User::all()->take(4);
        return view('website.about', $data);
    }
    function service()
    {
        $data['service'] = Service::all();
        return view('website.service', $data);
    }
    function contact()
    {
        $data['service'] = Service::all();
        return view('website.contact', $data);
    }
    function project()
    {
        $data['service'] = Service::all();
        $data['project'] = Project::all();
        return view('website.project', $data);
    }
    function single_service($service)
    {
        $data['service'] = Service::all();
        $data['service_single'] = Service::findOrFail($service);
        // dd($service);
        return view("website.service_single", $data);
    }
    function project_single($project)
    {
        $data['service'] = Service::all();
        $data['project'] = Project::findOrFail($project);
        return view('website.project_single', $data);
    }
}