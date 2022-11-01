<?php

namespace App\Http\Controllers;

use App\Models\Subtitle;
use Illuminate\Http\Request;

class SubtitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Subtitle::all(),200);
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
     * @param  \App\Models\Subtitle  $Subtitle
     * @return \Illuminate\Http\Response
     */
    public function show(Subtitle $Subtitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subtitle  $Subtitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subtitle $Subtitle)
    {
        $Subtitle->update($request->all());
        return response()->json(['message'=>'sukses diedit'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subtitle  $Subtitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subtitle $Subtitle)
    {
        //
    }
}
