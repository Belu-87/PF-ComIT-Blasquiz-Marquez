$(".Ingresar").on('click', function(){   
	$(".text").addClass("active");
	$(".Ingresar").addClass("active");    
	$(".loader").addClass("active");    
	$(".Ingresar").delay(1700).queue(function(){        
		$(this).addClass("finished").clearQueue();    
	});        
$(".done").delay(1600).queue(function(){
        $(this).addClass("active").clearQueue();
         });
})