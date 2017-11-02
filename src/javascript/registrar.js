 $(function () 
 {
	 /*$("#registrar").click(function(){
		 $.ajax({
			 url:'registrar.php',
			 type:"POST",
			 data:{funcion:'RegistrarUsuario',user:$("#usuario").val(), password:("#password").val(), confipassword:("#confipassword").val(), fechaNac:("#fechaNac").val()},
			 datatype:"json",
			 async:true,
			 success:function(response)
			 {
				alert("hshshsh"); 
			 }
			})
		});*/
 
 });
 
 
 function Validacion()
 {
	 /*validar campos antes de insertar*/
	 
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