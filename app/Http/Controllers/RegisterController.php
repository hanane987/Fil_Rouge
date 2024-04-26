<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
      $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string', 
             'role'=>'required',
      ]);
     
      $user=User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=> Hash::make($request->password),
        'role'=>$request->role,
      ]);
      auth()->login($user);
      if($user->role == 'user'){
        return redirect()->route('reservations.create');
      }else{
        return redirect()->route('estheticien.create');
      }
     
    }

   
 
public function logout(){
    auth()->logout();
    return redirect()->route('login');
}


public function showAllUsers()
{
    
    $users = User::all();
    return view('admin.users', compact('users'));
}

/**
 * Ban a user.
 */
public function banUser($id)
{
    $user = User::findOrFail($id);
    $user->banned = true; // Assuming you have an 'is_banned' column in your users table
    $user->save();
    return redirect()->back()->with('success', 'User has been banned successfully.');
}

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
