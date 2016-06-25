@extends('layouts.index')
@section('content')
<section id="team">
            <div class="container">
                <div id="carousel-team" class="carousel slide" data-ride="carousel">
                    <div class="row">
           
                        <div class="col-md-8 col-md-offset-2">
                            <div class="section-heading scrollpoint sp-effect3">
                                <h3><span> NOSOTROS SOMOS</span></h3>
                                <span class="divider"></span>

                            </div>
                        </div>
                  
                    </div>
                
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="member">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="team/fotoT.jpg" alt="" height="120px">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        Hans Hidalgo
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook fa-"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        </ul>
                                                    </h4>
                                                    <p>Gerente General</p>
                                                    <span class="divider"></span>
                                                    <p>Estudiante de la carrera de Ingeniería de Sistemas de la Universidad Nacional de Ingeniería.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="member">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="team/cristian.jpg" alt="" height="120px">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        Christian Gutierrez
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook fa-"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        </ul>
                                                    </h4>
                                                    <p>Gerente Administrativo</p>
                                                    <span class="divider"></span>
                                                    <p>Estudiante de la carrera de Ingeniería de Sistemas de la Universidad Nacional de Ingeniería.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="member">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="team/lisbet.png" alt="" height="120px">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        Lisbet Enciso
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook fa-"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        </ul>
                                                    </h4>
                                                    <p>Gerente de Operaciones</p>
                                                    <span class="divider"></span>
                                                    <p>Estudiante de la carrera de Ingeniería de Sistemas de la Universidad Nacional de Ingeniería.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="member">
                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object" src="team/cynthia.jpg" alt="" height="120px">
                                                </a>
                                                <div class="media-body">
                                                    <h4 class="media-heading">
                                                        Cynthia Fuertes
                                                        <ul>
                                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-facebook fa-"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                        </ul>
                                                    </h4>
                                                    <p>Gerente Comercial</p>
                                                    <span class="divider"></span>
                                                    <p>Estudiante de la carrera de Ingeniería de Sistemas de la Universidad Nacional de Ingeniería..</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
@endsection
@section('nav')
<ul class="nav navbar-nav navbar-right">
    <li><a href="{{url('/')}}">Inicio</a></li>
    <li><a href="{{ url('/beneficios') }}">Beneficios</a></li>
    <li><a data-toggle="modal" data-target="#login-modal">Ordene</a></li>
    <li class="active"><a href="{{ url('/somos') }}">¿Quiénes somos?</a></li>
    <li><a href="#contact">Contáctanos</a></li>
</ul>
@endsection