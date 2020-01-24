<!DOCTYPE html>
<html lang="es">
<head>
    <?php
        require_once("head.php");
    ?>
</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
            <div class="row">
                    <div class="col-sm-6">
						<h2>Administrar <b>Estudiantes</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addStudentModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar nuevo Estudiante</span></a>
					</div>
                </div>
            </div>

            <div class='col-sm-4 pull-right'>
				<div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text" class="form-control" placeholder="Buscar"  id="q" onkeyup="load(1);" />
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="button" onclick="load(1);">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
                    </div>
                </div>
			</div>
        </div>
    </div>
    <div class='clearfix'></div>
	<hr>
	<div id="loader"></div><!-- Carga de datos ajax aqui -->
	<div id="resultados"></div><!-- Carga de datos ajax aqui -->
    <div class='outer_div'></div><!-- Carga de datos ajax aqui -->
    
<!-- Edit Modal HTML -->
<?php include("html/modal_add.php");?>
<!-- Edit Modal HTML -->
<?php include("html/modal_edit.php");?>
<!-- Delete Modal HTML -->
<?php include("html/modal_delete.php");?>
<script src="js/script.js"></script>
</body>
</html>