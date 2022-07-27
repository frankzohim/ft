<?php

namespace App\Http\Controllers;
use App\Http\Requests\MakeRequest;
use App\Models\Make;
use Illuminate\Http\Request;

class MakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $makes = Make::all();
        return view('make.index', compact('makes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('make.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MakeRequest $request)
    {
        $validatedData = $request->validated();
        $make = new Make;
        $make->name = $request->name;

        if($make->save()){
            return redirect()->route('make.index')->with('update_success','Marque ajouté avec succès');
        }

        else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function show(Make $make)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function edit(Make $make)
    {
        return view('make.edit', compact('make'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Make $make)
    {
        $make->update($request->all());
        return redirect()->route('make.index')->with('update_success','Modifications prises en compte');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Make  $make
     * @return \Illuminate\Http\Response
     */
    public function destroy(Make $make)
    {
        $make->delete();
        return back()->with('update_success','Marque supprimé avec succès');
    }
}
