<?php

if (empty($_POST['name'])){
    $errors[] = "Ingresa el nombre.";

}elseif (!empty($_POST['name'])){
    require_once ("../conexion.php");//Contiene funcion que conecta a la base de datos
	// escaping, additionally removing everything that could be (html/javascript-) code
    $Nombre = mysqli_real_escape_string($con,(strip_tags( $_POST["name"],ENT_QUOTES)));//Escanpando caracteres 
    $Apellido = mysqli_real_escape_string($con,(strip_tags($_POST["ape"],ENT_QUOTES)));//Escanpando caracteres 
    $Edad = intval($_POST['edad']);
    $Sexo =  mysqli_real_escape_string($con,(strip_tags($_POST["sexo"],ENT_QUOTES)));//Escanpando caracteres 
    $codigo = mysqli_real_escape_string($con,(strip_tags($_POST["code"],ENT_QUOTES)));//Escanpando caracteres 
    $ingreso = mysqli_real_escape_string($con,(strip_tags($_POST["fecha"],ENT_QUOTES)));//Escanpando caracteres 
    $carrera = mysqli_real_escape_string($con,(strip_tags($_POST["carrera"],ENT_QUOTES)));//Escanpando caracteres 
    $campus = mysqli_real_escape_string($con,(strip_tags($_POST["campus"],ENT_QUOTES)));//Escanpando caracteres

    $check = mysqli_query($con, "SELECT * FROM estudiantes WHERE codigo='$codigo'");

    if(mysqli_num_rows($check) == 0){
        
        // REGISTER data into database
        $sql = "INSERT INTO estudiantes(nombreEst, apeEst, edadEst, sexo, codigo, fIngreso, carrera, campus) VALUES('$Nombre','$Apellido', '$Edad', '$Sexo', '$codigo', '$ingreso', '$carrera', '$campus')";
        $query = mysqli_query($con,$sql);
        // if Estudiante has been added successfully

        if ($query){
            $messages[] = "El Estudiante ha sido guardado con éxito.";
        }else{
            $errors[] = "Lo sentimos, el registro falló. Por favor, regrese y vuelva a intentarlo.";
        }

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