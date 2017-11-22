  $(document).ready(function(){
      $(".form-box").fadeIn(2000);
   });



 function CambioContrasenia()
 {
     $.ajax({
       url:'includes/CambioContrasenia.php',
       type:"POST",
       data:{codigo:$("#codigo").val(),pass:$("#newpass").val(),
        repass:$("#renewpass").val()},   
       datatype:"json",
       async:true,
       success:function(response)
       {
          alert(response);
          if (response=="ok") 
          {
            $(".form-top").fadeOut("fast");
            $(".form-bottom").fadeOut("fast");
      
            $("h1").html("Contraseña actualizada.");
            $("h1").hide();
            $("h1").fadeIn(3000);          
          }
        else
        {
            $("h1").html("Error al enviar mail.");
            $("h1").hide();
            $("h1").fadeIn(3000);   
          //alert(response);
        }


       }
    })
 }
