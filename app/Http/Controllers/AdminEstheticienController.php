<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Estheticien;
use Illuminate\Http\Request;

class AdminEstheticienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estheticiens = Estheticien::all();
        return view('admin.estheticiens.index', compact('estheticiens'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.estheticiens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        // Handle image upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('estheticiens','public');
        }

        Estheticien::create([
            'first_name' => $request->first_name,
            'specialization' => $request->specialization,
            'availability' => $request->availability,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.estheticiens.index')->with('success', 'Estheticien created successfully.');
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
        $estheticien = Estheticien::findOrFail($id);
        return view('admin.estheticiens.edit', compact('estheticien'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        $estheticien = Estheticien::findOrFail($id);

        // Handle image upload
        $imagePath = $estheticien->image;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public','estheticiens');
        }

        $estheticien->update([
            'first_name' => $request->first_name,
            'specialization' => $request->specialization,
            'availability' => $request->availability,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.estheticiens.index')->with('success', 'Estheticien updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estheticien = Estheticien::findOrFail($id);

        
      
        if ($estheticien->image) {
            Storage::delete($estheticien->image);
        }

        $estheticien->delete();

        return redirect()->route('admin.estheticiens.index')->with('success', 'Estheticien deleted successfully.');
    }
}
