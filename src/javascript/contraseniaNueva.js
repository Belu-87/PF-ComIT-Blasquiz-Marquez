  $(document).ready(function(){
      $(".form-box").fadeIn(2000);

      $("#newpass").keyup(function(){
        EstaTodoOK();
      });

      $("#renewpass").keyup(function(){
        EstaTodoOK();
      });


});



 function CambioContrasenia()
 {
    if( EstaTodoOK() )
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
            console.log(response);
            if (response=="ok") 
            {
              $(".form-top").fadeOut("fast");
              $(".form-bottom").fadeOut("fast");
        
              $("h1").html("Contraseña actualizada.");
              $("h1").hide();
              $("h1").fadeIn(3000);          
            }
          else if(response=="digito verificador")
          {
              $("#codigo").addClass("error");
          }
          else
          {
              $(".form-top").fadeOut("fast");
              $(".form-bottom").fadeOut("fast");

              $("h1").html("Error al actualizar la contraseña.");
              $("h1").hide();
              $("h1").fadeIn(3000);               
          }


         }
      })
    }
    else
    {

    }

 }


function EstaTodoOK(){

    var pass1=$("#newpass").val();
    var pass2=$("#renewpass").val();

    if( (pass1==pass2) && (pass1.trim()!="" && pass2.trim()!="") )
    {
      $("#newpass").removeClass("error");
      $("#renewpass").removeClass("error");
      return true;
    }
    else
    {
      $("#newpass").addClass("error");
      $("#renewpass").addClass("error");
      return false;
    }


}