 $(function () 
 {
 	$("#mail").keyup(function(){
 		if($("#mail").hasClass("error"))
 		{
 			$("#mail").removeClass("error");
 		}

 	}); 	

	//$(".form-box").hide();
// 	$(".form-box").fadeIn(2000);

 
 });
 
 
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


 
 function HayCamposVacios()
 {
 
	if($("#mail").val().trim()==="")
 	{
 		$("#mail").addClass("error");
 		hayError=true;
 	} 	

  	return hayError;
 }