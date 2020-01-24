<div id="editStudentModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form name="edit_student" id="edit_student">
                    <div class="modal-header">						
                        <h4 class="modal-title">Editar Estudiante</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>

                    <div class="modal-body">

                        <div class="control-group">
                            <label for="inputNEst" class="control-label">Nombre</label>
                            <input type="text" name="edit_name" id="edit_name" class="form-control" required>
                            <input type="hidden" name="edit_id" id="edit_id" >
                        </div>
                        <div class="control-group">
                            <label for="inputAEst" class="control-label">Apellido</label>
                            <input type="text" name="edit_ape" id="edit_ape" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputEEst" class="control-label">Edad</label>
                            <input type="text" name="edit_edad" id="edit_edad" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputSEst" class="control-label">Sexo</label>
                            <select name="edit_sexo" id="edit_sexo" class="form-control" class="form-control" required>
                                <option value="Masculino" <?php  ?>>Masculino</option>
                                <option value="Femenino" <?php  ?>>Femenino</option>
                                <option value="Indefinido" <?php  ?>>Indefinido</option>
                            </select> 
                        </div>
                        <div class="control-group">
                            <label for="inputCod" class="control-label" >Código</label>
                            <input type="text" name="edit_code" id="edit_code" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputIngreso" class="control-label">Año de Ingreso</label>
                            <input type="date" name="edit_fecha" id="edit_fecha" class="input-group date form-control" date="" data-date-format="" placeholder="" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputCarrera" class="control-label">Carrera</label>
                            <input type="text" name="edit_carrera" id="edit_carrera" class="form-control" required>
                        </div>
                        <div class="control-group">
                            <label for="inputCampus" class="control-label">Campus</label>
                            <input type="text" name="edit_campus" id="edit_campus" class="form-control" required>
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