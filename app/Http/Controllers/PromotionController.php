<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view('admin.promotions.index', compact('promotions'));
    }

    /**
     * 
     */
    public function create()
    {
        return view('admin.promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
           // Create new promotion
           $promotion = new Promotion();
           $promotion->name = $request->name;
           $promotion->discount = $request->discount;
           $promotion->validityPeriodStart = $request->validityPeriodStart;
           $promotion->validityPeriodEnd = $request->validityPeriodEnd;
           // Add other promotion attributes
   
           // Save promotion
           $promotion->save();
   
           return redirect()->route('promotions.index')->with('success', 'Promotion added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->name = $request->name;
        $promotion->discount = $request->discount;
        $promotion->validityPeriodStart = $request->validityPeriodStart;
        $promotion->validityPeriodEnd = $request->validityPeriodEnd;
        // Update other promotion attributes

        $promotion->save();

        return redirect()->route('promotions.index')->with('success', 'Promotion updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();

        return redirect()->route('promotions.index')->with('success', 'Promotion deleted successfully.');
    }
}
