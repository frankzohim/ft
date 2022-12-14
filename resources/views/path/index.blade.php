@extends('layouts.app')
@section('title', __('Liste Trajets'))

@section('content')

            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-header-left">
                                <h3>Tous les Trajets
                                    <small>Fast Travel Dashboard</small>
                                </h3>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ol class="breadcrumb pull-right">
                                <li class="breadcrumb-item"><a href="index.html.htm"><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Trajets</li>
                                <li class="breadcrumb-item active">Listing</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
             <!-- Container-fluid Ends-->
			<!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-header">
                        <h5>Tous Les Trajets</h5>
                    </div>
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
                    <div class="card-body vendor-table">
                    <div class="btn-popup pull-right">
                       <a href="{{ route('path.create') }}">
                            <button type="button" class="btn btn-primary">
							    Ajouter Une Trajet
						    </button>
                        </a>  
                    </div>
                        <table class="display" id="basic-1">
                            <thead>
                            <tr>
                                <th>Départ</th>
                                <th>Destination</th>
                                <th>Date Création</th>
                                <th>Date Modification</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paths as $path)
                                <tr>
                                    <td>
                                        <div class="d-flex vendor-list">
                                            
                                            <span>{{$path->leaving}}</span>
                                        </div>
                                    </td>
                                    <td>{{$path->arrival}}</td>
                                    <td>{{$path->created_at}}</td>
                                    <td>{{$path->updated_at}}</td>
                                    <td>
                                        <div>
                                        <a href="{{route('path.edit',$path->id)}}" ><i class="fa fa-edit me-2 font-success"></i></a>

                                        <a href="{{ route('path.destroy',['path' => $path->id]) }}" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal{{$path->id}}"><i class="fa fa-trash font-danger"></i></a>
                                            
                                        <div class="modal fade" id="exampleModal{{$path->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title f-w-600" id="exampleModalLabel">Suppression</h5>
                                                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{ route('path.destroy',['path' => $path->id]) }}" id="delete-form{{$path->id}}">
                                                    @csrf
                                                    <p>{{ __('Voulez vous supprimer cet élément?') }}</p>
                                                    @method('DELETE')
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">Oui</button>
                                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Annuler</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
           
            <!-- Container-fluid Ends-->



@endsection