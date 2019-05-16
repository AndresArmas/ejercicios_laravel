<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>


</head>
<body>

<div class="ui inverted menu">
    <a class="active item">
        Inicio
    </a>
    <a class="item">
        Instalacion
    </a>
    <a class="item">
        Creacion proyecto
    </a>
    <a class="item">
        Rutes
    </a>

    <a class="item">
        Consola
    </a>
</div>

<div class="ui grid">
    <div class=" sixteen wide column ">
        <h1 class="ui header centered">Hola aqui aprenderas a instalar laravel </h1>
    </div>

    <div class="ui stackable grid container-fluid ">
        <div class="seven wide column">
            <img class="ui image fluid full pa" src="img/laravel2.jpg">
        </div>
        <div class="eight wide column">
        <h2 class="ui header ">Laravel es uno de los frameworks de código abierto más fáciles de asimilar para PHP.
            Es simple, muy potente y tiene una interfaz elegante y divertida de usar </h2>
        </div>

    </div>

    <div class=" sixteen wide column ">
        <h1 class="ui header centered">Primer Paso </h1>
    </div>

    <div class="ui stackable grid container-fluid ">

        <div class="eight wide column">
            <h2 class="ui header ">Tienes que abrir la consola de comandos de windows (Win+r cmd + Enter), despues de esto escribimos el comando
                <strong>composer global require laravel/installer </strong> y esperamos que instalen las dependencias y paquetes.

            </h2>
        </div>

        <div class="eight wide column">
            <img class="ui image fluid " src="img/instalacion/paso1.png">
        </div>
    </div>


    <div class=" sixteen wide column ">
        <h1 class="ui header centered">Creacion de projecto </h1>
    </div>

    <div class="ui stackable grid container-fluid ">

        <div class="eight wide column">
            <img class="ui image fluid  " src="img/instalacion/paso2.png">
        </div>

        <div class="eight wide column">
            <h2 class="ui header ">Ahora es necesario crear la carpeta laravel  donde vas a guardar los proyectos, te vas a: Documentos y creas la carpeta laravel
            </h2>
        </div>


    </div>
    <div class=" sixteen wide column ">
        <h1 class="ui header centered">paso 2 </h1>
    </div>

    <div class="ui stackable grid container-fluid ">

        <div class="eight wide column">
            <h2 class="ui header ">Ahora abrimos la consola CMD y nos dirigimos a la carpeta que acabamos de crear ejemplo: cd User/Aprendiz*
            Documents/laravel (puedes listar los elementos con el comando :dir)
            </h2>
        </div>


        <div class="eight wide column">
            <img class="ui image fluid  " src="img/instalacion/paso3.png">
        </div>
    </div>
    <div class=" sixteen wide column ">
        <h1 class="ui header centered">paso 3 </h1>
    </div>

    <div class="ui stackable grid container-fluid ">

        <div class="eight wide column">
            <img class="ui image fluid  " src="img/instalacion/paso4.png">
        </div>
        <div class="eight wide column">
            <h2 class="ui header ">Ingresamos a nuestra carpeta  (cd laravel) y ejecutamos el comando: composer create-project laravel/laravel nombre-mi-proyecto, despues de eso
                se instalaran las  dependencias necesarias  para el proyecto
            </h2>
        </div>
    </div>

    <div class=" sixteen wide column ">
        <h1 class="ui header centered">paso 4 </h1>
    </div>

    <div class="ui stackable grid container-fluid ">


        <div class="eight wide column">
            <h2 class="ui header ">Ingresamos a nuestra carpeta a travez del gestor de archivos de windows veras que aparecera tu carpeta con todo lo necesario para tu proyecto
            </h2>
        </div>

        <div class="eight wide column">
            <img class="ui image fluid  " src="img/instalacion/paso5.png">
        </div>
    </div>

    <div class=" sixteen wide column ">
        <h1 class="ui header centered">paso 5 </h1>
    </div>

    <div class="ui stackable grid container-fluid ">


        <div class="eight wide column">
            <img class="ui image fluid  " src="img/instalacion/paso6.png">
        </div>

        <div class="eight wide column">
            <h2 class="ui header ">Ahora iniciamos  nuestro servidor con el comando: php artisan serve y  copiamos la direccion ip que no a parecera y la pegamos en nuestro navegador
            </h2>
        </div>


    </div>

    <div class=" sixteen wide column ">
        <h1 class="ui header centered">paso final </h1>
    </div>

    <div class="ui stackable grid container-fluid ">



            <h2 class="ui header ">Ahora iniciamos  nuestro servidor con el comando: php artisan serve y  copiamos la direccion ip que no a parecera y la pegamos en nuestro navegador
            </h2>
            <br>
            <img class="ui image fluid  " src="img/instalacion/paso7.png">
        </div>


    </div>



</div>


</body>
</html>
