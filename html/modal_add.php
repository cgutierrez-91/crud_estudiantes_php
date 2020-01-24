<div id="addStudentModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="add_student" id="add_student">
                    <div class="modal-header">						
                        <h4 class="modal-title">Agregar Estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">

                        <div class="control-group">
                            <label for="inputNEst" class="control-label">Nombre</label>
                            <input type="text" name="name" id="name" class="form-control" required>
                            
                        </div>
                        <div class="control-group">
                            <label for="inputAEst" class="control-label">Apellido</label>
                            <input type="text" name="ape" id="ape" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputEEst" class="control-label">Edad</label>
                            <input type="text" name="edad" id="edad" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputSEst" class="control-label">Sexo</label>
                            <select name="sexo" id="esexo" class="form-control" class="form-control" required>
                                <option value="Masculino" <?php  ?>>Masculino</option>
                                <option value="Femenino" <?php  ?>>Femenino</option>
                                <option value="Indefinido" <?php  ?>>Indefinido</option>
                            </select> 
                        </div>
                        <div class="control-group">
                            <label for="inputCod" class="control-label" >Código</label>
                            <input type="text" name="code" id="code" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputIngreso" class="control-label">Año de Ingreso</label>
                            <input type="date" name="fecha" id="fecha" class="input-group date form-control" date="" data-date-format="" placeholder="" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputCarrera" class="control-label">Carrera</label>
                            <input type="text" name="carrera" id="carrera" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputCampus" class="control-label">Campus</label>
                            <input type="text" name="campus" id="campus" class="form-control" required>
                        </div>                    
                    </div>

                    <div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
						<input type="submit" class="btn btn-info" value="Guardar datos">
					</div>
				</form>
			</div>
		</div>
	</div>