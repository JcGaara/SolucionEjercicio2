<!DOCTYPE html>
<html lang="en">
    <?php
        $emp = new Empleado($infoEmpleado);
    ?>
      <head>
        <meta charset="utf-8"/>
        <title>Información Empleado</title>
          <link href="../../css/bootstrap.css" rel="stylesheet">
          <link href="../../css/bootstrap-theme.css" rel="stylesheet">
          <link href="../../css/custom.css" rel="stylesheet">
    </head>


    <body>
    <?php
    include 'menu.php';
    ?>
    <div class="row">

        <div  class="col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10  col-lg-offset-1">
            <h1><span class="first">Información</span><span class="second"> Empleado</span></h1>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label class="control-label" for="nombre">Nombre</label>

                            <input class="form-control" type="text" id="nombre" value="<?php echo $emp->name ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="edad">Edad</label>
                            <input class="form-control" type="text" id="edad" value="<?php echo $emp->age ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="genero">Genero</label>
                            <input class="form-control" type="text" id="genero" value="<?php echo $emp->gender ?>" readonly>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="direccion">Dirección</label>
                            <input class="form-control" type="text" id="direccion" value="<?php echo $emp->address ?>" readonly>
                        </div>

                    </div>
                    <div class="col-sm-5">

                        <div class="form-group">
                            <label class="control-label" for="correo">Correo</label>
                            <input class="form-control" type="text" id="correo" value="<?php echo $emp->email ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="celular">Celular</label>
                            <input class="form-control" type="text" id="celular" value="<?php echo $emp->phone ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="puesto">Puesto</label>
                            <input class="form-control" type="text" id="puesto" value="<?php echo $emp->position ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="salario">Salario</label>
                            <input class="form-control" type="text" id="salario" value="<?php echo $emp->salary ?>" readonly>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Habilidades</strong></h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-condensed">
                                        <thead>
                                        <tr>

                                            <td><strong>Lenguaje</strong></td>

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <?php
                                        foreach ($emp->skills as $skills) {
                                            ?>
                                            <tr>
                                                <td><?php echo $skills['skill'] ?></td>

                                            </tr>

                                            <?php
                                        }
                                        ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </body>
</html>
