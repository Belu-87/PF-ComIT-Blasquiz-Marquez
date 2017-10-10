$(function(){

    $("header").css({position:"absolute"});

    $("#menuPrincipal").css({"grid-column":"10/10"});

	$(".parrafo").each(function(){
		$(this).hide();
	});

	$("div").hover(function(){		
		$(this).find(".parrafo").show();

        if(window.screen.width<600) {
            $(this).find(".parrafo").animate({"margin-top":"80%"},1500);    
        }
        else
        {
            $(this).find(".parrafo").animate({"margin-top":"30%"},1500);                
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


})