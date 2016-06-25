@extends('layouts.index')
@section('css')
    <link href="{{ asset('/css/dropzone.css') }}" rel="stylesheet">
@endsection
@section('content')
<section id="checkout" style="padding-top: 0px; background-image: url(img/img3.jpg);">
            <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Checkout - Address</li>
                    </ul>
                </div>

                 <div class="container">
        <div class="row" style="margin-top: 70px;">
            <h1>SUBA SU MODELO</h1>
            <div class="panel panel-primary" style="margin-top: 35px;">
                <div class="panel-heading">
                    SUBA SU ARCHIVO (.STL)
                </div>
                <div class="panel-body">
                    {!! Form::open(['url'=> 'update/file', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                    <div class="dz-message" style="height:100px;">
                        Drop your files here
                    </div>
                    <div class="dropzone-previews"></div>
                    <button type="submit" class="btn btn-success" id="submit">UPDATE</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <div class="box-footer">
                                <div class="pull-right">
                                    <a href="{{ url('/address') }}" class="btn btn-primary">Continuar<i class="fa fa-chevron-right"></i></a>
                                    </button>
                                </div>
                            </div>
    </div>
                <!-- /.col-md-3 -->

            </div>
            <!-- /.container -->
        </div>
</section>
@endsection
@section('script')
{!! Html::script('js/dropzone.js'); !!}
    <script>
        Dropzone.options.myDropzone = {
            autoProcessQueue: false,
            uploadMultiple: true,
            maxFilezise: 10,
            maxFiles: 2,
            
            init: function() {
                var submitBtn = document.querySelector("#submit");
                myDropzone = this;
                
                submitBtn.addEventListener("click", function(e){
                    e.preventDefault();
                    e.stopPropagation();
                    myDropzone.processQueue();
                });
                this.on("addedfile", function(file) {
                    alert("file uploaded");
                });
                
                this.on("complete", function(file) {
                    myDropzone.removeFile(file);
                });
 
                this.on("success", 
                    myDropzone.processQueue.bind(myDropzone)
                );
            }
        };
    </script>
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