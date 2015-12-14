//chowanie i pokazywanie diva z dodawaniem utworu
$(document).ready(function () {
	$('#hide').click(function(e)
{
		e.preventDefault();
		$('#add_track').hide("blind");
		$('#hide').hide();
		$('#show').show();
		
	});
});
$(document).ready(function () {
	$('#show').click(function(e)
{
		e.preventDefault();
		$('#add_track').show("blind");
		$('#show').hide();
		$('#hide').show();
	
	});
});