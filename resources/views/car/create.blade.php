@extends('layouts.app')
@section('title',__('Ajouter un véhicule'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter un véhicule
                            <small>Fast Travel Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('car.index')}}">véhicules</li></a>
                        <li class="breadcrumb-item">Ajouter</li>

                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
         <!-- Validation Errors -->
				<x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Ajouter un Véhicule</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('car.store')}}">
                            @csrf

                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                              <select class="form-select" aria-label="Default select example" name="make_id">
                                @foreach ($makes as $make)
                                <option value="{{$make->id}}">{{$make->name}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="col-md-6">
                              <label for="exampleFormControlTextarea1" class="form-label">Modèle</label>
                              <select class="form-select" aria-label="Default select example" name="model_id" required>
                                @foreach ($models as $model)
                                  <option value="{{$model->id}}">{{$model->name}}</option>
                                  @endforeach
                              </select>
                           </div>

                            <div class="col-md-6">
                              <label for="exampleInputName" class="form-label">Numéro de chassis</label>
                              <input type="text" class="form-control" id="chassis" aria-describedby="NameHelp" value="{{old('name')}}" name="chassis" required>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Nombre de places</label>
                                <input type="number" min="2" class="form-control" aria-describedby="NameHelp" name="seats" required>
                              </div>
                              <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Nombre de portes</label>
                                <input type="number" min="2" class="form-control" aria-describedby="NameHelp" name="doors" required>
                              </div>
                            
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Kilométrage</label>
                                <input type="number" min="0" class="form-control" aria-describedby="NameHelp" name="mileage" required>
                            </div>

                            <div class="col-md-6">
                              <label for="exampleFormControlTextarea1" class="form-label">Année</label>
                              <input type="number" min="0" class="form-control" aria-describedby="NameHelp" name="year" required>
                          </div>

                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Energie</label>
                                <select id="inputState" class="form-select" name="energy">
                                    <option selected>Choisir...</option>
                                    <option value="Super">Super</option>
                                    <option value="Gazoil">Gazoil</option>
                                  </select>
                              </div>
                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Climatisation</label>
                                <select id="inputState" class="form-select" name="air_conditioner">
                                  <option selected>Choisir...</option>
                                  <option value="1">Oui</option>
                                  <option value="0">Non</option>
                                </select>
                              </div>
                            

                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Couleur</label>
                                <input type="text" id="color" class="form-select" name="color">
                                  
                              </div>

                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary">Créer</button>
                            </div>

                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Container-fluid Ends-->

</div>
@endsection