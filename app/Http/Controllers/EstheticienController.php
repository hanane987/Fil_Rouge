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
         // Get the authenticated user's estheticien profile
         $estheticien = auth()->user()->estheticien;
     
         // If the user doesn't have an estheticien profile, redirect to the create page
         if (!$estheticien) {
             return redirect()->route('estheticien.create')->with('error', 'You need to create your estheticien profile first.');
         }
     
         // Pass the estheticien profile to the view
         return view('estheticien.index', compact('estheticien'));
     }
     
     



  
     
     public function create()
{
    $user=Auth::user()->estheticiens;
  
    // Check if the estheticien already has a profile
    if ($user) {

        // If the estheticien already has a profile, redirect to view their profile
        return redirect()->route('estheticien_peiu');
    }else {
        return view('estheticien.create');
    }
    // If the estheticien does not have a profile, show the create form
   
}




// public function display($user)
// {
   
//     // Retrieve the authenticated user's estheticien profile
// // dd($user);
//     // Check if the estheticien profile exists
//     if (!$user) {
//         // Handle the case where the authenticated user does not have an associated estheticien profile
//         return redirect()->route('estheticien.create')->with('error', 'You do not have a profile.');
//     }

//     return view('estheticien.show', compact('estheticien'));
// }
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
            'first_name' => $request->first_name, // Provide value for first_name column
            'specialization' => $request->specialization,
            'availability' => $request->availability,
            'description' => $request->description,
            'image' => $imagePath,
            'work_name' => $request->work_name,
            'price' => $request->price,
        ]);

        // Redirect to the show page of the newly created estheticien
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

        // Update image if provided
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


    
//     public function servicesAndPromotions()
// {
//     $services = Service::join('estheticien_services', 'service_id', '=', 'services.id')
//                        ->where('estheticien_services.user_id', '!=', Auth::id())
//                        ->orWhere('service_id', '!=', 'services.id')
//                        ->get();

//     $promotions = Promotion::all();

//     return view('estheticien.services_and_promotions', compact('services', 'promotions'));
// }

public function servicesAndPromotions()
{
    // Retrieve all services
    $services = Service::all();

    // Retrieve all promotions
    $promotions = Promotion::all();

    return view('estheticien.services_and_promotions', compact('services', 'promotions'));
}



    public function singlepage(Service $service)
    {
        // Retrieve the associated promotion for the service, if any
        $promotion = Promotion::where('service_id', $service->id)->first();

        // Return the view with the service and its promotion data
        return view('service_details', compact('service', 'promotion'));
    }
    public function assignService(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
        ]);
    
        // Retrieve the authenticated user
        $user = Auth::user();
    
        // Check if the user already has an estheticien profile
        $estheticien = $user->estheticiens()->first();
    
        // If the user does not have an estheticien profile, create one
       
    
        // Now $estheticien should not be null
        // Proceed with assigning the service to the estheticien
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
    // Retrieve the authenticated user's estheticien profile
    $estheticien = Auth::user()->estheticien;

    // Check if estheticien profile exists
    if (!$estheticien) {
        // Handle the case where the estheticien profile doesn't exist
        // You can redirect to a create profile page or display a message
        return redirect()->route('estheticien.create')->with('error', 'Please create your estheticien profile.');
    }

    // Pass the estheticien data to the welcome view
    return view('welcome', compact('estheticien'));
}


public function profil_esth(Estheticien $coiffeure){


return view('estheticien.profil_esth',compact('coiffeure'));
}
    
}
