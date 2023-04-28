<?php 

require '../../includes/app.php';
use App\Vendedor;
estaAutenticado();

// Validar que sea un ID valido
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);

if(!$id){
    header('Location: /admin');
} 

//Obtener el arreglo del vendedor
$vendedor = Vendedor::find($id);

 //Arreglo con mensajes de errores
$errores = Vendedor::getErrores();

//Ejecutar el codigo despues de que el usuario envia el formulario 
if($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Asignar los valores
    $args = $_POST['vendedor'];

    // Sincronizar objeto en memoria con lo que el usuario escribio
    $vendedor->sincronizar($args);

    // Validacion
    $errores = $vendedor->validar();

    if (empty($errores)){
        $vendedor->guardar();

    }

}

incluirTemplate('header');

?>

<main class="contenedor seccion ">

<h1>Actualizar vendedor/a</h1>

<a class="boton boton-verde" href="../index.php">Volver</a>

<?php foreach($errores as $error): ?>

    <div class="alerta error">
    <?php echo $error; ?>
    </div>

<?php endforeach; ?>

<form class="formulario" method="POST">

<?php include '../../includes/templates/formulario_vendedores.php'; ?>

<input class="boton boton-verde" type="submit" value="Guardar cambios">

</form>

</main>

<?php
incluirTemplate('footer');
?>