<?php
    include('php/pcabeza.php');

    $mensaje='';
    $color='';

    if (isset($_GET['s'])) {
      
      switch ($_GET['s']) {

        case 'successins':
            $mensaje = 'Registro almacendado correctamete';
            $color = 'success';
            break;
  
        case 'errorins':
            $mensaje = 'Imposible almacenar el registro';
            $color = 'danger';
            break;

        case 'successudt':
            $mensaje = 'Registro actualizado correctamete';
            $color = 'success';
            break;
          
        case 'errorudt':
            $mensaje = 'Imposible actualizar el registro';
            $color = 'danger';
            
      }
    }

    if(!empty($mensaje)and !empty($color)){
      echo '<div class="alert alert-'.$color.'" role="alert">'.$mensaje.'
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      
      </div> ';
    
     
  }

?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li class="active">Tripulacion</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Tripulacion</h1>
    </div>
    <div class="panel-body">
        <p>
            <a href="tripulacion_crear.php" class="btn btn-success pull-left"> Nuevo </a>
        </p>
        <br>
        <hr>
        <table class="table table-striped text-center" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Numeros de Horas</th>
                    <th>Valor de Hora</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = tripulacion();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['codtribulacion']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['direccion']."</td>
                                <td>".$row['telefeno']."</td>
                                <td>".$row['num_horas']."</td>
                                <td>".$row['valor_hora']."</td>

                                <td> <a data-toggle='tooltip' title='Editar' href='tripulacion_editar.php?id=".base64_encode($row['codtribulacion'])."' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                               
                        ";
                    }
                ?>


            </tbody>

        </table>

    </div>

</div> <!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>