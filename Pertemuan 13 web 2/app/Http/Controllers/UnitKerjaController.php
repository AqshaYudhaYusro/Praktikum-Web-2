<?php

namespace App\Http\Controllers;

use App\Models\unit_kerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_unit_kerja = unit_kerja::all();
        return view('unit_kerja.index', ['list_unit_kerja' => $list_unit_kerja]);
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
    public function show(unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, unit_kerja $unit_kerja)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(unit_kerja $unit_kerja)
    {
        //
    }
}
