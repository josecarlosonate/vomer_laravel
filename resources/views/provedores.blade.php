<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FB0d07">
    <title>Vomerc </title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!--=====================================
        HOJA DE CSS 
    ======================================-->
    {{-- <link rel="stylesheet" href="css/estilo.css"> --}}
    <link rel="stylesheet" href="css/provedores.css">
    <!-- ICONOS -->
    <script src="https://kit.fontawesome.com/2c9eef3e53.js" crossorigin="anonymous"></script>

</head>
<body>
    <div class="row" id="buscador">
        <div class="container-1">
            <span class="icon"><i class="fa fa-search"></i></span>
            <input type="search" id="search" placeholder="Buscar..." />
        </div>
    </div>
    <div class="container">
        <h1 class="text-danger text-bold text-capitalize text-center mt-3">Nuestros Provedores</h1>
        <div class="row pt-3">
            @foreach ( $provedoresArray as $provedores )
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card border-danger shadow p-3 mb-5 bg-body rounded">
                        <img src="" class="card-img-left" alt="">
                        <div class="card-body text-danger">
                            <h5 class="card-title">{{$provedores['name']}}</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Valledupar</small></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--  footer -->
    <footer>
        <div class="container">
            <div class="c">
                <h4 class="text-center">VOMERC</h4>
                <p>Centro Comercial Digital o Marketplace donde, GRATUITAMENTE, podrán interactuar negocios,
                    emprendedores y personas, en una dinámica de compra y venta, de productos y servicios.</p>
            </div>
            <div class="c">
                <h4 class="text-center">NUESTRAS REDES</h4>
                <div class="caja-icono">

                    <a href="https://www.instagram.com/vomerc_app/?hl=es-la" target="_blank" rel="noopener noreferrer">
                        <div id="BtnInstagram" class="icono" title="instagram">
                            <i class="fab fa-instagram"></i>
                        </div>
                    </a>


                    <a href="https://www.youtube.com/channel/UCtK3Ph_aaPHbzoNH_CV87qQ" target="_blank"
                        rel="noopener noreferrer">
                        <div id="BtnYoutube" class="icono" title="youtube">
                            <i class="fab fa-youtube"></i>
                        </div>
                    </a>


                    <a href="https://twitter.com/Vomerc_app" target="_blank" rel="noopener noreferrer">
                        <div id="BtnTwitter" class="icono" title="twitter">
                            <i class="fab fa-twitter"></i>
                        </div>
                    </a>

                    <a href="https://www.facebook.com/vomerc" target="_blank" rel="noopener noreferrer">
                        <div id="BtnFacebook" class="icono" title="facebook">
                            <i class="fab fa-facebook-f"></i>
                        </div>
                    </a>

                    <a href="https://wa.me/573153302682" target="_blank" rel="noopener noreferrer">
                        <div id="BtnWhatsapp" class="icono" title="whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="c">
                <h4>DESCARGAS</h4>
                <div class="btn-group">
                    <button style="border:none;"
                        onclick="return gtag_report_conversion('https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US')">
                        <img id="BtnDesInf" src="img/playstore2.png" alt="playsotre">
                    </button>

                </div>
            </div>
        </div>
        <div class="acerca text-center">
            <h6> &copy; <b>VOMERC</b> Todos los derechos reservados - info@vomerc.com - juridica@vomerc.com
                <br>
            </h6>
            <p class="miNombre">Desarrollador pagina ING Jose Rodriguez - tel: 324 409 5054</p>
        </div>
    </footer>
</body>
</html>

