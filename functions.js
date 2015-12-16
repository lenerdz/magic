$(document).ready(function() {
	var dado = $("#nome");
	$("#subb").click(function(){
		$.ajax({
		  method: "POST",
		  url: "ajax.php",
		  data: { name: dado.val() }
		})
		  .fail(function() {
    		alert( "error");
  		  })
		  .done(function( msg ) {
		  	if (msg==1) {
		  		$("#cont").append('<tr><td>'+dado.val()+'</td></tr>');
		  		$("#formulario").trigger('reset');
		  	}else alert( "Data Error: " + msg );
		    
		  });
	});

	$("#formulario").submit(function() {
		return false;
	});
});