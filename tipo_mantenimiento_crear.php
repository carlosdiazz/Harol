<?php
    include 'php/pcabeza.php'

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="tipo_mantenimiento.php">Listado de Tipos de Mantenimiento</a></li>
    <li class="active">Nuevo Propietario</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nuevo tipo de mantenimiento</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/tipo_manten.php?accion=INS" method ="POST">
        <div class="row">
                    
           
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Descripcion: </label>
                <textarea class="form-control"  minlength=3 required name="descripcion" id="descripcion"> Descripcion del Mantenimiento </textarea>

                </div>
            </div>


            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="tipo_mantenimiento.php" class="btn btn-danger">Atras</a>
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