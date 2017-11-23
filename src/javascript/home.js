var contador = 1;

$('.nav-responsive').animate({left: '-100%'});

//var left = $('.parrafo').offset().left;

//$(".parrafo").css({left:left}).animate({"left":"0%"}, 0.2);        

$(function(){

    $(".navbar").css({top:"5em",height:"0px"});

    $("header").css({height:"0px"});
    
    /*$(".navbar").css({"z-index":"100"});*/

	$(".parrafo").each(function(){
		$(this).hide();
	});

	$("div").hover(function(){		
		$(this).find(".parrafo").show();

        if(window.screen.width<600)
        {      
            if(contador!=0)
            {
               $(this).find(".parrafo").fadeIn(1500);
               $(this).find(".parrafo").animate({"margin-top":"80%","opacity":"1"},1500);                        
            }          
        }
        else
        {
            $(this).find(".parrafo").fadeIn(1500);
            $(this).find(".parrafo").animate({"margin-top":"33%","opacity":"1"},1500);                
        }	
    });



    $(window).scroll(function () {
        if ($(this).scrollTop() >100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1500);
        return false;
    });



    /*evento para el menu responsive*/
    /*$('.menu_bar').click(function(){        
        if(contador == 1){
            $('.parrafo').fadeOut();

            $('.nav-responsive').animate({
                left: '0'
            });

            contador = 0;
        } else {
            contador = 1;
            
            $('.parrafo').fadeIn();

            $('.nav-responsive').animate({
                left: '-100%'
            });
       
        }

    });*/    

//function novedades(){    
$("#btn-novedades").click(function(){

        if (! ($("#emailNov").val().match(/^[a-zA-Z0-9\._-]+@[a-zA-Z0-9-]{2,}[.][a-zA-Z]{2,4}$/)) )
        {
            $("#emailNov").addClass("error");    
            $("header").append("<div id='myModalError' class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'><b>Ingrese un email valido!</b></div>");
            $('.modal-content').css("color","red");
            $('#myModalError').modal('show');    
        }

        else
        {   
            $("#emailNov").removeClass("error");    
            $.ajax({
                 url:'includes/homeNovedades.php',
                 type:"POST",
                 data:{funcion:'novedadesMail', email:$("#emailNov").val()},
                 datatype:"json",
                 async:true,
                 success:function(response)
                 {
                    if(response =="ok")
                     {  
                        $("header").append("<div id='myModalExito' class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'><b>¡Gracias por dejar su email!</b><br>redireccionando a inicio...</div></div></div>");
                        $('.modal-content').css("color","#FF80C0");
                        $('#myModalExito').modal('show'); 
                        $("#emailNov").val("");   
                        setTimeout(function(){
                            $("html, body").animate({
                            scrollTop: 0
                            }, 1500);
                            $('#myModalExito').modal('hide'); 
                            return false;
                        },2000);                
                        console.log(response);  

                        // $("header").append("<div id='myModal' class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'>Por favor, complete el campo del email</div></div></div>");
                        // $('#myModal').modal('show');
                    }
                    else
                    {

                        $("header").append("<div id='myModal' class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'>Por favor, complete el campo del email</div></div></div>");
                        $('#myModal').modal('show');


                        // $("header").append("<div id='myModal' class='modal fade bd-example-modal-sm' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'><div class='modal-dialog modal-sm'><div class='modal-content'><b>¡Gracias por dejar su email!</b><br>redireccionando a inicio...</div></div></div>");
                        // $('.modal-content').css("color","#FF80C0");
                        // $('#myModal').modal('show');    
                        // //setTimeout(function(){
                        //     //window.location.replace("home.php");
                        // //},5000);                
                        // console.log(response);                  
                    }

                 }
            });

        }



    })



})