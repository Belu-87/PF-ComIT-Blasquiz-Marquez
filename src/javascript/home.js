$(function(){

	$(".parrafo").each(function(){
		$(this).hide();
	});

	$("div").mouseenter(function(){		
		$(this).find(".parrafo").show();
		$(this).find(".parrafo").animate({"margin-top":"30%"},1500);		
		});
})