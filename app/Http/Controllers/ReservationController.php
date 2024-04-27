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
            'estheticien_id' => 'required',
            'service_id' => 'required',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'phone'=>'required',
            'datetime' => 'required|after:now',
           
            // Add more validation rules as needed
        ]);
    
        // Create reservation
        $reservation = Reservation::create([
            'bookingTime' => $request->datetime, // Set booking time to current time
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone'=> $request->phone,
            'user_id' => Auth::id(),
            'estheticien_id' => $request->estheticien_id ,// Convert array to string
            'service_id' => $request->service_id , // Convert array to string
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


public function confirmReservation(){
    $reservations=Reservation::whereHas('estheticiene',function($query){
        $query->where('user_id',Auth::id());
    })->where('bookingConfirmation',false)->get();



    return view('reservations.confirm',compact('reservations'));
}

public function confirm_reserv(Reservation $reservation){
    $reservation->bookingConfirmation=true;
    $reservation->save();
    return back()->with('success','Reservation confirmed');

}

public function myreservations(){

    $reservation=Reservation::where('user_id',Auth::id())->get();
    return view ('reservations.myreservations',compact('reservation'));
}
public function cancel(Reservation $booking){
   
    $booking->delete();
    return back()->with('success','Reservation canceled');

}
}
