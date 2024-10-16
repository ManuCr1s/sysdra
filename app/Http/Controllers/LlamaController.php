<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Llama;

class LlamaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.llama'); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $llama = new Llama;
        $llama = Llama::select('id_llama','nombre','fecha_nacimiento','peso_vivo','peso_nacimiento','peso_destete')->get();
        return datatables()->of($llama)->toJson();
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
