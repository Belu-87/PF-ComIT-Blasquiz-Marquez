$(function(){

	$(".parrafo").each(function(){
		$(this).hide();
	});

	$("div").mouseenter(function(){		
		$(this).find(".parrafo").show();
		$(this).find(".parrafo").animate({"margin-top":"30%"},1500);		
		});



    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
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