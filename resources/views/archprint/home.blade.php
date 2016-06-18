@extends('layouts.index')
@section('content')
<section style="padding-bottom: 0px;"> 
            <div class="slider-container" id="slider">
                <div class="container">
                    <div class="row mh-container">
                        <h1><span>Imprime </span> tu maqueta <span>3D</span></h1>
                        <h3><span>con un solo click</span></b></h3>
                        <div class="col-md-4 col-md-push-4">
                            <div class="btn-group btn-group-justified btn-lg small">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default scrollpoint sp-effect6">
                                        Fácil
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default scrollpoint sp-effect6">
                                        Seguro
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default scrollpoint sp-effect6">
                                        Rápido
                                    </a>
                                </div>
                                <div class="btn-group">
                                    <a href="#" class="btn btn-default scrollpoint sp-effect6">
                                        Asequible
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 col-md-push-1 hidden-xs mh-slider">
                            <div class="row">
                                <div class="col-md-3">
                                    
                                    
                                    <a href="{{url('/update')}}" class="btn btn-default side">Imprime ahora!</a>
                                </div>
                                <div class="col-md-6">
                                    <div id="carousel-slider" class="carousel slide" data-ride="carousel">

                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="img/celular1.png" alt="..." class="img-responsive">
                                            </div>                                            
                                            <div class="item">
                                                <img src="img/celular2.png" alt="..." class="img-responsive">
                                            </div>
                                        </div>

                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                                            <span class="slider-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                                            <span class="slider-right"></span>
                                        </a>
                                    </div>

                                </div>
                                <div class="col-md-3" style="margin-top: 160px;">
                                    <div class="feature sp-effect2 active animated fadeInRight" style="font-color:white;">
                                        <div class="icon">
                                        <i class="fa fa-truck fa-4x"></i>
                                        </div>
                                    </div>
                                    Tú decides dónde recibiras tu maqueta
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </section>
@endsection