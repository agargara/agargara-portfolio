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
}

 $(function(){
   var path = location.pathname.substring(1);
   if ( path )
     $('#sidebar_content a[href$="' + path + '"]').attr('class', 'selected');
 });