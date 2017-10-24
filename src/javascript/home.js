var contador = 1;

$('.nav-responsive').animate({left: '-100%'});

//var left = $('.parrafo').offset().left;

//$(".parrafo").css({left:left}).animate({"left":"0%"}, 0.2);        

$(function(){

    /*$("header").css({position:"absolute"});*/

    /*$("#menuPrincipal").css({"grid-column":"10/10"});*/

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


})