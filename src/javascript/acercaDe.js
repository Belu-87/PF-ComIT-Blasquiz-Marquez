
$(document).ready(main);

var contador = 1;

function main(){
    $('.menu_bar').click(function(){
        // $('nav').toggle(); 

        if(contador == 1){
            $('nav').animate({
                left: '0'
            });

            $('#logo').animate({
                right: '-100%'
            });         


            contador = 0;
        } else {
            contador = 1;
            $('nav').animate({
                left: '-100%'
            });

            $('#logo').animate({
                right: '0%'
            });
       
        }

    });

};
