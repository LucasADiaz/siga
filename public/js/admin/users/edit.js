$(function(){

$('#materias').on('change',ListaDesplegables);
});

function ListaDesplegables(){

  var materia_id=$(this).val();

if(!materia_id){
  $('#cursos').html('<option value="">Cursos</option>');
  return;

}

  //Ajax con webservicw(api)

$.get('/api/MateriaProfesor/'+materia_id+'/Curso',function(datos){
      var html_select='<option value="">Cursos</option>';
      for(var i=0; i<datos.length; i++)
      html_select+='<option value="'+datos[i].id+'">'+datos[i].seccion+'</option>'
      $('#cursos').html(html_select);
});



}