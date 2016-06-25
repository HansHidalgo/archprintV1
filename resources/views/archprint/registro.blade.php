@extends('layouts.index')
@section('content')
<section id="checkout" style="padding-top: 0px;">
            <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Address</li>
                    </ul>
                </div>


            <div id="content" class="clearfix">

            <div class="container">

                <div class="row">


                    <!-- *** LEFT COLUMN ***
             _________________________________________________________ -->

                    <div class="col-md-9 col-md-offset-2 clearfix" id="customer-account" style="margin-top: 0px;">
                        <h1 style="color: #041d33;padding-bottom: 10px;padding-top: 30px;">REGÍSTRESE</h1>
                        <p class="lead">Ingrese su información de usuario y dirección para la entrega de sus maquetas.</p>
                        <!--p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p-->

                        <div class="box">

                            <div class="heading">
                                <h3 class="text-uppercase" style="color: #de5749;">Usuario</h3>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_old">Nombres</label>
                                            <input type="password" class="form-control" id="password_old" placeholder="Nombres">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_old">Apellidos</label>
                                            <input type="password" class="form-control" id="password_old" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_old">DNI</label>
                                            <input type="password" class="form-control" id="password_old" placeholder="Nombres">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_old">Celular</label>
                                            <input type="password" class="form-control" id="password_old" placeholder="Apellidos">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_1">Usuario</label>
                                            <input type="password" class="form-control" id="password_1" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_2">Correo</label>
                                            <input type="password" class="form-control" id="password_2" placeholder="Correo">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_1">Contraseña</label>
                                            <input type="password" class="form-control" id="password_1" placeholder="Contraseña">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="password_2">Confirmar Contraseña</label>
                                            <input type="password" class="form-control" id="password_2" placeholder="Confirmar Contraseña">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </form>

                        </div>
                        <!-- /.box -->


                        <div class="box clearfix">
                            <div class="heading">
                                <h3 class="text-uppercase" style="color: #de5749;">Dirección</h3>
                            </div>

                            <form>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">Dirección</label>
                                            <input type="text" class="form-control" id="company" placeholder="Dirección">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Referencia</label>
                                            <input type="text" class="form-control" id="street" placeholder="Referencia">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="state">Región</label>
                                            <select class="form-control" id="state"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <label for="country">Ciudad</label>
                                            <select class="form-control" id="country"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <a href="{{url('update')}}" type="submit" class="btn btn-template-main" style="background-color: #428bca; color: white;"><i class="fa fa-save"></i> Crear Usuario</a>
                                    </div>

                                </div>

                            </form>

                        </div>

                    </div>
                    <!-- /.col-md-9 -->

                    <!-- *** LEFT COLUMN END *** -->

                    <!-- *** RIGHT COLUMN ***
             _________________________________________________________ -->

                    

                    <!-- *** RIGHT COLUMN END *** -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>

            </div>
            <!-- /.container -->
        </div>
</section>
@endsection
@section('nav')
<ul class="nav navbar-nav navbar-right">
    <li><a href="{{url('/')}}">Inicio</a></li>
    <li><a href="{{ url('/beneficios') }}">Beneficios</a></li>
    <li class="active"><a data-toggle="modal" data-target="#login-modal">Ordene</a></li>
    <li><a href="{{ url('/somos') }}">¿Quiénes somos?</a></li>
    <li><a href="#contact">Contáctanos</a></li>
</ul>
@endsection