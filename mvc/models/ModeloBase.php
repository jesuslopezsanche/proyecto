<?php
   require_once 'config/database.php';
   
   class ModeloBase{
     public $db;

     public function __construct(){
       $this->db = database::conectar();
     }

     public function MostrarTodos($tabla){
       $query = $this->db->query("SELECT * FROM $tabla");
       return $query;
     }

     public function BusquedaUsuario($tabla, $id){
       $query = $this->db->query("SELECT * FROM " . $tabla . " WHERE id=$id");
       return $query;
     }

     public function BorrarUsuario($tabla, $id){
       $query=$this->db->query("DELETE FROM " . $tabla . " WHERE id=$id");
       return $query;
     }
   }
?>