 $(function () 
 {
 	$("#usuario").keyup(function(){
 		var color=$("#usuario").css("border-color");
 		if(   color==="rgb(255,0,0)"  )
 		{alert();
 			$("#usuario").css({"border-color":"transparent"}).delay(4000); 			
 		}

 	});
 
 });
 
 
 function Validacion()
 {
	 /*validar campos antes de insertar*/
	 if (ValidarCampoVacio())
	 {
 		  $.ajax({
		 url:'includes/registrar.php',
		 type:"POST",
		 data:{funcion:'RegistrarUsuario',user:$("#usuario").val(), pass:$("#password").val(), confipassword:$("#confipassword").val(), fechaNac:$("#fechaNac").val()},
		 datatype:"json",
		 async:true,
		 success:function(response)
		 {
			alert(response); 
		 }
		})
	 }


		
 }


 function ValidarCampoVacio()
 { 
 	if($("#usuario").val().trim()==="")
 	{
 		$("#usuario").css({"border-color":"red"}).delay(4000);
 	}

 	if($("#password").val().trim()==="")
 	{
 		$("#password").addClass("has-danger");	
 	}


 	return false;
 }