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
    $descripcion =$_POST['descripcion'];

    $sql="
    
    INSERT INTO `tipo_mantenimiento`
    (
         
        `descripcion`,
        `estado`
        
        ) VALUES (
            
            '$descripcion',
            'A'
            )
    
    "; 

    if ($mysqli->query($sql)) {
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    //echo ("Descripcion del error: " .mysqli_error($mysqli));
    header("Location: ../tipo_mantenimiento.php?s=".$msj);
}

if ($i == 'UDT') {
    $msj = '';
    $descripcion         = $_POST['descripcion'];
    $estado         = $_POST['estado'];
    $codigo         = $_POST['codigo'];

    $sql="
        UPDATE `tipo_mantenimiento` 
        SET         
 
        `descripcion`='$descripcion',
        `estado`='$estado' 
        WHERE 
            `codtipo_mant` = '$codigo'    
    ";
    if ($mysqli->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }
    //echo("Descripcion de Error: " .mysqli_error($mysqli));
    header("Location: ../tipo_mantenimiento.php?s=".$msj);
}

if ($i == 'DLT') {    
    $sql="
    UPDATE `tipo_mantenimiento` SET
    `estado` = 'I'
    WHERE `codtipo_mant` = '$codigo'
    ";

    if ($mysqli->query($sql)) {
        $msj ='successdlt';
    } else {
        $msj ='errordlt';
    }

    header("Location: ../tipo_mantenimiento.php?s=".$msj);
}




?>