<?php
    include('php/pcabeza.php');

    $mensaje='';
    $color='';

    if (isset($_GET['s'])) {
      
      switch ($_GET['s']) {

        case 'successdlt':
          $mensaje = 'Registro Inaahabilitrado';
          $color = 'success';
          break;

          case 'errordlt':
            $mensaje = 'Imposible hay un error';
            $color = 'danger';
            break;
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
            <a href="#" class="btn btn-success pull-left"> Nuevo </a>
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
                                <td>".$row['codtripulacion']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['direccion']."</td>
                                <td>".$row['telefeno']."</td>
                                <td>".$row['num_horas']."</td>
                                <td>".$row['valor_horas']."</td>

                                <td> <a data-toggle='tooltip' title='Editar' href='#' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/registro_clientes.php?accion=DLT&id=".$row['codtripulacion']."' class='btn btn-danger'> <img src='img/basura.png' width=34px /> </a></td>
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