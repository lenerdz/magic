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
		    alert( "Data Saved: " + msg );
		  });
	});

	$("#formulario").submit(function() {
		return false;
	});
});