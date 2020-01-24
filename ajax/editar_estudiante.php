<?php

if (empty($_POST['edit_id'])){
    $errors[] = "Id vacío.";

}elseif (!empty($_POST['edit_id'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $Nombre = mysqli_real_escape_string($con,(strip_tags( $_POST["edit_name"],ENT_QUOTES)));//Escanpando caracteres 
    $Apellido = mysqli_real_escape_string($con,(strip_tags($_POST["edit_ape"],ENT_QUOTES)));//Escanpando caracteres 
    $Edad = intval($_POST['edit_edad']);
    $Sexo =  mysqli_real_escape_string($con,(strip_tags($_POST["edit_sexo"],ENT_QUOTES)));//Escanpando caracteres 
    $codigo = mysqli_real_escape_string($con,(strip_tags($_POST["edit_code"],ENT_QUOTES)));//Escanpando caracteres 
    $ingreso = mysqli_real_escape_string($con,(strip_tags($_POST["edit_fecha"],ENT_QUOTES)));//Escanpando caracteres 
    $carrera = mysqli_real_escape_string($con,(strip_tags($_POST["edit_carrera"],ENT_QUOTES)));//Escanpando caracteres 
    $campus = mysqli_real_escape_string($con,(strip_tags($_POST["edit_campus"],ENT_QUOTES)));//Escanpando caracteres
	

	$id=intval($_POST['edit_id']);
	// UPDATE data into database
    $sql = "UPDATE estudiantes SET nombreEst='$Nombre', apeEst='$Apellido', edadEst='$Edad', sexo='$Sexo', fIngreso='$ingreso', carrera='$carrera', campus='$campus' WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    // if product has been added successfully

    if ($query){
        $messages[] = "El Estudiante ha sido actualizado con éxito.";
    }else{
        $errors[] = "Lo sentimos, la actualización falló. Por favor, regrese y vuelva a intentarlo.";
    }

}else 
{
    $errors[] = "desconocido.";
}

if (isset($errors)){
    ?>
    	<div class="alert alert-danger" role="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
				<strong>Error!</strong> 
				    <?php
						foreach ($errors as $error) {
							echo $error;
						}
					?>
		</div>
<?php
    }

    if (isset($messages)){
?>

<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>¡Bien hecho!</strong>
			<?php
				foreach ($messages as $message) {
					echo $message;
				}
			?>
</div>
<?php
}

?>	