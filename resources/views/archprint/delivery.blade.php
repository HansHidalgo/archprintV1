@extends('layouts.index')
@section('content')
<section id="checkout" style="padding-top: 0px; padding-bottom: 140px;">
            <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Delivery</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form>
                            <h1 style="color: #041d33">Entrega</h1>
                            <ul class="nav nav-pills nav-justified borde">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-truck"></i><br>Delivery</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Método de pago</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Orden</a>
                                </li>
                            </ul>

                            <div class="content">
                                    <div class="row" style="margin-bottom: 30px;">
                                        <div class="col-sm-6 bordedos">
                                            <div class="box shipping-method">

                                                <h4>12 horas</h4>

                                                <p>Recibe tu maqueta en 12 horas. Opción muy rápida.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="delivery" value="delivery1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 bordedos">
                                            <div class="box shipping-method">

                                                <h4>24 horas</h4>

                                                <p>Recibe tu maqueta en 24 horas. Opción rápida.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="delivery" value="delivery2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 bordedos">
                                            <div class="box shipping-method">

                                                <h4>36 horas</h4>

                                                <p>Recibe tu maqueta en 24 horas. Opción normal.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="delivery" value="delivery3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/address') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar a dirección</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/pago') }}" class="btn btn-primary">Realizar Pago<i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

                <div class="col-md-3">

                    <div class="box" id="order-summary" style="margin-top: 160px;">
                        <div class="box-header">
                            <h3>Resúmen Orden</h3>
                        </div>
                        <p class="text-muted">El precio de la maqueta se calcula basándose en las dimensiones, el lugar y el tiempo para la entrega.</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Orden subtotal</td>
                                        <th>S/ 46.00</th>
                                    </tr>
                                    <tr>
                                        <td>Tiempo entrega</td>
                                        <th>S/ 10.00</th>
                                    </tr>
                                    <tr>
                                        <td>Costo extra delivery</td>
                                        <th>S/ 0.00</th>
                                    </tr>
                                    <tr class="total">
                                        <td>Total</td>
                                        <th>S/ 56.00</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
                <!-- /.col-md-3 -->

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