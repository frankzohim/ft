<?php

namespace App\Http\Controllers;

use App\Models\Ride;
use App\Models\Car;
use App\Models\Path;
use Illuminate\Http\Request;
use App\Http\Requests\RideRequest;

class RideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rides = Ride::all();
        return view('ride.index', compact('rides'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $paths = Path::all();
        return view('ride.create', compact('cars','paths'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RideRequest $request)
    {
        $validatedData = $request->validated();
        Ride::create($request->except('_token'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function show(Ride $ride)
    {
        return $ride;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function edit(Ride $ride)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ride $ride)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ride  $ride
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ride $ride)
    {
        //
    }
}
