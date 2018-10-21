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
        <progress class="component-progress" max="100" value="2"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        
        <p class="text-center text">Te ayudaremos a mostrar tu propiedad y gestionar el proceso para la venta o renta de la misma</p>
        <h1 class="topic text-center mr-bottom-20">¿Qué necesitas?</h1>
    </section>
    <section class="main-wrapper">
        <form method="post" action="#" id="eleccion">
            <div class="grid-less space">
                <div class="choose">
                    <div class="footer">
                        <input class="btn-choose" name="propietario" type="radio" value="Vender" required>
                        <label>Vender</label>
                    </div>
                </div>
                <div class="choose">
                    <div class="footer">
                        <input class="btn-choose" name="propietario" type="radio" value="Rentar" required>
                        <label>Rentar</label>
                    </div>
                </div>
            </div>
            
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>
    </section>
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>

    <script type="text/javascript">
         $("#eleccion").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#eleccion')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/propietario/eleccion',
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                    window.location.href = "https://sinvueltas.idevol.net/Vender_propietario";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    window.location.href = "https://sinvueltas.idevol.net/Rentar_propietario";               
                }
            });
         });
    </script>
</body>

</html>