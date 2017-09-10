
$(document).ready(main);

var contador = 1;

function main(){
    $('.menu_bar').click(function(){
        // $('nav').toggle(); 

        if(contador == 1){
            $('nav').animate({
                left: '0'
            });

            // $('#logo').animate({
            //     right: '-100%'
            // });         

			var right = $('#Nosotros').offset().right;

			$("#Nosotros").css({right:right}).animate({"left":"100%"}, "slow");


            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });

            // $('#logo').animate({
            //     right: '0%'
            // });

			var left = $('#Nosotros').offset().left;

			$("#Nosotros").css({left:left}).animate({"left":"0%"}, "slow");            
       
        }

    });

};

