  $(document).ready(function(){
      $(".form-box").fadeIn(2000);
   });



 function ValidarMail()
 {
     $.ajax({
       url:'includes/validaremail.php',
       type:"POST",
       data:{emailRecup:$("#emailRecup").val()},   
       datatype:"json",
       async:true,
       success:function(response)
       {
          if (response=="ok") 
          {
            $(".form-top").fadeOut("fast");
            $(".form-bottom").fadeOut("fast");
      
            $("h1").html("Un correo ha sido enviado. Por favor, revise su casilla.");
            $("h1").hide();
            $("h1").fadeIn(3000);          
          }
        else
        {
            $(".form-top").fadeOut("fast");
            $(".form-bottom").fadeOut("fast");

            $("h1").html("Error al enviar mail.");
            $("h1").hide();
            $("h1").fadeIn(3000);           
        }


       }
    })
 }
