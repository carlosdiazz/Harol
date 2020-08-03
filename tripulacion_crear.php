<?php
    include 'php/pcabeza.php'

?>


<ol class="breadcrumb">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="tripulacion.php">Listado de Tripulacion</a></li>
    <li class="active">Nueva Tripulacion</li>

</ol>

<!-- Inicio de Panel de Detalles -->
<div class="panel panel-default" style="margin-top: 10 px">
    <div class="panel-heading">
        <h1>Nueva Tripulacion</h1>
    </div>
    
    
    <div class="panel-body">
        
        
        <form action="php/tripulacion.php?accion=INS" method ="POST">
        <div class="row">
            
            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Nombre: </label>
                <input type="text" name="nombre" id="nombre" require="" class="form-control" placeholder="Nombre y Apellido">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Direccion: </label>
                <input type="text" name="direccion" id="direccion" require="" class="form-control" placeholder="Direccion">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Telefono: </label>
                <input type="tel" name="telefono" id="telefono" require="" class="form-control" placeholder="Telefono:  000-000-0000">

                </div>
            </div>

            <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                <label class="control-label"> Numeros de Hora: </label>
                <select class="form-control " name="num_horas" require="" id="num_horas" type="text">
                    <option value="2"   >2</option>
                    <option value="4"   >4</option>
                    <option value="6"   >6</option>
                    <option value="8"   >8</option>
                    <option value="10"   >10</option>
                    <option value="12"   >12</option>
                    <option value="14"   >14</option>
                    <option value="16"   >16</option>
                </select>

                </div>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-offset-2>
                
                <div class="form-group">
                <label class="control-label"> Valor de la Hora: </label>
                <select class="form-control " require="" name="valor_hora" id="valor_hora" type="text">
                    <option value="10"   >10</option>
                    <option value="15"   >15</option>
                    <option value="20"   >20</option>
                    <option value="25"   >25</option>

                </select>

                </div>
            </div>



            <br>
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
                
                <div class="form-group">
                
                <a href="tripulacion.php" class="btn btn-danger">Atras</a>
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