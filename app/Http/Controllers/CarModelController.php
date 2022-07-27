<?php

namespace App\Http\Controllers;
use App\Models\CarModel;
use App\Http\Requests\carModelRequest;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carModels = CarModel::all();
        //dd($carModels);
        return view('car-model.index', compact('carModels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading all carModels from database
        $carModels = carModel::all();
        
        //opening view
        return view('car-model.create', compact('carModels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(carModelRequest $request)
    {
        $validatedData = $request->validated();
        
        $carModel = new CarModel;
        $carModel->name = $request->name;
        $carModel->make_id = $request->make_id;

        if($carModel->save()){
            return redirect()->route('carmodel.index')->with('update_success','Marque ajouté avec succès');
        }

        else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function show(CarModel $carModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CarModel $carModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CarModel $carModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CarModel  $carModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CarModel $carModel)
    {
        $carModel->delete();
        return back()->with('update_success','Modèle supprimé avec succès');
    }
}
