<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title></title>
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
</head>

<body class="bg-gray">
    <section class="top">
        <progress class="component-progress" max="100" value="60"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-20">¿Qué prefieres tener cerca?</h1>
        <p class="text-center text">Sólo puedes seleccionar 3 opciones</p>
    </section>
    <section class="main-wrapper">
        <div class="grid-less space">
            <div class="choose">
                <i class="icon-parques icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>PARQUES</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-restaurantes icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>RESTAURANTES</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-centro-comercial icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>CENTRO COMERCIAL</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-tiendas icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>TIENDAS OXXO/7ELEVEN</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-gym icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>GYM</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-super-mercado icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>SUPERMERCADOS</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-poco-transito icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>ZONA DE POCO TRÁFICO</label>
                </div>
            </div>
            <div class="choose">
                <i class="icon-trasporte icon-size-35"></i>
                <div class="footer">
                    <input class="btn-choose" type="checkbox">
                    <label>TRANSPORTE PÚBLICO</label>
                </div>
            </div>
        </div>
        <form method="post" action="conocerte">
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
            <div class="text-center">
                <button><p class="text-details">OMITIR ESTE PASO ></p></button>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
</body>

</html>