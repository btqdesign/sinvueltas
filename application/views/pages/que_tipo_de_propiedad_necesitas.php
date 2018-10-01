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
        <div class="line-color">
            <div class="item-color-1"></div>
            <div class="item-color-2"></div>
            <div class="item-color-3"></div>
        </div>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <p class="text text-center">
            Nuestro propósito es ayudarte a conectar con el mejor espacio disponible en el mercado, que se adapte a tus gustos y necesidades, es por eso que te haremos unas breves preguntas para conocerte mejor ¿estás listo? 
        </p>
        <h1 class="topic text-center">¿Qué tipo de propiedad necesitas?</h1>
        <form method="post" action="propiedad">
            <div class="items">
                <div class="item-type">
                    <input class="radio casa" name="propiedad" type="radio" value="casa">
                    <i class="icon-house"></i>
                    <span class="dot"></span>
                </div>
                <div class="item-type">
                    <input class="radio departamento" name="propiedad"  type="radio" value="departamento">
                    <i class="icon-departamento"></i>
                    <span class="dot"></span>
                </div>
                <div class="item-type">
                    <input class="radio oficina" name="propiedad"  type="radio" value="oficina">
                    <i class="icon-oficina"></i>
                    <span class="dot"></span>
                </div>
            </div>

            <div class="text-center">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
</body>

</html>