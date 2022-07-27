@extends('layouts.app')
@section('title', __('Ajouter un modèle'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Ajouter un modèle
                                    <small>Fast Travel Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">modèle</li>
                                <li class="breadcrumb-item active">Ajouter</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Ajouter un modèle</h5>
                            </div>
                            <div class="card-body">

                                   
									<!-- Validation Errors -->
									<x-auth-validation-errors class="mb-4" :errors="$errors" />
									
									@if (session('update_success'))
										<div class="alert alert-success alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-like-2"></i></span>
											<span class="alert-text"><strong>Succès! </strong> <strong>{{ session('update_success') }} </strong></span>
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                                        <div class="notification is-success">
                                        {{ session('update_success') }}
                                        </div>
									@endif
									@if (session('update_failure'))
										<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<span class="alert-icon"><i class="ni ni-fat-remove"></i></span>
											<span class="alert-text"><strong>Danger!</strong> <strong> {{ session('update_failure') }} </strong> </span>
												<button type="button" class="close" data-dismiss="alert" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
										</div>
									@endif
                                    <div class="col-xl-6">
                                        <form class="needs-validation add-product-form" method="POST" action="{{route('carmodel.store')}}" >
                                            @csrf
											<div class="form">

                                                <div class="form-group mb-6 row">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Nom du modèle</label>
                                                    <input type="text" name="name" class="form-control" required>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>

                                                <div class="form-group mb-6 row">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Marque</label>
                                                    <select class="form-select" aria-label="Default select example" name="make_id">
                                                      @foreach ($makes as $make)
                                                      <option value="{{$make->id}}">{{$make->name}}</option>
                                                      @endforeach
                                                    </select>
                                                    <div class="valid-feedback">Looks good!</div>
                                                </div>
                                                                                      
                                            </div>
											
											
                                            <div class="offset-xl-3 offset-sm-4">
                                                <button type="submit" class="btn btn-primary">Ajouter</button>
                                                <a href="{{ route('homepage') }}">
                                                    <button type="button" class="btn btn-light">Annuler

                                                    </button>
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid Ends-->
@endsection