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
        	$("#errorMessage").html("por favor, complete el campo");
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
			if(data=="false")
			{
				$("#errorMessage").html("Verifique los datos ingresados.");
				$("#errorMessage").css("color","red");
			}	
			else
			{
				//window.location.replace("home.php");
			}						
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



 function LoginAjax()
 {
 	if($("#email").val()==""||$("#pass").val()=="")
 	{
        $("#errorMessage").html("por favor, complete el campo");
 	}
 	else
 	{

		 $.ajax({
			 url:'includes/login.php',
			 type:"POST",
			 data:{mail:$("#email").val(),pass:$("#pass").val()},
			 datatype:"json",	
			 async:true,		
			 success:function(response)
			 {
			 	if (response!="false")
			 	{
				 	$(".nombreUsuario").html("");
				 	$(".nombreUsuario").html(response);

				 	$(".salir").html();
				 	$("#login-dp").hide();
				 	$(".iniciar").hide();
				 	$(".salir").append( "<a href='#' class='nav-link texto-color' id='CerrarSesion'><b>Cerrar Sesion</b> <span class='caret'></span></a>" );
				 	$("#CerrarSesion").on("click",function(){
							var jqxhr = $.post( "logout.php", function(data) {
									window.location.replace("home.php");
								});			 		
				 	});			 		
			 	}
			 	else
			 	{
			 		$("#errorMessage").html("Verifique los datos ingresados.");
					$("#errorMessage").css("color","red");
			 	}

			 }
		});
	}
 }