<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
       $services = Service::whereHas('estheticien')->get();
       
        return view('welcome',compact('services'));
    }
   

}
