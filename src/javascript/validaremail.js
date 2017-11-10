  $(document).ready(function(){
     // $(".form-box").hide();
      $(".form-box").fadeIn(2000);
  //   $("#frmRestablecer").submit(function(event){
  //     //event.preventDefault();
  //     $.ajax({
  //       url:'validaremail.php',
  //       type:'POST',
  //       dataType:'json',
  //       async:true,
  //       data:$("#frmRestablecer").serializeArray()
  //     }).done(function(respuesta){
  //       alert(respuesta);
  //       //$("#mensaje").html(respuesta.mensaje);
  //       //$("#email").val('');
  //     });
  //   });
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
        //if (response=="ok") 
        //{
          alert(response);
          $(".form-top").fadeOut("fast");
          $(".form-bottom").fadeOut("fast");
    
          $("h1").html("Un correo ha sido enviado. Por favor, revise su casilla.");
          $("h1").hide();
          $("h1").fadeIn(3000);          
        //}
        //else
        //{
          //alert(response);
        //}


       }
    })
 }
