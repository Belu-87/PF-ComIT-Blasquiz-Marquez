  $(document).ready(function(){
      $(".form-box").hide();
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
          alert(response); 
       }
    })
 }
