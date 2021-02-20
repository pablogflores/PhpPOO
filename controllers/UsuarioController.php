<?php

class UsuarioController{
    //Acciones de un controlador 
    //Como Crear, Mostrar, Eliminar Usuario

    public function mostrarTodos(){
    require_once 'models/usuario.php';
    $usuario = new Usuario();
    $todos_Los_Usuarios = $usuario->conseguirTodos();
    require_once 'views/usuarios/mostrar-todos.php';


    }

    public function crear(){
        require_once 'views/usuarios/crear.php';


    }
    
}





