//obsługa wyszukiwania płyt
 function submitSearch() {
	 
	 search_cd = $('#search_input').val();	
	 $.ajax({
     url: 'search_cd.php', 
     type: "POST",
     data: {search_cd:search_cd},
     success: function(response){                    
            $(".column_right").html(response); 
			
     }
	});
	    return false;
}