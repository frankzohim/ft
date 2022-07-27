<?php

namespace App\Http\Controllers;

use App\Models\Path;
use App\Models\Town;
use Illuminate\Http\Request;
use App\Http\Requests\PathRequest;

class PathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paths = Path::all();
        return view("path.index", compact('paths'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $towns = Town::all();
        return view('path.create', compact('towns'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PathRequest $request)
    {
        //Validating user's inputs
        $validatedData = $request->validated();
        //checking if path already exits
        $path = Path::where('leaving', $request->leaving)
        ->where('arrival', $request->arrival)
        ->count();

        if($path){
            return redirect()->back()->with('update_failure',"Désolé ce trajet existe déjà");
        }

        else{
            $path = new Path;
            $path->leaving = $request->leaving;
            $path->arrival = $request->arrival;
            if($path->save()){
                return redirect()->route('path.index')->with('update_success', 'Trajet ajouté avec succès');
            }
            else{
                return redirect()->back()->with('update_failure', "Une erreur est survenue veuillez réessayez plutard");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function show(Path $path)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function edit(Path $path)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Path $path)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Path  $path
     * @return \Illuminate\Http\Response
     */
    public function destroy(Path $path)
    {
        //
    }
}
