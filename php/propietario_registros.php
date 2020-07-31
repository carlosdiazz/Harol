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
    
    INSERT INTO `propietario`
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
    header("Location: ../propietario_mant.php?s=".$msj);
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

    header("Location: ../propietario_mant.php?s=".$msj);
}

?>