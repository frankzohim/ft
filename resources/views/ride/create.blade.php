@extends('layouts.app')
@section('title',__('Ajouter un voyage'))

@section('content')

<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Ajouter un voyage
                            <small>Fast Travel Administration</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i fa fa-home="home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{route('ride.index')}}">voyages</li></a>
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
                        <h5>Ajouter un voyage</h5>
                    </div>
                    <div class="card-body">
                        <form class="row g-3" method="POST" action="{{route('ride.store')}}">
                            @csrf
                            <div class="col-md-6">
                              <label for="exampleFormControlTextarea1" class="form-label">Trajet</label>
                              <select class="form-select" aria-label="Default select example" name="path_id" required>
                                @foreach ($paths as $path)
                                  <option value="{{$path->id}}">{{$path->leaving}} - {{$path->arrival}} </option>
                                  @endforeach
                              </select>

                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Nombre de places</label>
                                <input type="number" value="{{ old('number_of_seats') }}" class="form-control" min='1' id="number_of_seats" aria-describedby="NameHelp" name="number_of_seats" required>
                              </div>
                              <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Nombre de places restantes</label>
                                <input type="number" class="form-control" value="{{ old('remaining_seats') }}" min='1' id="remaining_seats" aria-describedby="NameHelp" name="remaining_seats" required>
                              </div>

                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Voiture</label>
                              <select class="form-select" aria-label="Default select example" name="car_id">
                                @foreach ($cars as $car)
                                <option value="{{$car->id}}">{{$car->fullname}}</option>
                                @endforeach
                              </select>
                            </div>

                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">Date</label>
                                <input type="date" name="date" value="{{ old('date') }}" id="date" class="form-control" required>
                            </div>

                            
                              <div class="col-md-6">
                                <label for="inputState" class="form-label">Durée estimée</label>
                                <input type="number" class="form-control" value="{{ old('estimated_duration') }}" id="estimated_duration" aria-describedby="NameHelp" name="estimated_duration" required>
                              </div>

                            

                             

                             <div class="col-md-6">
                                  <label for="exampleFormControlTextarea1" class="form-label">Climatisation?</label>
                                  <select class="form-select" aria-label="Default select example" name="air_conditioner" required>
                                    
                                      <option value="1">Oui </option>
                                      <option value="0">Non </option>
                                    
                                  </select>
                              </div>

                              <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Energie</label>
                                <select class="form-select" aria-label="Default select example" name="energy" required>
                                  
                                    <option value="Essence">Essence </option>
                                    <option value="Gasoil">Gasoil </option>
                                  
                                </select>
                              </div>
                            
                              <div class="col-md-12">
                                <label for="inputCity" class="form-label">Point de ramassage</label>
                                <input type="text" class="form-control" value="{{ old('stopover') }}" name="stopover" id="stopover" required>
                              </div>

                            <label for="exampleFormControlTextarea1" class="form-label">Prix du voyage</label>
                            <div class="input-group mb-3 ">

                                <span class="input-group-text">CFA</span>

                                <input type="number" class="form-control" value="{{ old('price') }}" aria-label="Amount (to the nearest dollar)" name="price" required>
                                <span class="input-group-text">.00</span>
                            </div>
                     
                              <input type="hidden" name="state" value="0">
                        

                          

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