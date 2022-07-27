@extends('layouts.app')
@section('title', __('Tableau de bord'))

@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <div class="page-header-left">
                    <h3>Tableau de Bord
                        <small>Kensoh Administration</small>
                    </h3>
                </div>
            </div>
            <div class="col-lg-6">
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-warning card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="navigation" class="font-warning"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Nombre de Colis</span>
                            <h3 class="mb-0"><span class="counter"></span><small> </small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden  widget-cards">
                <div class="bg-secondary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="box" class="font-secondary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Nombre de Produits</span>
                            <h3 class="mb-0"><span class="counter"></span><small> </small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-primary card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-primary"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Nombre de Clients</span>
                            <h3 class="mb-0"><span class="counter"></span><small> </small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 xl-50">
            <div class="card o-hidden widget-cards">
                <div class="bg-danger card-body">
                    <div class="media static-top-widget row">
                        <div class="icons-widgets col-4">
                            <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i></div>
                        </div>
                        <div class="media-body col-8"><span class="m-0">Nombre de  Vendeurs</span>
                            <h3 class="mb-0"> <span class="counter"></span><small> </small></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 xl-100">
            <div class="card">
                <div class="card-header">
                    <h5>Dernièrs Produits Ajoutés</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                            <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                               @php
                                   $products = [10,15];
                               @endphp
                           
                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary">Voir Toutes les Produits</a>
                    </div>
                    <div class="code-box-copy">
                        <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="" data-original-title="Copy"><i class="icofont icofont-copy-alt"></i></button>

                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 xl-100">
            <div class="card height-equal">
                <div class="card-header">
                    <h5>Derniers Colis Ajoutés</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="user-status table-responsive products-table">
                        <table class="table table-bordernone mb-0">
                            <thead>
                            <tr>
                                <th scope="col">description</th>
                                <th scope="col">lenght</th>
                                <th scope="col">width</th>
                                <th scope="col">weight</th>
                                <th scope="col">departure</th>
                                <th scope="col">destination</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                   

                            </tr>

                            </tbody>
                        </table>
                        <a href="#" class="btn btn-primary ">Voir Toutes les Colis</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Statistiques Colis</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="icofont icofont-simple-left"></i></li>
                            <li><i class="view-html fa fa-code"></i></li>
                            <li><i class="icofont icofont-maximize full-card"></i></li>
                            <li><i class="icofont icofont-minus minimize-card"></i></li>
                            <li><i class="icofont icofont-refresh reload-card"></i></li>
                            <li><i class="icofont icofont-error close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph">
                                <h6>Colis Départs</h6>

                                <!--<div class="chart-block chart-vertical-center">
                                    <canvas id="myDoughnutGraph"></canvas>
                                </div>-->
                                <div class="order-graph-bottom">
                                  


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 xl-50">
                            <div class="order-graph sm-order-space">
                                <h6>Colis Arrivés</h6>
                                <!--<div class="peity-chart-dashboard text-center">
                                    <span class="pie-colours-1">4,7,6,5</span>
                                </div>-->
                                <div class="order-graph-bottom sales-location">

                                  


                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 xl-100">
                            <div class="order-graph xl-space">
                                <h6>Nombre de colis par mois</h6>
                                <div class="ct-4 flot-chart-container"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- Container-fluid Ends-->


@endsection
