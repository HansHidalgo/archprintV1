@extends('layouts.index')
@section('content')
<section id="checkout" style="padding-top: 0px; padding-bottom: 170px;">
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
                            <h1 style="color: #041d33">Orden</h1>
                            <ul class="nav nav-pills nav-justified borde">
                                <li class="disabled"><a href="#"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Método de pago</a>
                                </li>
                                <li class="active"><a href="#"><i class="fa fa-eye"></i><br>Orden</a>
                                </li>
                            </ul>

                            <div class="content">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2">Producto</th>
                                                    <th>Cantidad</th>
                                                    <th>Precio</th>
                                                    <th>Descuento</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="#">
                                                            <img src="img/casaImpresa.jpg" alt="White Blouse Armani" height="60px">
                                                        </a>
                                                    </td>
                                                    <td style="font-size: 14px;">Maqueta casa
                                                    </td>
                                                    <td>1</td>
                                                    <td>$53.00</td>
                                                    <td>$0.00</td>
                                                    <td>$53.00</td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="5">Total</th>
                                                    <th>$53.00</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                    <!-- /.table-responsive -->
                                </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/pago') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar a Método de pago</a>
                                </div>
                                <div class="pull-right">
                                
                                    <a href="{{ url('/history') }}" class="btn btn-primary">Continuar con Orden<i class="fa fa-chevron-right"></i></a>
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