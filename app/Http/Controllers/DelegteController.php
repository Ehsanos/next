<?php

namespace App\Http\Controllers;

use App\Models\Delegte;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;

class DelegteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $delegtes=Delegte::where('type','delegte')->get();
        $slider = Slider::where('discrption', '=', 'delegtes')->get();

        return view('pages.delegte',compact('delegtes','slider'));
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
     * @param  \App\Models\Delegte  $delegte
     * @return \Illuminate\Http\Response
     */
    public function show(Delegte $delegte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Delegte  $delegte
     * @return \Illuminate\Http\Response
     */
    public function edit(Delegte $delegte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Delegte  $delegte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delegte $delegte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Delegte  $delegte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Delegte $delegte)
    {
        //
    }
}
