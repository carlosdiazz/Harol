<?php
    include 'php/pcabeza.php';
    $query = extraer_tripulacion(base64_decode($_GET['id']));
    $row = $query -> fetch_assoc();

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="propietario_mant.php">Listado Tripulacion</a></li>
    <li class="active">Actualizar Tripulacion</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Actualizar Tripulacion</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/tripulacion.php?accion=UDT" method ="POST">
        <div class="row">
            
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Codigo: </label>
                <input type="text" name="codigo" id="codigo" require="" readonly="" class="form-control"  " value="<?php echo $row['codtribulacion'] ?>">
                </div>
            </div>




            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
            <div class="form-group">
                <label class="control-label"> Nombre: </label>
                <input type="text" name="nombre" id="nombre" require="" class="form-control" placeholder="Nombre " value="<?php echo $row['nombre'] ?>">

                </div>
            </div>
            
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Telefono: </label>
                <input type="text" name="telefono" id="telefono" require="" class="form-control" placeholder="809-555-5555 " value="<?php echo $row['telefeno'] ?>">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                


                <div class="form-group">
                <label class="control-label"> Numero de Horas: </label>
                <select class="form-control " name="num_horas" id="estado">

                    <option value="2"  <?php if($row['num_horas'] == "2"){echo "selected";} ?>   >2</option>
                    <option value="4"  <?php if($row['num_horas'] == "4"){echo "selected";} ?>   >4</option>
                    <option value="6"  <?php if($row['num_horas'] == "6"){echo "selected";} ?>   >6</option>
                    <option value="8"  <?php if($row['num_horas'] == "8"){echo "selected";} ?>   >8</option>
                    <option value="10" <?php if($row['num_horas'] == "10"){echo "selected";} ?>    >10</option>
                    <option value="12" <?php if($row['num_horas'] == "12"){echo "selected";} ?>   >12</option>
                    <option value="14" <?php if($row['num_horas'] == "14"){echo "selected";} ?>   >14</option>
                    <option value="16" <?php if($row['num_horas'] == "16"){echo "selected";} ?>   >16</option>
                </select>

                </div>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Valor de la Hora: </label>
                
                 
                 <select class="form-control " name="valor_hora" id="valor_hora">

                    <option value="10"  <?php if($row['valor_hora'] == "10"){echo "selected";} ?>   >10</option>
                    <option value="15"  <?php if($row['valor_hora'] == "15"){echo "selected";} ?>   >15</option>
                    <option value="20"  <?php if($row['valor_hora'] == "20"){echo "selected";} ?>   >20</option>
                    <option value="25"  <?php if($row['valor_hora'] == "25"){echo "selected";} ?>   >25</option>
                   
                </select>
                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                    <label class="control-label"> Direccion: </label>
                    <input type="text" name="direccion" id="direccion" require="" class="form-control" value="<?php echo $row['direccion'] ?>">
    
                    </div>
                </div>


            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="tripulacion.php" class="btn btn-danger">Atras</a>
                <input type="submit" value="Actualizar" class="btn btn-success">

                </div>
            </div>
            
        </div>
        </form>

    </div>
</div>
<?php
    include 'php/ppie.php'

?>