<?php

/* Connect To Database*/
require_once ("../conexion.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

if($action == 'ajax'){
    $query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

    $tables="estudiantes";
	$campos="*";
	$sWhere=" estudiantes.nombreEst LIKE '%".$query."%'";
    $sWhere.=" order by estudiantes.id";
    

    include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>

    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th class='text-center'>Id</th>
                    <th>Nombre </th>
                    <th>Apellido </th>
                    <th>Edad </th>
                    <th class='text-center'>Sexo</th>
                    <th class='text-right'>Código</th>
                    <th class='text-center'>Fecha Ingreso</th>
                    <th class='text-right'>Carrera</th>
                    <th class='text-right'>Campus</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php 
					$finales=0;
					while($row = mysqli_fetch_array($query)){	
					$id=$row['id'];
					$nombreEst=$row['nombreEst'];
                    $apeEst=$row['apeEst'];
                    $edad=$row['edadEst'];
					$sexo=$row['sexo'];
					$codigo=$row['codigo'];
                    $fingreso=$row['fIngreso'];
                    $carrera=$row['carrera'];
                    $campus=$row['campus'];						
                    $finales++;
				?>
                <tr class="<?php echo $text_class;?>">
                    <td class='text-center'><?php echo $id;?></td>
                    <td ><?php echo $nombreEst;?></td>
                    <td ><?php echo $apeEst;?></td>
                    <td ><?php echo $edad;?></td>
                    <td class='text-center' ><?php echo $sexo;?></td>
                    <td class='text-right'><?php echo $codigo;?></td>
                    <td class='text-center' ><?php echo $fingreso;?></td>
                    <td class='text-right'><?php echo $carrera;?></td>
                    <td class='text-right'><?php echo $campus;?></td>
                    <td>
                        <a href="#"  data-target="#editStudentModal" class="edit" data-toggle="modal" data-id="<?php echo $id;?>" data-nombre='<?php echo $nombreEst;?>' data-ape="<?php echo $apeEst?>" data-edad="<?php echo $edad?>" data-sexo="<?php echo $sexo?>" data-code="<?php echo $codigo?>" data-fecha="<?php echo $fingreso;?>" data-carrera="<?php echo $carrera;?>" data-campus="<?php echo $campus;?>"  ?>"><i class="material-icons" data-toggle="tooltip" title="Editar" >&#xE254;</i></a>
                        <a href="#" data-target="#deleteStudentModal" class="delete" data-toggle="modal" data-id="<?php echo $id; ?>"><i class="material-icons" data-toggle="tooltip" title="Eliminar">&#xE872;</i></a>
                    </td>
                </tr>
                <?php }?>
                <tr>
					<td colspan='6'> 
                        <?php 
                            $inicios=$offset+1;
                            $finales+=$inicios -1;
                            echo "Mostrando $inicios al $finales de $numrows registros";
                            echo paginate( $page, $total_pages, $adjacents);
                        ?>
					</td>
				</tr>
            </tbody>
        </table>
    </div>



	<?php	
	}	
}
?>