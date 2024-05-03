<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Service;
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
        $services= Service::all();
        return view('admin.promotions.create',compact('services'));
    }

    /**
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'discount' => 'required|numeric', 
            'validityPeriodStart' => 'required|date',
            'validityPeriodEnd' => 'required|date|after_or_equal:validityPeriodStart',
            'service_id'=> 'required',
        ]);
     
    
        // Create new promotion
        $promotion = new Promotion();
        $promotion->name = $request->name;
        $promotion->discount = $request->discount; 
        $promotion->validityPeriodStart = $request->validityPeriodStart;
        $promotion->validityPeriodEnd = $request->validityPeriodEnd;
        $promotion->service_id = $request->service_id;
       
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
     */
    public function edit(string $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.promotions.edit', compact('promotion'));
    }

    /**
     */
    public function update(Request $request, string $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->name = $request->name;
        $promotion->discount = $request->discount;
        $promotion->validityPeriodStart = $request->validityPeriodStart;
        $promotion->validityPeriodEnd = $request->validityPeriodEnd;
       

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



    public function statistics()
    {
        $userCount = User::count();
       
        $promotionCount = Promotion::count();

        return view('admin.promotions.statistics', compact('userCount', 'promotionCount'));
    }
}
