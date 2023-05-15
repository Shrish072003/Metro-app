// page 2 js

/* --------------------------- water section js ------------------------------------*/

$("#water_wrapper").click(function(){
	$('.water__tooltip').toggle();
$('.water__tooltip').toggleClass('show');
})
$(document).ready(function(){
	$(".bulb-wrap").click(function(){
	  $(this).parents().find('.bulb-section').toggleClass("blub-active animate__slideInRight");
	});
	$(".menu-ham").click(function(){
	  $('body').toggleClass("menu-active animate__slideInRight");
	});

  });