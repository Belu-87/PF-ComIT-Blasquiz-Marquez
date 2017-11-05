// $(".Ingresar").on('click', function(){   
// 	$(".text").addClass("active");
// 	$(".Ingresar").addClass("active");    
// 	$(".loader").addClass("active");    
// 	$(".Ingresar").delay(1700).queue(function(){        
// 		$(this).addClass("finished").clearQueue();    
// 	});        
// $(".done").delay(1600).queue(function(){
//         $(this).addClass("active").clearQueue();
//          });
// })

$(document).ready(function (){
   $("#submit").click(function (){
        if($("#email").val()==""||$("#pass").val()=="")
        	$("#errorMessage").html("por favor, ingrese credenciales");
        else
            // $.post( $("#login").attr("action"), 
            //         { mail: $("#email").val(), pass: $("#pass").val() },
            //         function(data){
            //         	//alert(data);
            //             //$("errorMessage").html(data);
            //             console.log(data.mail);
            //         }
            //     );

		var jqxhr = $.post( $("#login").attr("action"), { mail: $("#email").val(), pass: $("#pass").val() } , function(data) {
			window.location.replace("home.php");
		  //alert( data );
		})
		  .done(function() {
		    //alert( "second success" );
		  })
		  .fail(function() {
		    //alert( "error" );
		  })
		  .always(function() {
		    //alert( "finished" );
		  });
		 


        $("#login").submit( function(){
            return false;
        });



     });


   $("#CerrarSesion").click(function (){
		var jqxhr = $.post( "logout.php", function(data) {
			window.location.replace("home.php");
		  //alert( data );
		})
   });




});