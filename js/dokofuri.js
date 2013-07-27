window.onload = function(){
	// Example data for demo
	var itemsForSale = TAFFY([
		{id:1,name:"本",imgURL:"http://pcss.sd8.bc.ca/wp-content/uploads/2013/01/books-clipart.jpg"},
		{id:2,name:"服",imgURL:"http://pcss.sd8.bc.ca/wp-content/uploads/2013/01/books-clipart.jpg"},
		{id:3,name:"ぬいぐるみ",imgURL:"http://pcss.sd8.bc.ca/wp-content/uploads/2013/01/books-clipart.jpg"},
		{id:4,name:"かわいい箱",imgURL:"http://pcss.sd8.bc.ca/wp-content/uploads/2013/01/books-clipart.jpg"},
		{id:5,name:"みにくい箱",imgURL:"http://pcss.sd8.bc.ca/wp-content/uploads/2013/01/books-clipart.jpg"}
		]);

	var itemsWanted = TAFFY([
		{id:1,name:"maid"},
		{id:2,name:"futon"},
		{id:3,name:"めいどふとん"}]);

	insert

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
	itemsHTML = '<ul class="items">';
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

