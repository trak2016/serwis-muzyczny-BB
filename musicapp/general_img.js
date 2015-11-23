$(document).ready(function() {
  $('.imageTop').click(function(){
    id_image = $(this).attr('id');
	
$.ajax({
     url: 'open_cd.php', 
     type: "POST",
     data: {id_image:id_image},
     success: function(response){                    
            $(".news").html(response); 
     }
});  

	
  });
});


$(document).ready(function() {
  $('.image').click(function(){
    id_image = $(this).attr('id');
	
$.ajax({
     url: 'open_cd.php', 
     type: "POST",
     data: {id_image:id_image},
     success: function(response){                    
            $(".news").html(response); 
     }
});  

	
  });
});


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


