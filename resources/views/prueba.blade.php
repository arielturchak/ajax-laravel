<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Llamada AJAX con botón</title>
    <!-- Asegúrate de incluir jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        /* Estilos para el cuerpo de la página */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
            background-color: #301631;
        }

        /* Estilos para el encabezado */
        h1 {
            text-align: center;
            color: #333;
        }

        /* Estilos para el botón */
        #miBoton {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #miBoton:hover {
            background-color: #0056b3;
        }

        /* Estilos para el contenedor del resultado */
        #resultado {
            margin: 20px auto;
            padding: 10px;
            background-color:  #004D98;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        img{
            width: 40%;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        h1{
            text-align: center;
            color:#EDBB00;
        }
        .nombre {
            color: black; /* Cambia el color del texto a negro */
        }

        /* Estilos para la palabra "Posición" */
        .posicion {
            color: black; /* Cambia el color del texto a negro */
        }
    </style>
    
</head>
<body>
<h1>'Més Que Un Club'<h1>
<img src="{{ asset('imagenes/barcelona.png') }}" alt="Descripción de la imagen">
<br>
<button id="miBoton">Mostrar Equipo</button>
<br>
<div id="resultado">
        <p><span class="nombre"></span></p>
        <p><span class="posicion"></span></p>
    </div>
<script>
     $(document).ready(function() {
            $("#miBoton").on("click", function() {
                $.ajax({
                    url: '/getJugadores', // Reemplazar con la URL de la ruta que llama al controlador
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        if (response && response.datos) {
                            var datos = response.datos;
                            $("#resultado").empty();
                            datos.forEach(function(jugadores) {
                                $("#resultado").append('<p>Nombre: ' + jugadores.nombre + ', Posición: ' + jugadores.posicion + '</p>');
                            });
                        } else {
                            console.error('La estructura de los datos es incorrecta');
                        }
                    },
                    error: function(error) {
                        console.error('Error en la llamada de Ajax: ', error.responseText);
                    }
                });
            });
        });
// $(document).ready(function(){
//     $("#miBoton").on("click", function(){
//         // Realizar la llamada AJAX al hacer clic en el botón
//         $.ajax({
//             url: 'http://127.0.0.1:8000/dameAnimales', // Reemplaza con la URL a la que deseas realizar la petición
//             type: 'GET', // O "POST", dependiendo del método que se requiera
//              // Cambia el tipo de datos según lo que esperas recibir (json, html, etc.)
//             success: function(response){
//                 // Manejar la respuesta exitosa aquí
//                 $("#resultado").html('Respuesta del servidor: '  + response.datos); // Mostrar la respuesta en un elemento HTML con id "resultado"
//             },
//             error: function(error){
//                 // Manejar cualquier error que ocurra durante la petición
//                 console.error('Error en la llamada de Ajax: ' +  error); // Imprimir el error en la consola del navegador
//             }
//         });
//     });
// });
</script>

</body>
</html>
