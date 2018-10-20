<!DOCTYPE html>
<html lang="es" class="full-back">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title></title>
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
</head>

<body>
    <form action="" id="comodoform">
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-30">¿Qué te haría sentir cómodo?</h1>
            <div class="items width">
                <div class="quantity">
                    <div class="head-icon">
                        <i class="icon-habitaciones icon-size-35 mr-right-20"></i>
                        <p class="text">| Habitaciones</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1" name="habitaciones">
                </div>
                <div class="quantity">
                    <div class="head-icon">
                        <i class="icon-bano icon-size-35 mr-right-20"></i>
                        <p class="text">| Baño</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1" name="bano">
                </div>
                <div class="quantity">
                    <div class="head-icon">
                        <i class="icon-garage icon-size-35 mr-right-20"></i>
                        <p class="text">| Estacionamiento</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1" name="estacionamiento">
                </div>
            </div>
        <p class="text-center text-details">Entre más detalles tengamos de tu parte, mejores resultados</p>
        <hr class="white">
    </section>
    
    <div class="text-center">
        <button class="btn btn-secondary btn-collapse" type="button" data-toggle="collapse" data-target="#details" aria-expanded="false" aria-controls="detail">
            SELECCIONAR MÁS DETALLES
        </button>
    </div>
    <section class="detalles collapse" id="details">
        <div class="main-wrapper">            
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-1" name="styled-checkbox-1" type="checkbox" value="10" checked>
                            <label for="styled-checkbox-1">| Jardin</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-2" name="styled-checkbox-2" type="checkbox" value="5">
                            <label for="styled-checkbox-2">| Balcones</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-3" name="styled-checkbox-3" type="checkbox" value="3">
                            <label for="styled-checkbox-3">| Amueblado</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-4" name="styled-checkbox-4" type="checkbox" value="13">
                            <label for="styled-checkbox-4">| Terraza / Roof garden</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-5" name="styled-checkbox-5" type="checkbox" value="11">
                            <label for="styled-checkbox-5">| Tengo mascota</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-6" name="styled-checkbox-6" type="checkbox" value="14">
                            <label for="styled-checkbox-6">| Vigilancia</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-7" name="styled-checkbox-7" type="checkbox" value="9">
                            <label for="styled-checkbox-7">| GYM</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" name="styled-checkbox-8" type="checkbox" value="2">
                            <label for="styled-checkbox-8">| Alberca</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-9" name="styled-checkbox-9" type="checkbox" value="12">
                            <label for="styled-checkbox-9">| Salón de usos multiples</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-10" name="styled-checkbox-10" type="checkbox" value="4">
                            <label for="styled-checkbox-10">| Área para niños</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox" value="value11">
                            <label for="styled-checkbox-11">| m2 construidos</label>
                        </div>
                        <div class="check-item">
                            <div class="item-type-number">
                                <input class="" name="tamano" type="number" placeholder="MIN">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detalles inline-elements ">
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-1" name="antiguedad" type="radio" value="5" checked>
                        <label for="styled-radio-1">| NUEVO</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-2" name="antiguedad" type="radio" value="3">
                        <label for="styled-radio-2">| 5 a 10 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-3" name="antiguedad" type="radio" value="1">
                        <label for="styled-radio-3">| 10 a 20 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-4" name="antiguedad" type="radio" value="6">
                        <label for="styled-radio-4">| + 30 años</label>
                    </div>
                </div>          
        </div>
    </section>
    <div class="text-center  xs-mrT-40-lg-75 xs-mr-40-lg-75">
            <button class="btn-1">SIGUIENTE</button>
    </div>
     </form>
       
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
</body>

</html>