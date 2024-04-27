<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Estheticien;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

class HomeController extends Controller
{
    public function index(){
       $services = Service::whereHas('estheticien')->get();
       $estheticien=Estheticien::whereHas('est_serv')->get();
      
        return view('welcome',compact('services','estheticien'));
    }
   

}
