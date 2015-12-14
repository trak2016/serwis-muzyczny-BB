 //obsługa oceniania płyt
 $(document).ready(function () {
	$("#star_rate .stars").click(function () {
		rate=$(this).attr("value");
		
		id_album = $('#id_album').val();
		$.ajax({
		url: "rating.php",
		type: "POST",
		data: {rate:rate,id_album:id_album},
		enctype: 'multipart/form-data',
		success: function(response){ 
		
		$(".rate_disp").load(location.href+" .rate_disp>*","").fadeIn(5000);
		}			 
		});
		return false;
		
		
	});
});