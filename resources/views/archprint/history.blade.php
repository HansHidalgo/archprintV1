@extends('layouts.index')
@section('content')
<section id="" class="img-history" style="padding-top: 0px;padding-top: 100px; ">
            <div id="content">
            <div class="container">

               
                <div class="col-md-12" id="checkout">
                    <h1 align="center">HISTORIAL DE ÓRDENES</h1>
                    <p class="text-muted lead" style="color: white;">Si tienes alguna consulta, por favor no dude <a href="contact.html">en contactarnos</a>, nuestro servicio trabaja para usted 24/7.</p>

                        <div class="box">

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Orden</th>
                                            <th>Fecha</th>
                                            <th>Total</th>
                                            <th>Estado</th>
                                            <th>Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th># 17</th>
                                            <td>22/06/2016</td>
                                            <td>$ 50.00</td>
                                            <td><span class="label label-info">Imprimiendo</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 18</th>
                                            <td>22/06/2013</td>
                                            <td>$ 50.00</td>
                                            <td><span class="label label-info">Imprimiendo</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 19</th>
                                            <td>22/06/2016</td>
                                            <td>$ 50.00</td>
                                            <td><span class="label label-success">Recibido</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 20</th>
                                            <td>22/06/2016</td>
                                            <td>$ 50.00</td>
                                            <td><span class="label label-danger">Cancelado</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th># 21</th>
                                            <td>22/06/2016</td>
                                            <td>$ 150.00</td>
                                            <td><span class="label label-success">Recibido</span>
                                            </td>
                                            <td><a href="customer-order.html" class="btn btn-template-main btn-sm">Ver</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->

                        </div>
                        <!-- /.box -->


                </div>
                <!-- /.col-md-9 -->

               
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
</section>
@endsection