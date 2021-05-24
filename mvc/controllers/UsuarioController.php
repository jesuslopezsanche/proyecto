<?php
   class UsuarioController{
     public function crear(){
       require_once 'views/usuarios/crear.php';
     }

     public function guardar(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $guardar = $user->Create();
     }

     public function mostrarTodos(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->MostrarTodos('usuarios');
       require_once 'views/usuarios/mostrar.php';
     }

     public function listarModificar(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->MostrarTodos('usuarios');
       require_once 'views/usuarios/listarModificar.php';
     }

      public function listarEliminar(){
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->MostrarTodos('usuarios');
       require_once 'views/usuarios/listarEliminar.php';
     }
     

     public function buscarUsuario(){
       $id = $_REQUEST['id'];   
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->BusquedaUsuario('usuarios',$id);  
       require_once 'views/usuarios/modificar.php';
     }
     
     public function modificarUsuario(){
       $id = $_REQUEST['id'];
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $user->setNombre($_POST['txNombre']);
       $user->setApellido($_POST['txApellido']);
       $user->setEmail($_POST['txEmail']);
       $actualizar = $user->Modificar($id);
     }
     public function borrarUsuario(){
       $id = $_REQUEST['id'];   
       require_once 'models/Usuario.php';
       $user = new Usuario();
       $resultUser = $user->BorrarUsuario('usuarios',$id);  
     }



   }
?>