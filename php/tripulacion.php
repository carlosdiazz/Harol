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
    $num_horas     =$_POST['num_horas'];
    $valor_hora =$_POST['valor_hora'];

    $sql="
    
    INSERT INTO `tripulacion`
    (
         
        `nombre`, 
        `direccion`,
        `telefeno`,
        `num_horas`,
        `valor_hora` 

        
        ) VALUES (
            
            '$nombre',
            '$direccion',
            '$telefono',
            '$num_horas',
            '$valor_hora'

            )
    
    "; 

    if ($mysqli->query($sql)) {
        
        $msj ='successins';
    } else {
        $msj ='errorins';
    }

    if($nombre == ""){
        $msj ='errorins';
    }

    //echo ("Descripcion del error: " .mysqli_error($mysqli));
    header("Location: ../tripulacion.php?s=".$msj);
}

if ($i == 'UDT') {
    $msj = '';
    $nombre         = $_POST['nombre'];
    $telefono         = $_POST['telefono'];
    $num_horas         = $_POST['num_horas'];
    $valor_hora        = $_POST['valor_hora'];
    $codigo         = $_POST['codigo'];
    $direccion       = $_POST['direccion'];

    $sql="
        UPDATE `tripulacion` 
        SET         
 
        `nombre`='$nombre',
        `direccion`='$direccion',
        `telefeno`='$telefono',
        `num_horas`='$num_horas',
        `valor_hora`='$valor_hora' 
        WHERE 
            `codtribulacion` = '$codigo'    
    ";
    if ($mysqli->query($sql)) {
        $msj ='successudt';
    } else {
        $msj ='errorudt';
    }
    //echo("Descripcion de Error: " .mysqli_error($mysqli));
    header("Location: ../tripulacion.php?s=".$msj);
}



?>