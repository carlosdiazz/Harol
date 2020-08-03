<?php
    include 'php/pcabeza.php';
    $query = extraer_tipo_equipo(base64_decode($_GET['id']));
    $row = $query -> fetch_assoc();

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="tipo_mantenimiento.php">Listado de tipos de Mantenimiento</a></li>
    <li class="active">Actualizar Mantenimientos</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Actualizar Equipos</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/tipo_equipo.php?accion=UDT" method ="POST">
        <div class="row">
            
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Codigo: </label>
                <input type="text" name="codigo" id="codigo" require="" readonly="" class="form-control"  " value="<?php echo $row['codtipo_equipo'] ?>">
                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Estado: </label>
                <select class="form-control " name="estado" id="estado">
                    <option value="A" <?php if($row['estado'] == "A"){echo "selected";} ?>  >Activo</option>
                    <option value="I" <?php if($row['estado'] == "I"){echo "selected";} ?>  >Inactivo</option>
                </select>

                </div>
            </div>
            
            

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Descripcion: </label>
                <textarea class="form-control"  name="descripcion" id="descripcion"> <?php echo $row['descripcion'] ?> </textarea>

                </div>
            </div>


            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="tipo_equipo.php" class="btn btn-danger">Atras</a>
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