<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    *{
    padding: 0px;
    margin: 0px;
    font-family:sans-serif;
    }
header
    {
       width: 100%;
        background-color: #333;
    }
header nav{
    text-align: center;
}
header nav ul li{
    display: inline-block;
    padding: 12px;
}
header nav ul li a{color: #f9f9f9;
}

</style>
</head>
<body>

<header>
    <nav>
        <ul>
            <li> <a href="{{ route('route.home') }}">Inicio </a> </li>
            <li> <a href="{{ route('route.quienessomos') }}">Quienes somos </a> </li>
            <li> <a href="{{ route('route.acercade') }} ">Acercade</a> </li>
            <li> <a href="{{ route('route.contactenos') }} ">Contactenos</a> </li>
        </ul>
    </nav>
</header>

</body>
</html>
