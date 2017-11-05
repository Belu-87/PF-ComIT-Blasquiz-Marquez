 $(function () 
 {
 	$("#usuario").keyup(function(){
 		if($("#usuario").hasClass("error"))
 		{
 			$("#usuario").removeClass("error");
 		}

 	});

 	$("#mail").keyup(function(){
 		if($("#mail").hasClass("error"))
 		{
 			$("#mail").removeClass("error");
 		}

 	}); 	

 	$("#password").keyup(function(){
 		if($("#password").hasClass("error"))
 		{
 			$("#password").removeClass("error");
 		}

 	}); 	

 	$("#confipassword").keyup(function(){
 		if($("#confipassword").hasClass("error"))
 		{
 			$("#confipassword").removeClass("error");
 		}

 	}); 	

 	$("#fechaNac").keyup(function(){
 		if($("#fechaNac").hasClass("error"))
 		{
 			$("#fechaNac").removeClass("error");
 		}

 	}); 	
 
 });
 
 
 function Validacion()
 {
	 /*validar campos antes de insertar*/
	 if (EstaOK())
	 {
 		 $.ajax({
			 url:'includes/registrar.php',
			 type:"POST",
			 data:{funcion:'RegistrarUsuario',user:$("#usuario").val(),mail:$("#mail").val(), pass:$("#password").val(), confipassword:$("#confipassword").val(), fechaNac:$("#fechaNac").val()},
			 datatype:"json",
			 async:true,
			 success:function(response)
			 {
				alert(response); 
			 }
		})
	 }
 }

 function EstaOK()
 {
 	return ( !HayCamposVacios() & MailValido() & ContraseniasIguales() & FechaValida() );
 }

 function MailValido()
 {
 	if($("#mail").val().match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/))
 	{
  		$("#mail").removeClass("error");		
 		return true;
 	}
 	else
 	{
 		$("#mail").addClass("error");
 		return false;
 	}
 }


 function FechaValida()
 {
 	//yyyy-mm-dd
 	if($("#fechaNac").val().match(/^\d{4}-\d{2}-\d{2}$/))
 	{
 		$("#fechaNac").removeClass("error"); 		
 		return true;
 	}
 	else
 	{
 		$("#fechaNac").addClass("error");
 		return false;
 	}
 }


function ContraseniasIguales()
 {
 	if($("#password").val()==$("#confipassword").val())
 	{
 		$("#password").removeClass("error");
 		return true;
 	}
 	else
 	{
 		$("#password").addClass("error");
 		$("#confipassword").addClass("error");
 		return false;
 	}
 }



 function HayCamposVacios()
 {
 	var hayError=false; 
 	if($("#usuario").val().trim()==="")
 	{
 		$("#usuario").addClass("error");
 		hayError=true;
 	}

	if($("#mail").val().trim()==="")
 	{
 		$("#mail").addClass("error");
 		hayError=true;
 	} 	

 	if($("#password").val().trim()==="")
 	{
 		$("#password").addClass("error");	
 		hayError=true;
 	}

 	if($("#confipassword").val().trim()==="")
 	{
 		$("#confipassword").addClass("error");
 		hayError=true;	
 	}

 	if($("#fechaNac").val().trim()==="")
 	{
 		$("#fechaNac").addClass("error");	
 		hayError=true;
 	} 	


 	return hayError;
 }