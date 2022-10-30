<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use Illuminate\Http\Request;

class AboutMeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(AboutMe::all(),200);
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
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function show(AboutMe $aboutMe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutMe $aboutMe)
    {
        $aboutMe->update($request->all());
        return response()->json(['message'=>'sukses diedit'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutMe  $aboutMe
     * @return \Illuminate\Http\Response
     */
    public function destroy(AboutMe $aboutMe)
    {
        //
    }
}
