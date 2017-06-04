<?php
// Routes
require 'beans/empleado.php';
$container = $app->getContainer();
$container['view'] = new \Slim\Views\PhpRenderer("../templates/");

$app->get('/', function ($request, $response, $args) {
    $str = file_get_contents(__DIR__ . '/data/employees.json');
    $listaEmpleados = (array)json_decode($str,TRUE);
    return $this->view->render($response, 'lista_empleados.php' , ["listaEmpleados" => $listaEmpleados]);
})->setName('home');

$app->get('/empleados', function ($request, $response, $args) {
    $str = file_get_contents(__DIR__ . '/data/employees.json');
    $listaEmpleados = (array)json_decode($str,TRUE);
    return $this->view->render($response, 'lista_empleados.php' , ["listaEmpleados" => $listaEmpleados]);
})->setName('empleados');

$app->get('/info_empleado/{id}', function ($request, $response, $args){
    $str = file_get_contents(__DIR__ . '/data/employees.json');
    $listaEmpleados = (array)json_decode($str,TRUE);
    $infoEmpleado=null;
    foreach ($listaEmpleados  as $empleado)
    {
        if($empleado['id']== $args['id']){
            $infoEmpleado= $empleado;
        }
    }
    return $this->view->render($response, 'info_empleado.php' , ["infoEmpleado" => $infoEmpleado]);
})->setName('info_empleado');

$app->get('/rest/rango_salarial/{min}/{max}', function ($request, $response, $args){

    $min = floatval($args['min']);
    $max = floatval($args['max']);
    $str = file_get_contents(__DIR__ . '/data/employees.json');
    $listaEmpleados = (array)json_decode($str,TRUE);
    $listaResultado = array();

    foreach ($listaEmpleados as $empleado)
    {
        $salario= (int)preg_replace("/([^0-9\\.])/i", "", $empleado["salary"]);
        if($salario > $min and $salario < $max)
        {
            array_push($listaResultado, (array)$empleado);
        }
    }
    $newResponse = $response->withHeader('Content-type', 'application/xml');
    return $this->renderer->render($newResponse, 'rango_salarial.xml', ["listaResultado" => $listaResultado]);
})->setName('rango_salarial');



