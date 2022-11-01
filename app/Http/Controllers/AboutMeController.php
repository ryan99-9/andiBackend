<?php

namespace App\Http\Controllers;

use App\Models\Aboutme;
use Illuminate\Http\Request;

class AboutmeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Aboutme::all(),200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aboutme  $Aboutme
     * @return \Illuminate\Http\Response
     */
    public function show(Aboutme $Aboutme)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aboutme  $Aboutme
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aboutme $Aboutme)
    {
        $Aboutme->update($request->all());
        return response()->json(['message'=>'sukses diedit'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aboutme  $Aboutme
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aboutme $Aboutme)
    {
        //
    }
}
