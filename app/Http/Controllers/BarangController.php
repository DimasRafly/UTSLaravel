<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;


class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return view('barangs.index', compact('barangs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barangs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $barang = Barang::create($request->all());
        return redirect()->route('barangs.index')->with('success', 'Barang created successfully');
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
        $barang = Barang::find($id); // Assuming you have an `$id` variable for the specific `barang` record you want to retrieve.
        return view('barangs.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $barang = Barang::find($id); // Assuming you have an `$id` variable for the specific `barang` record you want to update.
        $barang->update($request->all());
        return redirect()->route('barangs.index');
        // return redirect()->route('barangs.index')->with('success', 'Barang Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barangs.index')->with('success', 'Product Deleted Successfully');
    }
}
