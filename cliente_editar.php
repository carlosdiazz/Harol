<?php
    include 'php/pcabeza.php';
    $query = extraer_cliente(base64_decode($_GET['id']));
    $row = $query -> fetch_assoc();

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="propietario_mant.php">Listado de Clientes</a></li>
    <li class="active">Actualizar Clientes</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Actualizar Cliente</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/registro_clientes.php?accion=UDT" method ="POST">
        <div class="row">
            
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Codigo: </label>
                <input type="text" name="codigo" id="codigo" require="" readonly="" class="form-control"  " value="<?php echo $row['codcliente'] ?>">
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
            
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Nombre: </label>
                <input type="text" name="nombre" id="nombre" require="" class="form-control" placeholder="Nombre y Apellido " value="<?php echo $row['nombre'] ?>">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Direccion: </label>
                <input type="text" name="direccion" id="direccion" require="" class="form-control" placeholder="Direccion" value="<?php echo $row['direccion'] ?>">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Telefono: </label>
                <input type="tel" name="telefono" id="telefono" require="" class="form-control" placeholder="Telefono:  000-000-0000" value="<?php echo $row['telefeno'] ?>">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Fecha de Nacimiento: </label>
                <input type="date" name="fechaN" id="fechaN" require="" class="form-control" value="<?php echo $row['fecha_nacimiento'] ?>" >

                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Experiencia: </label>
                <textarea class="form-control"  name="experiencia" id="experiencia"> <?php echo $row['experiencia'] ?> </textarea>

                </div>
            </div>


            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="mante_cliente.php" class="btn btn-danger">Atras</a>
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