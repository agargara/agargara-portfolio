function goToByScroll(id){
	$('html,body').animate({scrollTop: $(id).offset().top},'slow');
}

function highlightNav(id){
	$("nav a").removeClass("active");
  	$(id).addClass("active");
}

window.onload = function(){
	$("nav a").click(function(){
		goToByScroll($(this).attr('href'));
		return false;
	});
	$(".sliding-content").waypoint(function(direction) {
  		highlightNav($('nav a[href$="'+$(this).attr('id')+'"]'));
	});
};