<?php

/* lista_empleados.php */
class __TwigTemplate_1184927c12e9aa8f5e5079624f8f206395548ba6a6133cd4def6fdddb88b6444 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <?php

    \$lista= array();

    foreach (\$listaEmpleados as \$valor) {
        \$emp = new Empleado(\$valor);
        array_push(\$lista,\$emp);
    }
    ?>
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Lista de empleados</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <style>
            <!--
            .glyphicon {
                cursor: pointer;
            }
            
            input, select{
                width: 100%;
            }
            
            .second, .glyphicon-chevron-down, .glyphicon-chevron-up{
                color: #ff0000;
            }

            -->
        </style>
    </head>
    <body>
    <?= 'saul' ?>
        <div class=\"col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10  col-lg-offset-1\">
        
            <h1><span class=\"first\">Lista</span><span class=\"second\">empleados</span></h1>
            
            <div class=\"table-responsive\">
            
                <!-- Initialization 
                * js-dynamitable => dynamitable trigger (table)
                -->
                <table id=\"lista_empleados\" class=\"js-dynamitable     table table-bordered\">
                    
                    <!-- table heading -->
                    <thead>
                    
                        <!-- Sortering
                        * js-sorter-asc => ascending sorter trigger
                        * js-sorter-desc => desending sorter trigger
                        -->
                        <tr>
                            <th>Name
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>
                            <th>Email
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>
                            <th>Position
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>                            
                            <th>Salary
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                            </th>
                            <th>Detalle


                            </th>
                        </tr>
                        
                        <!-- Filtering
                        * js-filter => filter trigger (input, select)
                        -->
                        <tr>
                            <th>
                                <!-- input filter -->
                                <input  class=\"js-filter  form-control\" type=\"text\" value=\"\">
                            </th>
                            <th>
                                <!-- input filter -->
                                <input  class=\"js-filter  form-control\" type=\"text\" value=\"\">
                            </th>
                            <th><input class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                            <th><input class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                            <th><input disabled class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                        </tr>
                    </thead>

                    <!-- table body -->

                    <tbody>
                     <?php
                     \$idx=-1;
                  foreach (\$lista as \$emp) {
                      \$idx=\$idx+1;
                      ?>
                        <tr>
                            <td><?php echo \$emp->name ?></td>
                            <td><?php echo \$emp->name ?></td>
                            <td><?php echo \$emp->email ?></td>
                            <td class=\"text-right\"><?php echo \$emp->position ?></td>
                            <td class=\"text-right\"><?php echo \$emp->salary ?></td>
                            <td >
                             <a href=\"info_empleado/<?php echo \$idx ?>\">
                                <img style=\"width: 20px;height: 20px;text-align: center;margin-left: 50%;\" src=\"../../img/lupa.png\"
                            </a>
                            </td>
                        </tr>

                         <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
        
        <!-- jquery -->
        <script src=\"js/jquery-3.2.1.min.js\"></script>
        <!-- dynamitable -->
        <script src=\"js/dynamitable.jquery.min.js\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "lista_empleados.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <?php

    \$lista= array();

    foreach (\$listaEmpleados as \$valor) {
        \$emp = new Empleado(\$valor);
        array_push(\$lista,\$emp);
    }
    ?>
    <head>

        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>Lista de empleados</title>
        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <style>
            <!--
            .glyphicon {
                cursor: pointer;
            }
            
            input, select{
                width: 100%;
            }
            
            .second, .glyphicon-chevron-down, .glyphicon-chevron-up{
                color: #ff0000;
            }

            -->
        </style>
    </head>
    <body>
    <?= 'saul' ?>
        <div class=\"col-xs-12  col-sm-12 col-md-10 col-md-offset-1 col-lg-10  col-lg-offset-1\">
        
            <h1><span class=\"first\">Lista</span><span class=\"second\">empleados</span></h1>
            
            <div class=\"table-responsive\">
            
                <!-- Initialization 
                * js-dynamitable => dynamitable trigger (table)
                -->
                <table id=\"lista_empleados\" class=\"js-dynamitable     table table-bordered\">
                    
                    <!-- table heading -->
                    <thead>
                    
                        <!-- Sortering
                        * js-sorter-asc => ascending sorter trigger
                        * js-sorter-desc => desending sorter trigger
                        -->
                        <tr>
                            <th>Name
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>
                            <th>Email
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>
                            <th>Position
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                             </th>                            
                            <th>Salary
                                <span class=\"js-sorter-desc     glyphicon glyphicon-chevron-down pull-right\"></span>
                                <span class=\"js-sorter-asc     glyphicon glyphicon-chevron-up pull-right\"></span>
                            </th>
                            <th>Detalle


                            </th>
                        </tr>
                        
                        <!-- Filtering
                        * js-filter => filter trigger (input, select)
                        -->
                        <tr>
                            <th>
                                <!-- input filter -->
                                <input  class=\"js-filter  form-control\" type=\"text\" value=\"\">
                            </th>
                            <th>
                                <!-- input filter -->
                                <input  class=\"js-filter  form-control\" type=\"text\" value=\"\">
                            </th>
                            <th><input class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                            <th><input class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                            <th><input disabled class=\"js-filter  form-control\" type=\"text\" value=\"\"></th>
                        </tr>
                    </thead>

                    <!-- table body -->

                    <tbody>
                     <?php
                     \$idx=-1;
                  foreach (\$lista as \$emp) {
                      \$idx=\$idx+1;
                      ?>
                        <tr>
                            <td><?php echo \$emp->name ?></td>
                            <td><?php echo \$emp->name ?></td>
                            <td><?php echo \$emp->email ?></td>
                            <td class=\"text-right\"><?php echo \$emp->position ?></td>
                            <td class=\"text-right\"><?php echo \$emp->salary ?></td>
                            <td >
                             <a href=\"info_empleado/<?php echo \$idx ?>\">
                                <img style=\"width: 20px;height: 20px;text-align: center;margin-left: 50%;\" src=\"../../img/lupa.png\"
                            </a>
                            </td>
                        </tr>

                         <?php
                        }
                        ?>
                    </tbody>

                </table>
            </div>
        </div>
        
        <!-- jquery -->
        <script src=\"js/jquery-3.2.1.min.js\"></script>
        <!-- dynamitable -->
        <script src=\"js/dynamitable.jquery.min.js\"></script>
    </body>
</html>
", "lista_empleados.php", "F:\\proyectos_php\\solucion\\templates\\lista_empleados.php");
    }
}
