<?php



class NotaController{

public function listar(){
    require_once 'models/nota.php';
    $nota = new Nota();
    $nota->setNombre("nota numero 1");
    $nota->setContenido("HOliss");
    
    require_once 'views/nota/listar.php';


}
public function crear(){

}
public function borrar(){


}
public function mostrarTodos(){
    require_once 'models/nota.php';
    $usuario = new Nota();
    $todos_Los_Usuarios = $usuario->conseguirTodos();
    require_once 'views/usuarios/mostrar-todos.php';


    }





}