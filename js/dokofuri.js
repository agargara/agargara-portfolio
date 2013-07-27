window.onload = function(){
	// Example data for demo
	var itemsForSale = TAFFY([
		{id:1,name:"本"},
		{id:2,name:"服"},
		{id:3,name:"ぬいぐるみ"}]);

	var itemsWanted = TAFFY([
		{id:1,name:"maid"},
		{id:2,name:"futon"},
		{id:3,name:"めいどふとん"}]);

	$('nav a').click(function(){
		highlightNav(this);
		return false;
	});

	$('nav a[href$="#buy"]').click(function(){
		displayItems(itemsForSale);
		return false;
	});
	$('nav a[href$="#sell"]').click(function(){
		displayItems(itemsWanted);
		return false;
	});


};

function displayItems(itemList){
	itemsHTML = '<ul>';
	itemList().each(function (item,itemList) {
		itemsHTML+='<li>'+item["name"]+'</li>';
	});
	itemsHTML += '</ul>';
	$('#main').html(itemsHTML);
}

function highlightNav(id){
	$("nav a").removeClass("active");
  	$(id).addClass("active");
}

