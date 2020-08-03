<?php
    include 'php/pcabeza.php'

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="mante_cliente.php">Listado de Clientes</a></li>
    <li class="active">Nuevo Cliente</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nuevo Cliente</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/registro_clientes.php?accion=INS" method ="POST">
        <div class="row">
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Nombre: </label>
                <input type="text" name="nombre" minlength=3 id="nombre" required class="form-control" placeholder="Nombre y Apellido">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Direccion: </label>
                <input type="text" name="direccion" minlength=3 id="direccion" required class="form-control" placeholder="Direccion">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Telefono: </label>
                <input type="tel" name="telefono" minlength=3 id="telefono" required class="form-control" placeholder="Telefono:  000-000-0000">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Fecha de Nacimiento: </label>
                <input type="date" name="fechaN" id="fechaN" required class="form-control" >

                </div>
            </div>

            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Experiencia: </label>
                <textarea class="form-control" minlength=3 required name="experiencia" id="experiencia"> Descripcion Experiencia </textarea>

                </div>
            </div>


            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="mante_cliente.php" class="btn btn-danger">Atras</a>
                <input type="submit" value="Guardar" class="btn btn-success">

                </div>
            </div>
            
        </div>
        </form>

    </div>
</div>
<?php
    include 'php/ppie.php'

?>