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
    <div id="tipo_propiedad">
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
        <p class="text text-center xs-mr-40-lg-75">
            Nuestro propósito es ayudarte a conectar con el mejor espacio disponible en el mercado, que se adapte a tus gustos y necesidades, es por eso que te haremos unas breves preguntas para conocerte mejor ¿estás listo? 
        </p>
        <h1 class="topic text-center xs-mr-40-lg-75">¿Qué tipo de propiedad necesitas?</h1>
        <form class="tipo" id="Formtipo">
            <div class="items xs-mr-40-lg-75">
                <div class="item-type">
                    <input class="radio casa" name="propiedad"  type="radio" value="casa">
                    <i class="icon-house"></i>
                    <span class="dot"></span>
                    <p class="type-propiedad">CASA</p>
                </div>
                <div class="item-type">
                    <input class="radio departamento" name="propiedad" type="radio" value="departamento">
                    <i class="icon-departamento"></i>
                    <span class="dot"></span>
                    <p class="type-propiedad">DEPARAMENTO</p>
                </div>
                <div class="item-type">
                    <input class="radio oficina" name="propiedad" type="radio" value="oficina">
                    <i class="icon-oficina"></i>
                    <span class="dot"></span>
                    <p class="type-propiedad">OFICINA</p>
                </div>
            </div>
            <div class="text-center">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>
    </section>
        
    </div>
    <div id="presupuesto">
        <section class="top">
        <progress class="component-progress" max="100" value="5"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center xs-mr-40-lg-75">¿Cuál es tu presupuesto?</h1>
        <form class="tipo" id="presupuestoForm" method="POST">
            <div class="items ">
                <div class="item-type-number xs-mr-40-lg-75">
                    <input class="" name="minimo" id="minimo" type="number" placeholder="MIN.$">
                </div>
                <div class="item-type-number xs-mr-40-lg-75">
                    <input class="" name="maximo" id="maximo" type="number" placeholder="MAX.$">
                </div>
            </div>

            <div class="text-center">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>
    </section>
    </div>
    <div id="comodo">
        <section class="top">
        <progress class="component-progress" max="100" value="15"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>

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
                            <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1" checked>
                            <label for="styled-checkbox-1">| Jardin</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2">
                            <label for="styled-checkbox-2">| Balcones</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value3">
                            <label for="styled-checkbox-3">| Amueblado</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-4" type="checkbox" value="value4">
                            <label for="styled-checkbox-4">| Terraza / Roof garden</label>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-5" type="checkbox" value="value5">
                            <label for="styled-checkbox-5">| Tengo mascota</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-6" type="checkbox" value="value6">
                            <label for="styled-checkbox-6">| Vigilancia</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-7" type="checkbox" value="value7">
                            <label for="styled-checkbox-7">| GYM</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-8" type="checkbox" value="value8">
                            <label for="styled-checkbox-8">| Alberca</label>
                        </div>                    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                            <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-9" type="checkbox" value="value9">
                            <label for="styled-checkbox-9">| Salón de usos multiples</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-10" type="checkbox" value="value10">
                            <label for="styled-checkbox-10">| Área para niños</label>
                        </div>
                        <div class="check-item">
                            <input class="styled-checkbox" id="styled-checkbox-11" type="checkbox" value="value11">
                            <label for="styled-checkbox-11">| m2 construidos</label>
                        </div>
                        <div class="check-item">
                            <div class="item-type-number">
                                <input class="" name="propiedad" type="number" placeholder="MIN">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="detalles inline-elements ">
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
     </form>
       
     </div>
     <div id="gustaria">
          <section class="top">
        <progress class="component-progress" max="100" value="20"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-20">¿En dónde te gustaría vivir?</h1>
        <p class="text-center text">Entre más detalles tengamos de tu parte, mejores resultados</p>
    </section>
    <section class="main-wrapper">
        <div class="row">
            <div class="col-xs-12 col-sm-4">
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Cuahutémoc" aria-label="Cuahutémoc"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Polanco" aria-label="Polanco"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Roma" aria-label="Roma"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Anzures" aria-label="Anzures"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Irrigación" aria-label="Irrigación"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Condesa" aria-label="Condesa"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4">
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Juárez" aria-label="Juárez"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="Granada" aria-label="Granada"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
                <div class="add input-group mb-3">
                    <input type="text" class="form-control" disabled placeholder="San Miguel Chapultepec" aria-label="San Miguel Chapultepec"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="input-group-text" id="basic-addon2">+</button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p class="text-center text-details">Otras colonias próximamente</p>
        <div class="grid-less">
            <div class="add input-group mb-3">
                <input type="text" class="form-control" disabled placeholder="San Miguel Chapultepec" aria-label="San Miguel Chapultepec"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="less input-group-text" id="basic-addon2">+</button>
                </div>
            </div>
            <div class="add input-group mb-3">
                <input type="text" class="form-control" disabled placeholder="San Miguel Chapultepec" aria-label="San Miguel Chapultepec"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="less input-group-text" id="basic-addon2">+</button>
                </div>
            </div>
            <div class="add input-group mb-3">
                <input type="text" class="form-control" disabled placeholder="San Miguel Chapultepec" aria-label="San Miguel Chapultepec"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="less input-group-text" id="basic-addon2">+</button>
                </div>
            </div>
            <div class="add input-group mb-3">
                <input type="text" class="form-control" disabled placeholder="San Miguel Chapultepec" aria-label="San Miguel Chapultepec"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="less input-group-text" id="basic-addon2">+</button>
                </div>
            </div>
        </div>
        <form method="post" id="gustariaForm">
            <div class="text-center" >
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>
    </section>
     </div>
     <div id="actividades">
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
        <form class="tipo mr-bottom-40" id="formActividades">
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
            </div><br>
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>  

    </section>

     </div>
     <div id="cercano">
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
        <form method="post" id="cercanoForm">
            <div class="grid-less space">
                <div class="choose">
                    <i class="icon-parques icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" name="parque" value="parque">
                        <label>PARQUES</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-restaurantes icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="restaurantes">
                        <label>RESTAURANTES</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-centro-comercial icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="c_comercial">
                        <label>CENTRO COMERCIAL</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-tiendas icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="OXXO/7ELEVEN">
                        <label>TIENDAS OXXO/7ELEVEN</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-gym icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="gym">
                        <label>GYM</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-super-mercado icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="supermercado">
                        <label>SUPERMERCADOS</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-poco-transito icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="poco_trafico">
                        <label>ZONA DE POCO TRÁFICO</label>
                    </div>
                </div>
                <div class="choose">
                    <i class="icon-trasporte icon-size-35"></i>
                    <div class="footer">
                        <input class="btn-choose" type="checkbox" value="trans_pub">
                        <label>TRANSPORTE PÚBLICO</label>
                    </div>
                </div>
            </div>
        
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
            <div class="text-center">
                <button><p class="text-details">OMITIR ESTE PASO ></p></button>
            </div>
        </form>
     </div>

     <div id="usuario">
          <section class="top">
        <progress class="component-progress" max="100" value="70"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-40">¡Queremos conocerte!</h1>
        <p class="text-center text">Recopilaremos las propiedades ideales para ti. Ayúdanos con tus datos de contacto.</p>
        <div class="text-center">
            <button class="btn-red registrar">
                <div class="content-registro">
                    <p class="text">
                        Registrate con:
                    </p>
                    <div class="circle">
                        <i class="icon-facebook"></i>
                    </div>

                </div>
            </button>
        </div>
        <p class="text-center text">*Descuida, nunca publicaremos en tu perfi.</p>
        <div  class="separator">
            <div class="line"></div>
            <span class="dot gray"></span>
            <div class="line"></div>
        </div>
        <form method="post"  id="usuarioForm">
            <div class="row">
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>
                    <input type="text" placeholder="Nombre" id="nombre"  name="nombre" required>
                    <label class="text-legal cr-red" for="">Este campo debe ser llenado correctamente</label>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>
                    <input class="" name="apellido" id="apellido" type="text" placeholder="Apellido" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-12 item-type-number mr-bottom-20">
                    <span class="cr-red">*</span>
                    <input class="" name="" type="email" placeholder="Dirección de correo electrónico" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-12">
                    <p class="text-center text-legal">
                        Compartenos tu número de celular, nos ayudará a estar en contacto ya que recibirás un código de confirmación vía SMS. 
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>    
                    <input class="" name="" type="number" placeholder="Número de celular (10 dígitos)" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>
                    <input class="" name="" type="number" placeholder="Confirmar" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-12">
                    <p class="text-legal">
                        Tu número movil jamás será usado, compartido o vendido para usos diferentes a los de Plick.
                    </p>
                    <div class="check-item">
                        <input class="styled-checkbox" id="styled-checkbox-terminos" type="checkbox" value="value1" required>
                        <label for="styled-checkbox-terminos">He leído y acepto los</label> <a class="link-red" href="">Terminos y condiciones de uso</a>, y <a class="link-red" href="">políticas de privacidad</a>
                    </div>
                </div>

            </div>
            <section class="main-wrapper">
                <div class="text-center mr-bottom-20">
                    <button class="btn-1">SIGUIENTE</button>
                </div>
            </section>
        </form>
    </section>        
     </div>


     <div id="contacto">
         <section class="top">
        <progress class="component-progress" max="100" value="80"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-40">¡Queremos conocerte!</h1>
        <p class="text-center text">Recopilaremos las propiedades ideales para ti. Ayúdanos con tus datos de contacto.</p>
        <form action="" id="FormContacto">
            <div class="row mr-bottom-40">
                <div class="col-12 col-sm-6 flex-center">
                    <div class="avatar-space mr-bottom-40">
                        <img src="" alt="">  
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number flex-center mr-bottom-40">
                    <input class="" name="nombre" id="nombre" type="text" placeholder="Nombre" required>
                </div>
            </div>       
            <div class="row">
                <div class="col-12">
                    <p class="text-center text-legal">
                        <span class="cr-red">*</span>
                        Compartenos tu número de celular, nos ayudará a estar en contacto ya que recibirás un código de confirmación vía SMS. 
                    </p>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>    
                    <input class="" name="numero" type="number" placeholder="Número de celular (10 dígitos)" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number">
                    <span class="cr-red">*</span>
                    <input class="" name="confirmacion" type="number" placeholder="Confirmar" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-12">
                    <p class="text-legal">
                        Tu número movil jamás será usado, compartido o vendido para usos diferentes a los de Plick.
                    </p>
                    <div class="check-item">
                        <input class="styled-checkbox" id="styled-checkbox-terminos" type="checkbox" value="value1">
                        <label for="styled-checkbox-terminos">He leído y acepto los</label> <a class="link-red" href="">Terminos y condiciones de uso</a>, y <a class="link-red" href="">políticas de privacidad</a>
                    </div>
                </div>

            </div>
            <br>
             <section class="main-wrapper">
                <div class="text-center mr-bottom-20">
                    <button class="btn-1">SIGUIENTE</button>
                </div>
            </section>
        </form>
    </section>
   
     </div>
     <div id="telefono">
             <section class="top">
        <progress class="component-progress" max="100" value="100"></progress>
        <div class="pleca-roja">
            <div class="main-wrapper">
                <figure class="col-12">
                    <img src="/dist/img/logo.png" alt="">
                </figure>
            </div>
        </div>
    </section>
    <section class="main-wrapper">
        <h1 class="topic text-center mr-bottom-40">¡Perfecto!Queremos llamarte</h1>
        <p class="text-center text mr-bottom-40">Recuerda que recibirás un código por mensaje de texto, ingresalo para confirmar tu registro.</p> 
        <form action="" id="formTel">
            <div class="row">
                <div class="col-12 item-type-number mr-bottom-40">     
                    <input class="" name="codigo" type="text" placeholder="Código SMS" required>
                </div>
            </div>
            <div class="text-center mr-bottom-20">
                <button class="btn-1">ENVIAR</button>
            </div>
        </form>
    </section>
     </div>
    <script type="text/javascript" src="/dist/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="/dist/js/bundle.js"></script>
    <script type="text/javascript">

        document.getElementById("tipo_propiedad").style.display = "block";
        //Los Formularios permanecen Ocultos        
        document.getElementById("presupuesto").style.display = "none";
        document.getElementById("comodo").style.display = "none";
        document.getElementById("gustaria").style.display = "none";
        document.getElementById("actividades").style.display = "none";
        document.getElementById("cercano").style.display = "none";
        document.getElementById("usuario").style.display = "none";
        document.getElementById("contacto").style.display = "none";
        document.getElementById("telefono").style.display = "none";

        var id=Math.floor(Math.random() * 10000);
        $("#Formtipo").on("submit", function(e){           
           e.preventDefault();
            var formData = new FormData($('#Formtipo')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarTipo/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                   e.preventDefault();
                   document.getElementById("tipo_propiedad").style.display = "none";
                   document.getElementById("presupuesto").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
         });
        $("#comodoform").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#comodoform')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarAmenidades/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                   document.getElementById("comodo").style.display = "none";
                   document.getElementById("gustaria").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
           
         });
        $("#gustariaForm").on("submit", function(e){
           e.preventDefault();
           document.getElementById("gustaria").style.display = "none";
           document.getElementById("actividades").style.display = "block";
         });



        $("#presupuestoForm").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#presupuestoForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarPresupuesto/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                    document.getElementById("presupuesto").style.display = "none";
                    document.getElementById("comodo").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
         });

        $("#formActividades").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#formActividades')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarLugar/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                   document.getElementById("actividades").style.display = "none";
                   document.getElementById("cercano").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
           
         });

        $("#cercanoForm").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#cercanoForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarCercano',
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                   document.getElementById("cercano").style.display = "none";
                   document.getElementById("usuario").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
           
         });


        $("#usuarioForm").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#usuarioForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarUsuario',
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();                   
                   document.getElementById("usuario").style.display = "none";
                   document.getElementById("contacto").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
           
         });

        $("#FormContacto").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#FormContacto')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarContacto',
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                    document.getElementById("contacto").style.display = "none";
                    document.getElementById("telefono").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
         });

        $("#formTel").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#formTel')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarTelefono',
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                    document.getElementById("contacto").style.display = "none";
                    document.getElementById("telefono").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("1234");               
                }
            });
         });

    </script>
</body>

</html>