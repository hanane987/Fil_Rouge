<?php

namespace App\Http\Controllers;

use App\Models\Estheticien;
use Illuminate\Http\Request;

class AdminEstheticienController extends Controller
{
    
    
        public function index()
        {
            $estheticienss = Estheticien::all(); // Retrieve all estheticiens from the database
            return view('esth.index', ['estheticiens' => $estheticienss]); 
        }
  

    public function create()
    {
        return view('admin.esth.estheticiens.create');
    }

    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'work_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Store the estheticien
        Estheticien::create($request->all());

        // Redirect
        return redirect()->route('admin.esth.estheticiens.index')->with('success', 'Estheticien created successfully.');
    }

    public function edit($id)
    {
        $estheticien = Estheticien::findOrFail($id);
        return view('admin.esth.estheticiens.edit', compact('estheticien'));
    }

    public function update(Request $request, $id)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'specialization' => 'required|string|max:255',
            'availability' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'work_name' => 'required|string|max:255',
            'price' => 'required|numeric',
        ]);

        // Update the estheticien
        $estheticien = Estheticien::findOrFail($id);
        $estheticien->update($request->all());

        // Redirect
        return redirect()->route('admin.esth.estheticiens.index')->with('success', 'Estheticien updated successfully.');
    }

    public function destroy($id)
    {
        // Find and delete the estheticien
        $estheticien = Estheticien::findOrFail($id);
        $estheticien->delete();

        // Redirect
        return redirect()->route('admin.esth.estheticiens.index')->with('success', 'Estheticien deleted successfully.');
    }
}
