$(function() {
    load(1);
});

function load(page){
    var query=$("#q").val();
    var per_page=10;
    var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
    $("#loader").fadeIn('slow');
    $.ajax({
        url:'ajax/listar_estudiantes.php',
        data: parametros,
        beforeSend: function(objeto){
            $("#loader").html("Cargando...");
        },
        success:function(data){
            $(".outer_div").html(data).fadeIn('slow');
            $("#loader").html("");
        }
    })
}


$('#editStudentModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') 
    $('#edit_id').val(id)
    var name = button.data('nombre') 
    $('#edit_name').val(name)
    var apeEst = button.data('ape') 
    $('#edit_ape').val(apeEst)
    var edad = button.data('edad') 
    $('#edit_edad').val(edad)
    var sexo = button.data('sexo') 
    $('#edit_sexo').val(sexo)
    var code = button.data('code') 
    $('#edit_code').val(code)
    var fecha = button.data('fecha') 
    $('#edit_fecha').val(fecha)
    var carrera = button.data('carrera') 
    $('#edit_carrera').val(carrera)
    var campus = button.data('campus') 
    $('#edit_campus').val(campus)
  })

  $( "#edit_student" ).submit(function( event ) {
    var parametros = $(this).serialize();
      $.ajax({
              type: "POST",
              url: "ajax/editar_estudiante.php",
              data: parametros,
               beforeSend: function(objeto){
                  $("#resultados").html("Enviando...");
                },
              success: function(datos){
              $("#resultados").html(datos);
              load(1);
              $('#editStudentModal').modal('hide');
            }
      });
    event.preventDefault();
  });

  $('#deleteStudentModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') 
    $('#delete_id').val(id)
  })


  $( "#delete_student" ).submit(function( event ) {
    var parametros = $(this).serialize();
      $.ajax({
              type: "POST",
              url: "ajax/eliminar_estudiante.php",
              data: parametros,
               beforeSend: function(objeto){
                  $("#resultados").html("Enviando...");
                },
              success: function(datos){
              $("#resultados").html(datos);
              load(1);
              $('#deleteStudentModal').modal('hide');
            }
      });
    event.preventDefault();
  });


  $('#addStudentModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var id = button.data('id') 
    $('#id').val(id)
    var name = button.data('nombre') 
    $('#name').val(name)
    var apeEst = button.data('ape') 
    $('#ape').val(apeEst)
    var edad = button.data('edad') 
    $('#edad').val(edad)
    var sexo = button.data('sexo') 
    $('#sexo').val(sexo)
    var code = button.data('code') 
    $('#code').val(code)
    var fecha = button.data('fecha') 
    $('#fecha').val(fecha)
    var carrera = button.data('carrera') 
    $('#carrera').val(carrera)
    var campus = button.data('campus') 
    $('#campus').val(campus)
  })


  $( "#add_student" ).submit(function( event ) {
    var parametros = $(this).serialize();
      $.ajax({
              type: "POST",
              url: "ajax/guardar_estudiante.php",
              data: parametros,
               beforeSend: function(objeto){
                  $("#resultados").html("Enviando...");
                },
              success: function(datos){
              $("#resultados").html(datos);
              load(1);
              $('#addStudentModal').modal('hide');
            }
      });
    event.preventDefault();
  });