 function submitForm() {
			$("body").css('cursor','progress');
            console.log("submit event");
            var fd = new FormData(document.getElementById("fileinfo"));
            fd.append("label", "WEBUPLOAD");
            $.ajax({
              url: "show_photo.php",
              type: "POST",
              data: fd,
              enctype: 'multipart/form-data',
              processData: false,  // tell jQuery not to process the data
              contentType: false,
			success: function(response){                    
            $(".image_size").html(response); }			  // tell jQuery not to set contentType
            });
            return false;
        }
		

					
 function submitCd() {
            console.log("submit event");
						           
			title_cd = $('#title_cd').val();
			band_cd = $('#band_cd').val();
			select_genre_id = $('#select_genre').val();	
			describe_cd= document.getElementById("describe_cd").value;

			if ("" == title_cd || "" == band_cd) {
		  swal({   
				title: "",   
				text: "Uzupełnij wszystkie pola!",  
				type:'error',
				showConfirmButton:true,
				confirmButtonColor: '#27a387'})
				
		 return false;
	  }	  
	
		    $.ajax({
              url: "add_cd.php",
              type: "POST",
              data: {title_cd:title_cd, band_cd:band_cd, select_genre_id:select_genre_id,describe_cd:describe_cd},
              enctype: 'multipart/form-data',
           success: function(response){                    
              swal({   
				title: "",   
				text: "Płyta została dodana do bazy!",  
				type:'success',
				showConfirmButton:true,
				confirmButtonColor: '#27a387'},
				function(){
				window.location.reload();
				}) }			 
            });
            return false;
        }
		