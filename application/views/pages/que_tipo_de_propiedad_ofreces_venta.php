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
        <h1 class="topic text-center xs-mr-40-lg-75">¿Qué tipo de propiedad?</h1>
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
     <div id="direccion">
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
        <h1 class="topic text-center mr-bottom-20">¿En dónde está ubicada tu propiedad?</h1>
    </section>
    <section class="main-wrapper">
        <article class="map" id="map">
        </article>
        <div>
            <p class="text-center text-legal">
                *Puedes agregar una dirección en el campo de búsqueda
            </p>
        </div>
        
        <form class="tipo mr-bottom-40" id="formDireccion">

            <div class="add input-group col-12 col-sm-8 offset-sm-2">
                <input type="search" class="form-control" placeholder="Ingresa una dirección" aria-label="Ingresa una dirección"
                    aria-describedby="basic-addon2" id="pac-input"  name="direccion-1">
                <div class="input-group-append">
                    <button class="agergar-btn input-group-text" disabled>+ agregar</button>
                </div>
            </div>

            <br>
            <div class="text-center mr-bottom-20">
                <button class="btn-1">SIGUIENTE</button>
            </div>
        </form>  

    </section>

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
        <p class="text-center text">Nos gustaria ayudarte con la gestón de RENTA o VENTA de tu propiedad.</p>
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
        <p class="text-center text">Nos gustaria ayudarte con la gestón de RENTA o VENTA de tu propiedad. <br> Ayúdanos con tus datos de contacto.</p>
        <form action="" id="FormContacto">
            <div class="row mr-bottom-40">
                <div class="col-12 col-sm-6 flex-center">
                    <div class="avatar-space mr-bottom-40">
                        <img src="" alt="" id="avatarID"style="border-radius: 100px;height:150px "> 
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

    <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase.js"></script>
    <script>
        // Initialize Firebase
        var config = {
            apiKey: "AIzaSyCLx6-K5j_jByYqV55mGjh-JBs2T9r1J18",
            authDomain: "plick-front-end.firebaseapp.com",
            databaseURL: "https://plick-front-end.firebaseio.com",
            projectId: "plick-front-end",
            storageBucket: "plick-front-end.appspot.com",
            messagingSenderId: "518089985158"
        };
       firebase.initializeApp(config);
        var provider = new firebase.auth.FacebookAuthProvider();
        provider.addScope('email');   
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
                    url: 'https://sinvueltas.idevol.net/vender_propietario/agregarUsuario/'+id,
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
        document.getElementById("direccion").style.display = "none";
        document.getElementById("usuario").style.display = "none";
        document.getElementById("contacto").style.display = "none";
        document.getElementById("telefono").style.display = "none";

        var id=Math.floor(Math.random() * 10000);
        $("#Formtipo").on("submit", function(e){           
           e.preventDefault();
            var formData = new FormData($('#Formtipo')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/vender_propietario/agregarTipo/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                   e.preventDefault();
                   document.getElementById("tipo_propiedad").style.display = "none";
                   document.getElementById("direccion").style.display = "block";
                },
                error: function(jqXHR, textStatus, errorThrown){
                    e.preventDefault();
                    alert("Algo Salió Mal");               
                }
            });
         });

        $("#formDireccion").on("submit", function(e){
            e.preventDefault();
            var formData = new FormData($('#formDireccion')[0]);
            $.ajax({
                url: 'https://sinvueltas.idevol.net/vender_propietario/agregarLugar/'+id,
                type: 'POST',
                data: formData,
                contentType: false,
                processData:false,
                dataType:"JSON",
                success:function(data) {
                    e.preventDefault();
                   document.getElementById("direccion").style.display = "none";
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
                url: 'https://sinvueltas.idevol.net/vender_propietario/agregarUsuario/'+id,
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
                url: 'https://sinvueltas.idevol.net/vender_propietario/updateContacto/'+id,
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
                url: 'https://sinvueltas.idevol.net/vender_propietario/validaCodigo/'+id,
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

    <script>
      

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -33.8688, lng: 151.2195},
          zoom: 13,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
        });

        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
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

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
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
    
</body>

</html>