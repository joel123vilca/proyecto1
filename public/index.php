<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';
include_once '../config.php';
$baseUrl = '';
$baseDir = str_replace(basename($_SERVER['SCRIPT_NAME']),'',$_SERVER['SCRIPT_NAME']);
$baseUrl = 'http://'.$_SERVER['HTTP_HOST'].$baseDir;

define('BASE_URL',$baseUrl);

$route = $_GET['route']?? '/';
function render($fileName, $params = []){
  ob_start();
  extract($params);
  include $fileName;
  return ob_get_clean();
}
use Phroute\Phroute\RouteCollector;
$router = new RouteCollector();

$router->get('/admin/create', function(){

  return render('../views/admin/insert_clinica.php');
});


$router->post('/admin/create', function() use  ($pdo){

    $destino = 'images/';
    $imagen_subida = $destino .basename($_FILES['foto']['name']);
    $guardar=move_uploaded_file($_FILES['foto']['tmp_name'],$imagen_subida);

  $sql = 'INSERT INTO clinicas (nombre, ubicacion, horario, celular, email, website, facebook, img, mapa, tipo) VALUES (:nombre, :ubicacion, :horario, :celular,:email,:website,:facebook,:img,:mapa,:tipo)';
  $query = $pdo->prepare($sql);
  $result=$query->execute([
  'nombre'=>$_POST['nombre'],
  'ubicacion'=>$_POST['ubicacion'],
  'horario'=>$_POST['horario'],
  'celular'=>$_POST['celular'],
  'email'=>$_POST['email'],
  'website'=>$_POST['website'],
  'facebook'=>$_POST['facebook'],
  'img'=>$imagen_subida,
  'mapa'=>$_POST['mapa'],
  'tipo'=>$_POST['tipo']
  ]);

  return render('../views/admin/insert_clinica.php');
});

$router->controller('/admin/post', App\controllers\Admin\PostController::class);
$router->controller('/admin',App\controllers\Admin\IndexController::class);
$router->controller('/', App\controllers\IndexController::class);
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $route);
echo $response;


 ?>
