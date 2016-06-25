<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>ArchPrint 3D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">

    {!!Html::style("css/bootstrap.min.css")!!}
    {!!Html::style("css/animate.css")!!}
    {!!Html::style("css/font-awesome.min.css")!!}
    {!!Html::style("css/owl.carousel.css")!!}
    {!!Html::style("css/owl.theme.css")!!}
    {!!Html::style("css/styles.css")!!}
    @yield('css')
    {!!HTML::script("js/modernizr.custom.32033.js")!!}

    <!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!--div class="pre-loader">
        <div class="load-con">
            <img src="img/logo.png" class="animated fadeInDown" alt="">
            <div class="spinner">
              <div class="bounce1"></div>
              <div class="bounce2"></div>
              <div class="bounce3"></div>
            </div>
        </div>
    </div-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" style="margin-top: 40px;">
            <div class="modal-dialog modal-sm">

                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="Login" style="color: #de5749;">Ingrese su usuario</h4>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="form-group" style="border: 1px solid #25a7b4;">
                                <input type="text" class="form-control" id="email_modal" placeholder="email">
                            </div>
                            <div class="form-group" style="border: 1px solid #25a7b4;">
                                <input type="password" class="form-control" id="password_modal" placeholder="password">
                            </div>

                            <p class="text-center">
                                <a class="btn btn-template-main" style="background-color: #428bca; color: white;"  href="{{url('/update')}}"><i class="fa fa-sign-in"></i> Ingrese</a>
                            </p>

                        </form>

                        <p class="text-center text-muted">¿No está registrado?</p>
                        <p class="text-center text-muted"><a href="{{url('/registro')}}"><strong>Regístrase</strong></a>! Es fácil y solo le tomará un 1 minuto para ordenar su maqueta 3D.</p>

                    </div>
                </div>
            </div>
        </div>

    <!-- Wrap all page content here -->
    <div id="wrap">

        <div class="navbar navbar-static-top" id="nav" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="img/7.png" alt="" height="35px">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav social hidden-xs hidden-sm">
                            <li><a href="#"><i class="fa fa-google-plus fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest fa-lg fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin fa-lg fa-fw"></i></a></li>
                        </ul>
                        @yield('nav')
                        
                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!--/.container -->
            </div>
            <!--/.navbar -->
        <header class="masthead">
           

            <!-- Fixed navbar -->
            
            
        </header>
        @yield('content')
    </div>

    <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script-->
    {!!HTML::script("js/jquery.min.js")!!}
    {!!HTML::script("js/bootstrap.min.js")!!}
    {!!HTML::script("js/owl.carousel.min.js")!!}
    {!!HTML::script("js/waypoints.min.js")!!}

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>

    <!-- jQuery REVOLUTION Slider  -->
    {!!HTML::script("rs-plugin/js/jquery.themepunch.plugins.min.js")!!}
    {!!HTML::script("rs-plugin/js/jquery.themepunch.revolution.min.js")!!}

    {!!HTML::script("js/script.js")!!}
    @yield('script')
    <script>
        $(document).ready(function() {
            appMaster.preLoader();
        });
    </script>

</body>

</html>