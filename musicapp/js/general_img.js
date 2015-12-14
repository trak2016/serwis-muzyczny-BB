//obsługa wyświetlania płyt po gatunku
$(document).ready(function() {
  $('.btn').click(function(){
    id_genre = $(this).attr('id');
	
$.ajax({
     url: 'genre_cd.php', 
     type: "POST",
     data: {id_genre:id_genre},
     success: function(response){                    
            $(".column_right").html(response); 
     }
});  

	
  });
});


