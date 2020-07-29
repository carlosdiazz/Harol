<?php
    include('php/pcabeza.php');
?>
<!-- Opciones de Navegación -->
<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li class="active">Mantenimientos Clientes</li>
</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Mantenimientos Clientes</h1>
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
                    <th>Experiencia</th>
                    <th>Estado</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = lista_cliente();
                    while ($row = $query->fetch_assoc()) {
                        echo"
                            <tr>
                                <td>".$row['codcliente']."</td>
                                <td>".$row['nombre']."</td>
                                <td>".$row['direccion']."</td>
                                <td>".$row['telefeno']."</td>
                                <td>".$row['experiencia']."</td>
                                <td>".$row['estado']."</td>

                                <td> <a data-toggle='tooltip' title='Editar' href='#' class='btn btn-primary'> <img src='img/editar.png' width=34px /> </a> </td>
                                <td> <a data-toggle='tooltip' title='Anular' href='php/registro_clientes.php?accion=DLT&id=".$row['codcliente']."' class='btn btn-danger'> <img src='img/basura.png' width=34px /> </a></td>
                        ";
                    }
                ?>


            </tbody>

        </table>

    </div>
    <div class="panel-footer">
        <p>Clase de Diseño de Sistemas | @mangusoftrd</p>
    </div>
</div> <!-- Fin del Panel -->

<?php
    include('php/ppie.php');
?>