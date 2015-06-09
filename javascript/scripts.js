// Mobile Nav
$(document).ready(function() {
	
	$('.hwrap .menu').addClass('hide');   

});

$(function () {
	$("#toggle").click(function () {		
		$(".hwrap .menu").slideToggle("fast");
	});
});

// Feature
$(document).ready(function() {

var top = $('.theader').height();

    $('.container').css('margin-top', top);   

});

$(window).resize(function(){
	
	$('.hwrap .menu').css('display', none);   

});

$(window).resize(function(){

var top = $('.theader').height();

    $('.container').css('margin-top', top);   

});