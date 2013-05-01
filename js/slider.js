function goToByScroll(id){
	$('html,body').animate({scrollTop: $(id).offset().top},'slow');
}

window.onload = function(){
	$('a').click(function(){
		goToByScroll($(this).attr('href'));
		return false;
	});
}

/*
$(document).ready(function(){
	$('a').click(function(){
		goToByScroll($(this).attr('href'));
		return false;
	});
}); */