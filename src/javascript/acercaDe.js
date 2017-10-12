
$(document).ready(main);

var contador = 1;

$('.nav-responsive').animate({left: '-100%'});

var left = $('#Nosotros').offset().left;

$("#Nosotros").css({left:left}).animate({"left":"0%"}, 0.2);            


function main(){
    $('.menu_bar').click(function(){
        // $('nav').toggle(); 

        if(contador == 1){
            $('.nav-responsive').animate({
                left: '0'
            });

			var right = $('#Nosotros').offset().right;

			$("#Nosotros").css({right:right}).animate({"left":"100%"}, "slow");


            contador = 0;
        } else {
            contador = 1;
            $('.nav-responsive').animate({
                left: '-100%'
            });


			var left = $('#Nosotros').offset().left;

			$("#Nosotros").css({left:left}).animate({"left":"0%"}, "slow");            
       
        }

    });

};

