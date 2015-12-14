		
 function submitAddTrack() {
            console.log("submit event");
			$("body").css('cursor','progress');
            var fd = new FormData(document.getElementById("add_track_form"));
			var title_track = new FormData(document.getElementById("title_track"));
			var id_album = new FormData(document.getElementById("id_album"));
            fd.append("label", "WEBUPLOAD");
			title_track = $('#title_track').val();
			id_album = $('#id_album').val();
			
		
			if ("" == title_track){
			swal({   
				title: "",   
				text: "Wpisz tytuł utworu!",  
				type:'error',
				showConfirmButton:true,
				confirmButtonColor: '#27a387'})
				
				return false;
				
			}
			
			if ("" == fd){
			swal({   
				
				title: "",   
				text: "Wybierz plik!",  
				type:'error',
				showConfirmButton:true,
				confirmButtonColor: '#27a387'})
				
				return false;
				
			}
			
            $.ajax({
              url: "add_track.php?title_track=" + title_track + "&id_album=" + id_album + "",
              type: "POST",
			  data: fd, title_track,
			  processData: false,  
              contentType: false,
              enctype: 'multipart/form-data',
             success: function(response){                    
              swal({   
				title: "",   
				text: "Utwór został poprawnie dodany!",  
				type:'success',
				showConfirmButton:true,
				confirmButtonColor: '#27a387'},
				function(){
				window.location.reload();
				}) }			 
            });
            return false;
        }
		