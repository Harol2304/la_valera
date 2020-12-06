window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
        
        location.replace("index.php?c=usuario");
        
    });
},2000

);