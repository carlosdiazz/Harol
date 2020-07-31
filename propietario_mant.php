<?php
    include('php/pcabeza.php');

    $mensaje='';
    $color='';

    if (isset($_GET['s'])) {
      
      switch ($_GET['s']) {

        case 'successdins':
            $mensaje = 'Registro almacendado correctamete';
            $color = 'success';
            break;
  
        case 'errorins':
            $mensaje = 'Imposible almacenar el registro';
            $color = 'danger';
            break;
        
        
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
    <li class="active">Listado de Propietarios</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Listado de Propietarios</h1>
    </div>
    <div class="panel-body">
        <p>
            <a href="propietario_crear.php" class="btn btn-success pull-left"> Nuevo </a>
        </p>
        <br>
        <hr>
        <table class="table table-striped" style="text-align: center;">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_propietario();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['codpropietario']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['direccion']."</td>
                                <td>".$row['estado']."</td>
                                <td> <a data-toggle='tooltip' title='Editar' href='#' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/propietario_registros.php?accion=DLT&id=".$row['codpropietario']."' class='btn btn-danger'> <img src='img/basura.png' width=34px /> </a></td>
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