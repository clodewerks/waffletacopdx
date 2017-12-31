
	
$("document").ready(function(){

	$(".scroll").click(function(){
		 $('html, body').animate({
            scrollTop: $($(this).attr("rel")).offset().top - 60
          }, 600);
	});
$("#wrapper").css("padding-top",(window.innerHeight - $("#header").height() - 20)+"px")
});
