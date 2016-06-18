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

                <div class="col-md-9" id="checkout">

                    <div class="box">
                        <form>
                            <h1 style="color: #041d33">Dirección</h1>
                            <ul class="nav nav-pills nav-justified borde">
                                <li class="active"><a href="#"><i class="fa fa-map-marker"></i><br>Dirección</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-truck"></i><br>Delivery</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-money"></i><br>Método de pago</a>
                                </li>
                                <li class="disabled"><a href="#"><i class="fa fa-eye"></i><br>Orden</a>
                                </li>
                            </ul>

                            <div class="content">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="firstname">Nombres</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="lastname">Apellidos</label>
                                            <input type="text" class="form-control" id="lastname">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="company">DNI</label>
                                            <input type="text" class="form-control" id="company">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="street">Dirección</label>
                                            <input type="text" class="form-control" id="street">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->

                                <div class="row">
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="city">Empresa</label>
                                            <input type="text" class="form-control" id="city">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="zip">Referencia</label>
                                            <input type="text" class="form-control" id="zip">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="state">Región</label>
                                            <select class="form-control" id="state"></select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="form-group">
                                            <label for="country">Ciudad</label>
                                            <select class="form-control" id="country"></select>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone">Telefóno</label>
                                            <input type="text" class="form-control" id="phone">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.row -->
                            </div>

                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/update') }}" class="btn btn-default"><i class="fa fa-chevron-left"></i>Regresar</a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ url('/delivery') }}" class="btn btn-primary">Continuar con Delivery<i class="fa fa-chevron-right"></i></a>
                                    </button>
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