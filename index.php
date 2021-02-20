<h1>Bienvenido a Mi WED con MVC</h1>
<?php



//require_once 'controllers/usuario.php';
//require_once 'controllers/nota.php';
require_once 'autoload.php';

if (isset($_GET['controller'])) {
    $nombre_controller = $_GET['controller'].'Controller';
    var_dump($nombre_controller);
}else{
  echo "La pagina no existe";
  exit();

}




if (class_exists($nombre_controller)) {
   
   $controlador = new $nombre_controller();
   
if (isset($_GET['action']) && method_exists($controlador,$_GET['action'])) {
    $action = $_GET['action'];
    $controlador->$action();

}else{
   
    echo "No existe ";

}


}else{

    echo "La pagina no existe";
}



