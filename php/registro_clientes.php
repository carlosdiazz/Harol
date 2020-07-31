<?php
include('conexion.php');

// INS | UDT | DLT

$i = '';
if (isset($_GET['accion'])) {
    $i = $_GET['accion'];
}

if (isset($_GET['id'])) {
    $codigo = $_GET['id'];
}

if ($i == 'INS'){
    $msj        ="";
    $nombre     =$_POST['nombre'];
    $direccion  =$_POST['direccion'];
    $telefono   =$_POST['telefono'];
    $fechaN     =$_POST['fechaN'];
    $experiencia =$_POST['experiencia'];

    $sql="
    
    INSERT INTO `clientes`
    (
         
        `nombre`, 
        `direccion`,
        `telefeno`,
        `fecha_nacimiento`,
        `experiencia`, 
        `estado`
        
        ) VALUES (
            
            '$nombre',
            '$direccion',
            '$telefono',
            '$fechaN',
            '$experiencia',
            'A'
            )
    
    "; 

    if ($mysqli->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    //echo ("Descripcion del error: " .mysqli_error($mysqli));
    header("Location: ../mante_cliente.php?s=".$msj);
}

if ($i == 'UDT') {
    $msj = '';
    $nombre         = $_POST['nombre'];
    $direccion      = $_POST['direccion'];
    $telefono       = $_POST['telefono'];
    $fechaN         = $_POST['fechaN'];
    $experiencia    = $_POST['experiencia'];
    $estado         = $_POST['estado'];
    $codigo         = $_POST['codigo'];

    $sql="
        UPDATE `clientes` 
        SET         
        `nombre`='$nombre',
        `direccion`='$direccion',
        `telefeno`='$telefono',
        `fecha_nacimiento`='$fechaN',
        `experiencia`='$experiencia',
        `estado`='$estado' 
        WHERE 
            `codcliente` = '$codigo'    
    ";
    if ($mysqli->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }
    // echo("Descripcion de Error: " .mysqli_error($mysqli));
    header("Location: ../mante_cliente.php?s=".$msj);
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `propietario` SET
    `estado` = 'I'
    WHERE `codpropietario` = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }
    // echo("Descripcion de Error: " .mysqli_error($mysqli));
    header("Location: ../propietario_mant.php?s=".$msj);
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `clientes` SET
    `estado` = 'I'
    WHERE `codcliente` = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../mante_cliente.php?s=".$msj);
}

?>