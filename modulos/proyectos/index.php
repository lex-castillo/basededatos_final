<?php
include_once("../../funciones/funciones.php");
include_once("../../funciones/consultas.php");
include_once("../../funciones/bd.php");
use funciones\mysqlfunciones;
use consultas_sql\consultas;
$ejecutar = new mysqlfunciones();
$consulta= new consultas();
$project = $consulta->projectGet();
//$session = $ejecutar->usuarioActivo();
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <?php include("../../includes/header.php");
  
   ?>

    <title>Proyectos</title>
</head>
<body>
    <?php
   include("../../includes/conexion.php")
   
    ?>
  
  <div class="container mt-5">
  <div class="row">
  <div class="col-sm-12">
  <a href="../../cerrarsesion.php" class="btn btn-danger float-right mb-5"><span class="fas fa-sign-out-alt"></span> Cerrar Sesion</a>
  <a href="formularios_usuarios.php" class="btn btn-primary float-left mb-5"><span class="fa fa-plus-circle"></span>  Nuevo</a>
  </div>
  <div class="container">
<div class="row">
  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">USUARIOS</h5>
        <a href="modulos/usuarios/index.php" class="btn btn-dark">Ir a tareas</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">BLOG</h5>
        <a href="modulos/blog/index.php" class="btn btn-dark ">Ir a tareas</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-center">CATEGORIAS</h5>
        <a href="modulos/categorias/index.php" class="btn btn-dark ">Ir a tareas</a>
      </div>
    </div>
  </div>
</div>
</div>

  
  <?php include("../../includes/script.php")?>
</body>
</html>