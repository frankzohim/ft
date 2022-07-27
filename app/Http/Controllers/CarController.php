<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Make;
use App\Models\CarModel;
use App\Models\CarType;
use App\Http\Requests\CarRequest;
use Illuminate\Http\Request;
use Validator;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Loading all makes
        $makes = Make::all();
        //Loading all models
        $models = CarModel::all();

        //Loading car type
        $car_types = CarType::all();

        //Rendering the view
        return view('car.create', compact('makes','models','car_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request)
    {
        $validatedData = $request->validated();
        $car = new Car;
        $carModel = CarModel::findOrFail($request->model_id);
        $make = $carModel->make();
        dd($make);
        $car->model_id  = $request->model_id;
        $car->chassis_number  = $request->chassis;
        $car->number_of_places  = $request->seats;
        $car->number_of_doors  = $request->doors;
        $car->mileage  = $request->mileage;
        $car->year  = $request->year;
        $car->energy  = $request->energy;
        $car->air_conditioner  = $request->air_conditioner;
        $car->color  = $request->color;
        $car->user_id  = auth()->user()->id;

        if($car->save()){
            return redirect()->route('car.index')->with('update_success','Véhicule ajouté avec succès');
        }

        else{
            return redirect()->back()->with('update_failure','Une erreur est survenue, veuillez réessayez');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
         //Loading all makes
         $makes = Make::all();
         //Loading all models
         $models = CarModel::all();
 
         //Loading car type
         $car_types = CarType::all();
         $model = CarModel::findOrFail($car->model_id);
         $carMake = Make::findOrFail($model->make_id);
        return view('car.edit', compact('car','makes','models','car_types','carMake'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $car)
    {
        
        $validator = Validator::make($request->all(),[
            'make_id'=>['required', 'exists:makes,id'],
            'model_id'=>['required', 'exists:car_models,id'],
            'chassis'=>['required', 'unique:cars,chassis_number,except,'.$request->car->id],
            'seats'=>['required', 'integer','min:2'],
            'doors'=>['required', 'integer','min:2'],
            'mileage'=>['required','integer'],
            'year'=>['required', 'integer'],
            'energy'=>['required', 'string'],
            'air_conditioner'=>['required', 'boolean'],
            'color'=>['required', 'string'],
        ]);

        $car->update($request->all());

        return redirect()->route('car.index')->with('update_success','Véhicule mise à jour avec succès');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->back()->with('update_success','Véhicule supprimé avec succès');
    }
}
