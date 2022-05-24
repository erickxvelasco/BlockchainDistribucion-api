<?php

namespace App\Http\Controllers;

use App\Models\Raza;
use Illuminate\Http\Request;
use App\Http\Resources\RazaResource;
use App\Http\Resources\RazaCollection;
use App\Http\Requests\StoreRazaRequest;
use App\Http\Requests\UpdateRazaRequest;

class RazaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():RazaCollection
    {
        $razas=Raza::all();
        return RazaCollection::make($razas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRazaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRazaRequest $request)//StoreRazaRequest
    {
        //dd($request->all());
        $raza=Raza::create($request->validate()['data']['attributes']);

       //$data= $request->validate();
       return RazaResource::make($raza);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function show(Raza $raza)
    {
       return RazaResource::make($raza);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function edit(Raza $raza)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRazaRequest  $request
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRazaRequest $request, Raza $raza)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Raza  $raza
     * @return \Illuminate\Http\Response
     */
    public function destroy(Raza $raza)
    {
        //
    }
}
