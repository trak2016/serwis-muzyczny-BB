//obsługa podświetlania aktywnych zakładek
 $(function() { 

        var path = window.location.pathname;
        path = path.replace(/\/$/, "");
        path = decodeURIComponent(path);

        $("#navbar li a").each(function () {
            var href = $(this).attr('href');
            if(path.substring((path.lastIndexOf('/')+1),path.lenght) === href) {    
                $(this).closest('li').addClass('active');
            } else {
                $(this).closest('li').removeClass();
            }
        });         
 });