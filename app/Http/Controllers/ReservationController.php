<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Estheticien;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Show the form for creating a new reservation.
     *
     * @return \Illuminate\View\View
     */



     public function index()
     {
         $reservations = Reservation::all();
         return view('reservations.index', compact('reservations'));
     }
    public function reserver($service)
    {
       
        $estheticiens = Estheticien::all();
        $services = Service::find($service);
        return view('reservations.create', compact('estheticiens', 'services'));
    }

    /**
     * Store a newly created reservation in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'estheticien_id' => 'required|array|min:1',
            'estheticien_id.*' => 'exists:estheticiens,id', // Ensure each estheticien ID exists in the database
            'service_id' => 'required|array|min:1',
            'service_id.*' => 'exists:services,id', // Ensure each service ID exists in the database
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
           
            // Add more validation rules as needed
        ]);
    
        // Create reservation
        $reservation = Reservation::create([
            'bookingTime' => now(), // Set booking time to current time
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone'=> '5567890',
            'user_id' => Auth::id(),
            'estheticien_id' => implode(',', $request->estheticien_id), // Convert array to string
            'service_id' => implode(',', $request->service_id), // Convert array to string
        ]);
    
        return redirect()->route('/')->with('success', 'Reservation created successfully.');
    }
    

    /**
     * Display the specified reservation.
     *
     * @param  \App\Models\Reservation  $reservation
     * @return \Illuminate\View\View
     */
    public function show(Reservation $reservation)
    {
        return view('reservations.show', compact('reservation'));
    }

    // Add other methods as needed (e.g., edit, update, destroy)
    public function confirmReservation($id)
{
    $reservation = Reservation::findOrFail($id);
    $reservation->bookingConfirmation = true;
    $reservation->save();

    return redirect()->route('reservations.index')->with('success', 'Reservation confirmed successfully.');
}
}
