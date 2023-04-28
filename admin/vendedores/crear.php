<?php 
require '../../includes/app.php';

use App\Vendedor;

estaAutenticado();

$vendedor = new Vendedor;

 //Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

//Ejecutar el codigo despues de que el usuario envia el formulario 

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   // Crear una nueva instancia
   $vendedor = new Vendedor($_POST['vendedor']);

   // Validar que no hayan campos vacios
   $errores = $vendedor->validar();

    // No hay errores

    if (empty($errores)){
        $vendedor->guardar();
    }
}

if (empty($errores)){

}

incluirTemplate('header');

?>

<main class="contenedor seccion ">

<h1>Registrar vendedor/a</h1>

<a class="boton boton-verde" href="../index.php">Volver</a>

<?php foreach($errores as $error): ?>

    <div class="alerta error">
    <?php echo $error; ?>
    </div>

<?php endforeach; ?>

<form class="formulario" method="POST" action="/admin/vendedores/crear.php" enctype="multipart/form-data">

<?php include '../../includes/templates/formulario_vendedores.php'; ?>

<input class="boton boton-verde" type="submit" value="Registrar vendedor">

</form>

</main>

<?php
incluirTemplate('footer');
?>