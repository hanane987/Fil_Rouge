<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function login(Request $request)
    {
        // Validate input data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
       
        $credentials = $request->only('email', 'password');
    
      
        if (auth()->attempt($credentials)) {
            $user = auth()->user();
    
            
            switch ($user->role) {
                case 'admin':
                    return redirect()->intended('admin.index');
                    break;
                case 'estheticien':
                    return redirect()->route('estheticien.create');
                    break;
                default:
                    return redirect()->intended('dashboard');
            }
        }
    
       
        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
