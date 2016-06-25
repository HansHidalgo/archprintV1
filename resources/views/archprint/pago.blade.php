@extends('layouts.index')
@section('content')
<section id="checkout" style="padding-top: 0px; padding-bottom: 140px;">
            <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Método de pago</li>
                    </ul>
                </div>

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form method="post" action="checkout2.html">
                            <h1 style="color: #041d33">Realizar de Pago</h1>
                            <ul class="nav nav-pills nav-justified borde">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-money"></i><br>Método de pago</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Orden</a>
                                </li>
                            </ul>

                            <div class="content">
                                    <div class="row" style="margin-bottom: 30px;">
                                        <div class="col-sm-6 bordedos">
                                            <div class="box payment-method">

                                                <h4>Paypal</h4>

                                                <p>We like it all.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment" value="payment1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 bordedos">
                                            <div class="box payment-method">

                                                <h4>Payment gateway</h4>

                                                <p>VISA and Mastercard only.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment" value="payment2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-6 bordedos">
                                            <div class="box payment-method">

                                                <h4>Cash on delivery</h4>

                                                <p>You pay when you get it.</p>

                                                <div class="box-footer text-center">

                                                    <input type="radio" name="payment" value="payment3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.row -->

                                </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/delivery') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar a entrega</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/orden') }}" class="btn btn-primary">Ver Orden<i class="fa fa-chevron-right"></i></a>
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