<?php
    //Conexion a la base de datos y conexion con el servidor
    $link = mysql_connect("localhost", "usuario", "contrseña") or die("<h2>No se encuentra el servidor</h2>"); ///en la conexion se escribe el nombre del servidor, el usuario y luego la contraseña en este caso para el phpmyAdmin
    $db = mysql_select_db("usuarios", $link) or die("<h2>Error e al conexion</h2>"); //seleccionar la base de datoas a utilizar y despues la variable de conexion $link

    //Obtencion de los datos ingresados por el usuario

    $division = $_POST['selectorDivisionn'];
    $matri = $_POST['matriculaa'];
    $fecha = $_POST['fechaDiaa'];
    $entrada = $_POST['horaEntrada'];
    $salida = $_POST['horaSalida'];
    $cubiculo = $_POST['selectorCubiculo'];

//Ingresar la informacion a la base de datos
mysql_query("INSERT INTO datos VALUES ('', '$division', '$fecha', '$entrada','$salida', '$cubiculo' )", $link) or die("<h2>Error de envio</h2>");

echo '
    <h2>Reservacion completa</h2>
    <h5>Gracias por reservar, ya puede ingresar</h5>
    <a href="login.html"> Logearse </a>
    ';
