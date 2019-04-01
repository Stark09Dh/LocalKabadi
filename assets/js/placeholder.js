
$(document).ready(function(){
	
	$('input[type="text"], input[type="number"], input[type="date"], input[type="time"],  input[type="password"], textarea').each(function() {
		$(this).val( $(this).attr('placeholder') );
    });
	
});