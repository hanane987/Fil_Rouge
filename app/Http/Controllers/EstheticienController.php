<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
use App\Models\estheticien_service;
use App\Models\Promotion;
use App\Models\Estheticien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;


class EstheticienController extends Controller
{
    /**
     * Show the form for creating a new estheticien.
     */

     public function index()
     {
         $estheticien = auth()->user()->estheticien;
     
         if (!$estheticien) {
             return redirect()->route('estheticien.create')->with('error', 'You need to create your estheticien profile first.');
         }
         return view('estheticien.index', compact('estheticien'));
     }
     
     



  
     
     public function create()
{
    $user=Auth::user()->estheticiens;
  
    
    if ($user) {

        return redirect()->route('estheticien_peiu');
    }else {
        return view('estheticien.create');
    }
   
}






public function display()
{
   
   $estheticien=Auth::user()->estheticiens;

    return view('estheticien.show', compact('estheticien'));
}



    /**
     * Store a newly created estheticien in storage.
     */
  /**
 * Store a newly created estheticien in storage.
 */
public function store(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'specialization' => 'required|string|max:255',
        'availability' => 'required|string|max:255',
        'description' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'work_name' => 'required|string|max:255',
        'price' => 'required|numeric',
    ]);

    // Upload image if provided
    $imagePath = $request->hasFile('image') ? $request->file('image')->store('estheticiens', 'public') : null;

    try {
        $user = Auth::user()->estheticiens()->create([
            'first_name' => $request->first_name, 
            'specialization' => $request->specialization,
            'availability' => $request->availability,
            'description' => $request->description,
            'image' => $imagePath,
            'work_name' => $request->work_name,
            'price' => $request->price,
        ]);

        return redirect()->route('estheticien_peiu')->with('success', 'Profile created successfully.');
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Failed to create profile. ' . $e->getMessage());
    }
}


    /**
     * Show the form for editing the estheticien's own profile.
     */
    public function edit()
    {
        $estheticien = auth()->user()->estheticien;
        return view('estheticien.edit', compact('estheticien'));
    }

    /**
     * Update the authenticated estheticien's own profile.
     */
    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'work_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        $estheticien = auth()->user()->estheticien;

        // Update the profile information
        $estheticien->update([
            'first_name' => $request->first_name,
            'specialization' => $request->specialization,
            'availability' => $request->availability,
            'description' => $request->description,
            'work_name' => $request->work_name,
            'price' => $request->price,
        ]);

        if ($request->hasFile('image')) {
            $estheticien->update(['image' => $request->file('image')->store('estheticiens', 'public')]);
        }

        return redirect()->route('estheticien.profile')->with('success', 'Profile updated successfully.');
    }

    /**
     * Remove the authenticated estheticien's own profile from storage.
     */
    public function destroy()
    {
        $estheticien = auth()->user()->estheticien;

        // Delete the profile
        $estheticien->delete();

        return redirect()->route('estheticien.create')->with('success', 'Profile deleted successfully.');
    }


public function servicesAndPromotions()
{
   
    $services = Service::all();

   
    $promotions = Promotion::all();

    return view('estheticien.services_and_promotions', compact('services', 'promotions'));
}



    public function singlepage(Service $service)
    {
        $promotion = Promotion::where('service_id', $service->id)->first();
        return view('service_details', compact('service', 'promotion'));
    }
    public function assignService(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
        ]);
    
        $user = Auth::user();
    
        $estheticien = $user->estheticiens()->first();
    
        estheticien_service::create([
            'user_id' => $estheticien->id,
            'service_id' => $request->service_id,
        ]);
    
        return redirect()->back()->with('success', 'You have been assigned to the service.');
    }
    
    public function viewMore(Service $service)
    {
         
          
       $estheticien_services = estheticien_service::Where('service_id', $service->id)->get();

        return view('reservations.view_more', compact('service','estheticien_services'));
    }

    public function show($id)
{
    $service = Service::findOrFail();
    return view('service.details', compact('service'));
}

public function showEstheticienProfile()
{
    $estheticien = Auth::user()->estheticien;

    if (!$estheticien) {
        return redirect()->route('estheticien.create')->with('error', 'Please create your estheticien profile.');
    }
    return view('welcome', compact('estheticien'));
}


public function profil_esth(Estheticien $coiffeure){


return view('estheticien.profil_esth',compact('coiffeure'));
}

public function user_profile(){
    $coiffeure=Auth::user() ;
   return view('user_profile',compact('coiffeure'));
}
    
}
