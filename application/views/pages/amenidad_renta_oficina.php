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
        <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-30">¿Qué te haría sentir cómodo?</h1>
            <div class="items width">
                <div class="quantity" style="margin-bottom: 0px">
                    <div class="head-icon">
                        <i class="icon-habitaciones icon-size-35 mr-right-20"></i>
                        <p class="text">| Habitaciones</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1" name="habitaciones">
                </div>
                <div class="quantity" style="margin-bottom: 0px">
                    <div class="head-icon">
                        <i class="icon-bano icon-size-35 mr-right-20"></i>
                        <p class="text">| Baño</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1">
                </div>
                <div class="quantity" style="margin-bottom: 0px">
                    <div class="head-icon">
                        <i class="icon-garage icon-size-35 mr-right-20"></i>
                        <p class="text">| Estacionamiento</p>
                    </div>
                    <input type="number" min="1" max="9" step="1" value="1">
                </div>
                <div  >
                    <p class="text" style="margin-bottom:  10px; margin-top: 5px; margin-left: 20px">m2 construidos</p>
                    <input name="tamano" type="number"   style="height: 40px;width: 203px;border: none;">
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
                            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="14" checked>
                            <label for="styled-checkbox-1">| Vigilancia</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="7">
                            <label for="styled-checkbox-2">| Elevador</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value3">
                            <label for="styled-checkbox-3">| Estacionamiento</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
                            <!--<label for="styled-checkbox-4">| Terraza / Roof garden</label>-->
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                            <!--<label for="styled-checkbox-8">| Alberca</label>-->
                        </div>    
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                            <!--<label for="styled-checkbox-8">| Alberca</label>-->
                        </div>    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="6">
                            <label for="styled-checkbox-5">| Cocina</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="8">
                            <label for="styled-checkbox-6">| Interior/Exterior</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
                            <!--<label for="styled-checkbox-7">| GYM</label>-->
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                            <!--<label for="styled-checkbox-8">| Alberca</label>-->
                        </div>     

                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-9" type="checkbox" value="1">
                            <label for="styled-checkbox-9">| Aire Acondicionado</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-10" type="checkbox" value="13">
                            <label for="styled-checkbox-10">| Terraza</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox" value="value11">
                            <!--<label for="styled-checkbox-11">| m2 construidos</label>-->
                        </div>
                        <div class="check-item">
                            <div class="item-type-number">
                                <input class="" name="propiedad" type="hidden" placeholder="MIN">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detalles inline-elements " style="visibility: hidden;">
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-1" name="1" type="radio" value="1" checked>
                        <label for="styled-radio-1">| NUEVO</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-2" name="1" type="radio" value="2">
                        <label for="styled-radio-2">| 5 a 10 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-3" name="1" type="radio" value="3">
                        <label for="styled-radio-3">| 10 a 20 años</label>
                    </div>
                    <div class="item-antiguedad">
                        <input class="styled-checkbox" id="styled-radio-4" name="1" type="radio" value="5">
                        <label for="styled-radio-4">| + 30 años</label>
                    </div>
                </div>          
        </div>
    </section>
    <div class="text-center  xs-mrT-40-lg-75 xs-mr-40-lg-75">
            <button class="btn-1">SIGUIENTE</button>
    </div>
       
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
</body>

</html>