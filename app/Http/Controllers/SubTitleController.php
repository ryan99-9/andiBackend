<?php

namespace App\Http\Controllers;

use App\Models\SubTitle;
use Illuminate\Http\Request;

class SubTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(SubTitle::all(),200);
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
     * @param  \App\Models\SubTitle  $subTitle
     * @return \Illuminate\Http\Response
     */
    public function show(SubTitle $subTitle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubTitle  $subTitle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubTitle $subTitle)
    {
        $subTitle->update($request->all());
        return response()->json(['message'=>'sukses diedit'],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubTitle  $subTitle
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubTitle $subTitle)
    {
        //
    }
}
