<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale:1.0, user-scalable=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/style2.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="stylesheet" href="css/fontawesome.css">

<title>Maquetación</title>


<link rel="stylesheet" href="assets/css/animate.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/media-queries.css">
<link rel="stylesheet" href="assets/css/carousel.css">
<!-- Favicon and touch icons -->
<link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
<link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">

<body style="background-color: rgb(237, 238, 240);">


    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-light p-4">
                <h5 class="text-white h4">Collapsed content</h5>
                <span class="text-muted">Toggleable via the navbar brand.</span>
            </div>
        </div>
        <nav class="navbar navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="col-lg-1">
                <h5>Tienda</h5>

            </div>
            <div class="col-lg-2 text-lg-right">

                Lo antes posible <span class="fa fa-arrow-right"></span>
            </div>
            <div class="col-lg-3">
                <select name="direccion" id="" class="form-control form-control-sm">
                    <option value="">Jr. Miraflores 206</option>
                    <option value="">Jr. Miraflores 206</option>
                    <option value="">Jr. Miraflores 206</option>
                    <option value="">Jr. Miraflores 206</option>
                    <option value="">Jr. Miraflores 206</option>
                </select>
            </div>
            <div class="col-lg-3 mt-2">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1"><span class="fa fa-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Consigue lo que buscas" aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="col-lg-1" id="carrito">
                <a href="#" class="btn btn-danger btn-lg"><span class="fa fa-shopping-cart"></span></a>
            </div>
            <!--<input type="text" class="" placeholder="Consigue lo qeu buscas">-->

        </nav>
    </div>
    <div style="background-color: rgb(245, 240, 240)" id="amplicar"> </div>
    <div class="top-content">
        <div class="container" id="corra">
            <div id="carousel-example" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner row w-100 mx-auto" role="listbox">
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2 active">
                        <img src="{{ asset('assets/img/backgrounds/1.png') }}" class="img-fluid mx-auto d-block" alt="img1">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/2.png') }}" class="img-fluid mx-auto d-block" alt="img2">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/3.png') }}" class="img-fluid mx-auto d-block" alt="img3">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/4.png') }}" class="img-fluid mx-auto d-block" alt="img4">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/5.png') }}" class="img-fluid mx-auto d-block" alt="img5">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/6.png') }}" class="img-fluid mx-auto d-block" alt="img6">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/7.png') }}" class="img-fluid mx-auto d-block" alt="img7">
                    </div>
                    <div class="carousel-item col-2 col-sm-6 col-md-2 col-lg-2">
                        <img src="{{ asset('assets/img/backgrounds/8.png') }}" class="img-fluid mx-auto d-block" alt="img8">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div style="background-color: rgb(245, 240, 240)">  -</div>
    <div class="alert alert-warning  " role="alert" style="background-color: rgb(247, 154, 78); color:rgb(0, 0, 0)">
        <strong> Nuestro horario de Atención es de 10:00am-8:00pm</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <!--
    <div class="container-fluid">
        <div class="row">
            <div class="alert alert-warning " role="alert">
                Nuestro horario de Atención es de 10:00am-8:00pm
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>-->
    <div class="container-md">

        <div class="container m-2" style="background-color: rgb(255, 255, 255);">

            <div class="row p-3 " style="background-color: #eeb0c1">
                <div class="col-lg-6 font-weight-lighter align-self-center" style="color: rgb(3, 3, 3)">
                    <h4>
                        <strong>¡SÓLO HOY SÁBADO 2X1 en hamburguesa Queso Tocino mediana!</strong>
                    </h4>

                </div>
                <div class="col-lg-6 align-self-center">

                    <div class="row justify-content-center ">
                        <img class="jumbotron-img img-responsive mt center-block " style=" border-radius: 5% ; " src="Imagnes/RGDDRKNE2ZHJNB2M2DK5JKL5EI.jpg" width="350">
                    </div>

                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-4">
                    <h4>
                        <strong>
                            No te pierdas nuestras promociones
                        </strong>

                    </h4>
                    <button type="button" class="btn btn-dander bg-danger rounded-pill m-2">Ver Todo <span
                            class="fa fa-arrow-right"></span></button>
                </div>
                <div class="col-lg-4">
                    <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/shutterstock_651646891.png" width="300">
                    <h5 style="text-align: center; color: #000"><strong>Hamburguesa doble</strong></h5>
                    <h5 style="text-align: center ; font-size: 15px;">Delibery gratis:Aprox.54 min.</h5>
                </div>
                <div class="col-lg-4">
                    <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/shutterstock_651646891.png" width="300">
                    <h5 style="text-align: center;color: #000;"><strong>Hamburguesa doble</strong></h5>
                    <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                </div>

                <div class=" col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/gastronomia-del-mundo-3.jpg" width="200">
                            <h6 style="color: #000;"><strong>Tacos con Palta</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                        <div class="col-6 col-md-4">
                            <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/tqacos.jpg" width="200" height="130">
                            <h6 style="color: #000;"><strong>Tacos con Palta</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                        <div class="col-md-4" id="ult">
                            <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/segundosinterior.jpg" width="200">
                            <h6 style="color: #000;"><strong>Tacos con Palta</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container m-2" style="background-color: rgb(255, 255, 255);">
            <div class="row p-3" style="background-color: #eeb0c1">
                <div class="col-lg-6 font-weight-lighter align-self-center " style="color: rgb(3, 3, 3)">
                    <h4>
                        <strong>¡SÓLO HOY SÁBADO 2X1 en pollo a la brasa mediana!</strong>
                    </h4>

                </div>
                <div class="col-lg-6">
                    <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/En-que-restaurante-se-vendio-por-primera-vez-el-pollo-a-la-brasa.jpg" width="350">
                </div>
            </div>
            <div class="row p-3">
                <div class="col-lg-4">
                    <h4>
                        <strong>
                            No te pierdas nuestras promociones
                        </strong>

                    </h4>
                    <button type="button" class="btn btn-dander bg-danger rounded-pill m-2 ">Ver Todo <span
                            class="fa fa-arrow-right"></span></button>
                </div>
                <div class="col-lg-4">
                    <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/pollo-alb-620x330.jpg" width="300">
                    <h5 style="text-align: center;color: #000;"> <strong>Hamburguesa doble</strong></h5>
                    <h5 style="text-align: center ; font-size: 15px;">Delibery gratis:Aprox.54 min.</h5>
                </div>
                <div class="col-lg-4">
                    <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 5% ; " src="Imagnes/pollo-alb-620x330.jpg" width="300">
                    <h5 style="text-align: center; color: #000;"><strong>Hamburguesa doble</strong></h5>
                    <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                </div>

                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 35% ; " src="Imagnes/pollo-a-la-brasa-rico-peru.jpg" width="200" height="150px">
                            <h6 style="color: #000;"><strong>Pollo a la brasa</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                        <div class="col-6 col-md-4">
                            <img class="jumbotron-img img-responsive mt center-block" style=" border-radius: 35% ; " src="Imagnes/pollo.jpg" width="200" height="150">
                            <h6 style="color: #000;"><strong>Pollo a la brasa</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                        <div class="col-md-4 " style="color: #000;" id="ult2">
                            <img class="jumbotron-img img-responsive mt center-block " style=" border-radius: 35% ; " src="Imagnes/segundosinterior.jpg" width="200" height="150px">
                            <h6 style="color: #000;"><strong>Pollo a la brasa</strong></h6>
                            <h5 style="text-align: center ; font-size: 13px;">Delibery gratis:Aprox.54 min.</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">

            <footer class="pt-4 my-md-5 pt-md-5 border-top" style="background-color: rgb(250, 215, 232);">
                <div class="row">
                    <div class="col-md-1 col-md">
                        <style>
                            @media (max-width: 600px) {
                                div#ter,
                                div#map {
                                    display: none;
                                }
                                #for {
                                    margin-left: 130px;
                                    align-content: center;
                                }
                                #amplicar {
                                    margin-top: 150px;
                                }
                                #carrito {
                                    margin-top: -315px;
                                    margin-left: 360px;
                                }
                                #ult,
                                #ult2 {
                                    display: none;
                                }
                            }
                        </style>
                    </div>
                    <div class="col-md-3 col-md text-left " id="map">
                        <h5><strong>Mapa del sitio</strong></h5>
                        <ul class="list-unstyled text-small text-left">
                            <li><a class="text-muted" href="#">Mapa del sitio</a></li>
                            <li><a class="text-muted" href="#">Nosotros</a></li>
                            <li><a class="text-muted" href="#">Nosotros locales</a></li>
                            <li><a class="text-muted" href="#">Blog</a></li>
                            <li><a class="text-muted" href="#">Preguntas Frecuentes</a></li>
                            <li><a class="text-muted" href="#">Contacto</a></li>
                        </ul>
                    </div>

                    <div class="col-12 col-md-3 text-left ter" id="ter">
                        <h5><strong>Terminos y condiciones</strong></h5>
                        <ul class="list-unstyled  text-left" style="text-decoration: none">
                            <li><a class="text-muted" href="#">Politicas de datos personales</a></li>
                            <li><a class="" href="#"> Terminos de condiciones de Promociones</a></li>
                            <li><a class="text-decoration-none" href="#"> Empresas y socios estratégicos</a></li>
                            <li><a class="text-muted" href="#">Encargados del tratamiento</a></li>
                            <li><a class="text-muted" href="#"> Derecho ARCO</a></li>
                        </ul>
                    </div>
                    <div class="col-5 col-md-3 " id="for" style="color: black;">
                        <h5> <strong>Formas de pago</strong></h5>
                        <div class="row">
                            <div class="col-md-4  justify-content-center "> <img src="Imagnes/Visa_Logo.png" width="60px">
                            </div>
                            <div class="col-md-4 justify-content-center"><img src="Imagnes/320px-MasterCard_logo.png" width="60px"></div>
                            <div class="col-md-4 justify-content-center"><img src="Imagnes/American-Express.png" width="70px"></div>
                        </div>
                        <div class="row">
                            <div class="col-12 justify-content-between">
                                <button type="button" class="btn btn-primary btn-lg justify-content-between ">Comprobantes</button>
                            </div>

                        </div>
                        <div class="row ">
                            <div class="col-12">
                                <h5>Libro de reclamaciones <span class="fa fa-walking"></span></h5>
                            </div>

                        </div>

                    </div>
                    <div class="col-md-1 col-md">

                    </div>
                </div>
                <hr>
                <div class="row align-items-center">
                    <div class="col-12 col-md-2"></div>
                    <div class="col-md-8 small">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">

                                <h6> Copyright © Su sitio web 2020</h6>
                            </font>
                        </font>
                    </div>

                    <div class="col-md-2">
                        <ul>
                            <i class="fab fa-facebook fa-2x fa-lg"></i>
                            <i class="fab fa-youtube-square fa-2x fa-lg"></i>
                            <i class="fab fa-twitter-square fa-2x fa-lg"></i>
                            <i class="fab fa-instagram fa-2x fa-lg"></i>
                        </ul>
                    </div>
            </footer>



            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <script src="{{ asset('assets/js/jquery.backstretch.min.js') }}"></script>
        <script src="{{ asset('assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>