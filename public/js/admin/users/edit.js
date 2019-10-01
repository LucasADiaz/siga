$(function(){
  $('#materias').on('change',function(){
    var materia_id=$(this).val();
    if($.trim(materia_id)!=''){
      $.get('nota/cargar',{materia_id:materia_id},function(cursos){

        $('#cursos').empty();
        $('#cursos').append("<optiion value=''>Seleccione un Curso </optiion>");
        $.each(cursos,function(index,value){
          $('#cursos').append("<optiion value='"+index+"'>" + value +" </optiion>");
        }); 
      });
    }
  });
});

