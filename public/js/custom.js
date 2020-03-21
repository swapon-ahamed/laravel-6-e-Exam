(function(){
  $('#later').click(function(){
    var temp_id = $('#temp_id').val();
     $.get({url: "/exam/updateTemp",
    data: { temp_id: temp_id },
     method:'get',
      success: function(result){
        window.location.href = "/exam/start";
  }});
  })

//admin

$("#sclass_id").change(function(){
	var classId = $(this).val();
	$.get({url: "/admin/sections/ajax",
	  data: { id: classId },
	   method:'get',
	   success: function(result){
	   	var data = JSON.parse(result);
	   	var html = '';
	   	$.each( data, function( index, value ){
	   		html +='<input type="checkbox" id="'+index+'" name="sections[]" value="'+value.id+'"> <label for=""> '+value.name+' </label><br>';
	   	    $('#section_container').html(html);
	   	});
	}});
})


}());