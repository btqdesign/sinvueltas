<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <title></title>
    <link rel="stylesheet" href="/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/dist/css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <style type="text/css">
[class*=formui] {
  border: 0;
  font-size: 16px;
  border: 2px solid #cccccc;
  position: relative;
  border-radius: 3px;
  cursor: pointer;
}
.formui-checkbox {
  border: 0;
  padding: 0;
}
.formui-checkbox input {
  opacity: 0;
  position: absolute;
  left: 0;
}
label {
    display: inline-block;
    margin-bottom: 0px;
}
.formui-checkbox:before {
  content: '\2b';
  display: inline-block;
  text-align: center;
  padding-top: 10px;
  color: #fff;
  width: 40px;
  height: 40px;
  vertical-align: middle;
  background-color: #60C8F7;
}
.formui-checkbox:hover:before,
.formui-checkbox:focus:before {
  background: #008ff5;
  border-color: #999999;
}
.formui-checkbox.checked:before {
  background: #FF004B;
  border-color: #008ff5;
  content: "\d7";
  text-align: center;
  padding-top: 10px;
  color: #fff;
}
    </style>
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
                <div class="item-type" style="margin-bottom: 50px;">
                    <input class="radio casa" name="propiedad"  type="radio" value="casa" required>
                    <i class="icon-house"></i>
                    <span class="dot"></span>
                    <p class="type-propiedad">CASA</p>
                </div>
                <div class="item-type" style="margin-bottom: 50px;">
                    <input class="radio departamento" name="propiedad" type="radio" value="departamento" required>
                    <i class="icon-departamento"></i>
                    <span class="dot"></span>
                    <p class="type-propiedad">DEPARAMENTO</p>
                </div>
                <div class="item-type" style="margin-bottom: 50px;">
                    <input class="radio oficina" name="propiedad" type="radio" value="oficina" required>
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
                    <input class="" name="minimo" id="minimo" type="number" placeholder="MIN.$" required>
                </div>
                <div class="item-type-number xs-mr-40-lg-75">
                    <input class="" name="maximo" id="maximo" type="number" placeholder="MAX.$" required>
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
            <div id="tipoAmenidad"></div>
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
    <form method="post" id="gustariaForm">
        <div id="seleccion_colonias">
            
        </div>
    
    </form>
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
        <article class="map" id="map">
        </article>
        <div>
            <p class="text-center text-legal">
                *Puedes agregar hasta 3 direcciones distintas
            </p>
        </div>
        <div class="add input-group col-12 col-sm-8 offset-sm-2">
            <input type="search" class="form-control" placeholder="Ingresa una dirección" aria-label="Ingresa una dirección"
                aria-describedby="basic-addon2" id="pac-input">
            <div class="input-group-append">
                <button class="agergar-btn input-group-text" onclick="AgregaDireccion()" id="agregarDirec">+ agregar</button>
            </div>
        </div>
        <form class="tipo mr-bottom-40" id="formActividades">
            <div class="row">
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-1" id="direccion-1" type="text" placeholder="Dirección" style="margin-bottom: 50px;">
                </div>
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-2" id="direccion-2" type="text" placeholder="Dirección" style="margin-bottom: 50px;">
                </div>
                <div class="col-12 col-sm-4 item-type-number">
                    <input class="" name="direccion-3" id="direccion-3" type="text" placeholder="Dirección" style="margin-bottom: 50px;">
                </div>
            </div><br>
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>  

    </section>

     </div>
     <div id="cercano">
            <form method="post" id="cercanoForm">
                 <div id="lugares_cercanos">
                     
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
                        <i id="loginfacebook"  class="icon-facebook"></i>
                    </div>
                    <div class="circle" style="margin-left:10px">
                        <i id="loginGoogle"  class="fab fa-google"></i>
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
                    <input class="" id="email" name="email" type="email" placeholder="Dirección de correo electrónico" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                
                <div class="col-12">
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
                        <img src="" alt="" id="avatarID" style="border-radius: 100px;height:150px ">  
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 item-type-number flex-center mr-bottom-40">
                    <input class="" name="nombre2" id="nombre2" type="text" placeholder="Nombre" required>
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
                    <input class="" name="confirmacion" id="confirmacion" type="number" placeholder="Confirmar" required>
                    <label class="text-legal cr-red hidden" for=""></label>
                </div>
                <div class="col-12">
                    <p class="text-legal">
                        Tu número movil jamás será usado, compartido o vendido para usos diferentes a los de Plick.
                    </p>
                    <div class="check-item">
                        <input class="styled-checkbox" id="styled-checkbox" type="checkbox" value="value1">
                        <label for="styled-checkbox">He leído y acepto los</label> <a class="link-red" href="">Terminos y condiciones de uso</a>, y <a class="link-red" href="">políticas de privacidad</a>
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

   <script src="https://www.gstatic.com/firebasejs/5.6.0/firebase.js"></script>
        <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyBrCqmpkbqPhT38e-jIsdwA4eQLY4Al4A4",
            authDomain: "sin-vueltas.firebaseapp.com",
            databaseURL: "https://sin-vueltas.firebaseio.com",
            projectId: "sin-vueltas",
            storageBucket: "sin-vueltas.appspot.com",
            messagingSenderId: "120921926662"
        };
        firebase.initializeApp(config);
        var provider = new firebase.auth.FacebookAuthProvider();
        provider.addScope('email'); 
        provider.addScope('user_photos');   
        
        var authService = firebase.auth();
        document.getElementById('loginfacebook').addEventListener('click', function() {
            firebase.auth().signInWithPopup(provider).then(function(result) {
              if (result.user) {
                var user = result.additionalUserInfo.profile;          
                document.getElementById("email").value=user.email;
                document.getElementById("nombre").value=user.first_name;
                document.getElementById("apellido").value=user.last_name;
                 document.getElementById("avatarID").src = "http://graph.facebook.com/"+user.id+"/picture?type=large&redirect=true&width=150&height=150";
                 document.getElementById("nombre2").value=user.name;
                var formData = new FormData($('#usuarioForm')[0]);
                $.ajax({
                    url: 'https://sinvueltas.idevol.net/comprar/agregarUsuario/'+id,
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData:false,
                    dataType:"JSON",
                    success:function(data) {            
                       document.getElementById("usuario").style.display = "none";
                       document.getElementById("contacto").style.display = "block";
                    },
                    error: function(jqXHR, textStatus, errorThrown){
                        alert("Algo Salió Mal");               
                    }
                });

              }
              else{
                alert("Error");
              }
            });

        });
    </script>
    <script>
      document.getElementById('loginGoogle').addEventListener('click', function() {
              var provider = new firebase.auth.GoogleAuthProvider();
              firebase.auth().signInWithPopup(provider).then(function(result) {
                    var token = result.credential.accessToken;
                   var user = result.user;
                   var user = result.additionalUserInfo.profile;          

                    document.getElementById("email").value=user.email;

                    document.getElementById("nombre").value=user.given_name;

                    document.getElementById("apellido").value=user.family_name;

                    document.getElementById("avatarID").src = user.picture;

                    document.getElementById("nombre2").value=user.name;
                    var formData = new FormData($('#usuarioForm')[0]);
                    $.ajax({
                        url: 'https://sinvueltas.idevol.net/comprar/agregarUsuario/'+id,
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData:false,
                        dataType:"JSON",
                        success:function(data) {            
                           document.getElementById("usuario").style.display = "none";
                           document.getElementById("contacto").style.display = "block";
                        },
                        error: function(jqXHR, textStatus, errorThrown){
                            alert("Algo Salió Mal");               
                        }
                    });
             }).catch(function(error) {
                   var errorCode = error.code;
                   var errorMessage = error.message;
                   var email = error.email;
                   var credential = error.credential;
             });

        });
    </script>
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
                    alert("Algo Salió Mal");               
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
                   $.ajax({
                        url: 'https://sinvueltas.idevol.net/rentar/seleccion_colonia/'+id,
                        success: function(respuesta) {
                            $("#seleccion_colonias").html(respuesta);
                        },
                        error: function() {
                            console.log("No se ha podido obtener la información");
                        }
                    });
                   document.getElementById("gustaria").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
                }
            });
           
         });
        $("#gustariaForm").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#gustariaForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarColonia/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                   document.getElementById("gustaria").style.display = "none";
                    document.getElementById("actividades").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
                }
            });
           
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
                    $.ajax({
                        url: 'https://sinvueltas.idevol.net/rentar/tipoAmenidad/'+id,
                        success: function(respuesta) {
                            $("#tipoAmenidad").html(respuesta);
                        },
                        error: function() {
                            console.log("No se ha podido obtener la información");
                        }
                    });
                    document.getElementById("comodo").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
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
                   $.ajax({
                        url: 'https://sinvueltas.idevol.net/rentar/lugaresCercanos/'+id,
                        success: function(respuesta) {
                            $("#lugares_cercanos").html(respuesta);
                        },
                        error: function() {
                            console.log("No se ha podido obtener la información");
                        }
                    });
                   document.getElementById("cercano").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
                }
            });
           
         });

        $("#cercanoForm").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#cercanoForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarCercano/'+id,
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
                    alert("Algo Salió Mal");               
                }
            });
           
         });


        $("#usuarioForm").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#usuarioForm')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/agregarUsuario/'+id,
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
                    alert("Algo Salió Mal");               
                }
            });
           
         });

        $("#FormContacto").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#FormContacto')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/updateContacto/'+id,
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
                    alert("Algo Salió Mal");              
                }
            });
         });

        $("#formTel").on("submit", function(e){
           e.preventDefault();
            var formData = new FormData($('#formTel')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/rentar/validaCodigo/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                    window.location.href = "https://sinvueltas.idevol.net/Bienvenido";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
                }
            });
         });

    </script>
    <script type="text/javascript">
        $('body').on('change', '.formui-checkbox input[type="checkbox"]', function () {
            var $opt = $(this);
            $opt.parent('.option').toggleClass('checked');
        });
    </script>

    <script>
      

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 19.435233, lng: -99.141325},
          zoom: 13,
          mapTypeId: 'roadmap'
        });
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            var icon = {
              url: place.icon,
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }
          });
          map.fitBounds(bounds);
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf2bTKLZ2zOMi5LFzf2qvle68kcD6fbUk&libraries=places&callback=initAutocomplete"
         async defer></script>

    <script type="text/javascript">
        function AgregaDireccion()
        {
            var campo = $('#direccion-1').val();
            var campo2 = $('#direccion-2').val();
            var campo3 = $('#direccion-3').val();
            if(campo === ''){
                document.getElementById("direccion-1").value = document.getElementById("pac-input").value;
                document.getElementById("pac-input").value = "";
            }else{
                if(campo2 === ''){
                    document.getElementById("direccion-2").value = document.getElementById("pac-input").value;
                    document.getElementById("pac-input").value = "";
                }else{
                    if(campo3 === ''){
                        document.getElementById("direccion-3").value = document.getElementById("pac-input").value;
                        document.getElementById("pac-input").value = "";
                    }
                }

            }
        }
    </script>
    
</body>

</html>