function submitComment() {
         	
			comment= $('#comment').val();
			id_album= $('#id_album').val();
			$.ajax({
             url: "add_comment.php",
             type: "POST",
			 data: {comment:comment,id_album:id_album},
			 enctype: 'multipart/form-data',
             success: function(response){                    
            
			$(".comments_show").load(location.href+" .comments_show>*","").fadeIn(5000);
			}				 
            });
            return false;
        }