<?php
    
    //echo phpinfo(); exit;
    //Conexion a la base de datos y conexion con el servidor
    $link = new mysqli("localhost", "root", "", "basebiblioteca"); ///en la conexion se escribe el nombre del servidor, el usuario y luego la contraseña en este caso para el phpmyAdmin
    ///$db = mysql_select_db('registrosbiblioteca', $link); seleccionar la base de datoas a utilizar y despues la variable de conexion $link
if($link->connect_errno) {
    echo 'error: '. $link->connect_errno;exit;
}
    //Obtencion de los datos ingresados por el usuario

    $division = $_POST['selectorDivisionn'];
    $matri = $_POST['matriculaa'];
    $fecha = $_POST['fechaDiaa'];
    $entrada = $_POST['horaEntrada'];
    $salida = $_POST['horaSalida'];
    $cubiculo = $_POST['selectorCubiculo'];
    //Ingresar la informacion a la base de datos

    $elSQL = "INSERT INTO reserva VALUES('$division', '$matri', '$fecha', '$entrada', '$salida', '$cubiculo')";
    //echo $elSQL;exit;
    $resultado = $link->query($elSQL);
    if($resultado === true) {
        header('Location: secompleto.html');
        exit;
    } else {
        header('Location: nosecompleto.html');
        exit;
    }
    //var_dump($resultado);exit; // `para ver que habia pasado
?>