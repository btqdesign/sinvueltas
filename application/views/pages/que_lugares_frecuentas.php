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
        <progress class="component-progress" max="100" value="40"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-20">¿Qué lugares frecuentas?</h1>
        <p class="text-center text">Queremos asegurarnos que la propiedad que buscas esté cerca de tus actividades principales. GYM, Oficina, escuela, etc.</p>
    </section>
    <section class="main-wrapper">
        <article class="map">
            
        </article>
        <div>
            <p class="text-center text-legal">
                *Puedes agregar hasta 3 direcciones distintas
            </p>
        </div>
        <div class="add input-group col-12 col-sm-8 offset-sm-2">
            <input type="search" class="form-control" placeholder="Ingresa una dirección" aria-label="Ingresa una dirección"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="agergar-btn input-group-text">+ agregar</button>
            </div>
        </div>
        <form class="tipo mr-bottom-40" action="">
            <div class="row">
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-1" type="text" placeholder="Dirección">
                </div>
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-2" type="text" placeholder="Dirección">
                </div>
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-3" type="text" placeholder="Dirección">
                </div>
            </div>
        </form>    
        <form method="post" action="cerca">
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>

    </section>
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
</body>

</html>