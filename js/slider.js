function goToByScroll(id){
	$('html,body').animate({scrollTop: $(id).offset().top},'slow');
}

window.onload = function(){
	$("nav a").click(function(){
  		$("nav a").removeClass("active");
  		$(this).addClass("active");
	});
	$('a').click(function(){
		goToByScroll($(this).attr('href'));
		return false;
	});
	// Highlight hashed section
	if(window.location.hash) {
	  var hash = window.location.hash.substring(0);
	  $("nav a").removeClass("active");
	  $('nav a[href$="' + hash + '"]').addClass("active");
	  goToByScroll($('nav a[href$="' + hash + '"]').attr('href'));
	}
}