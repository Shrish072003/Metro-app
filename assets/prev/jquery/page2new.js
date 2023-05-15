$(document).ready(function(){

//	Sustainable_Menu
$(document).on('click','#Sustainable_Menu_id', function(){
// var $el = $(this);
$('body').addClass("drawer-active-Sustainable");
$('#sust-menu').show();

});

$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#sust-menu') && !$(event.target).parents().addBack().is('#Sustainable_Menu_id')) {
$('#sust-menu').hide();
  $('body').removeClass("drawer-active-Sustainable");
}
});

$(document).on('click','.back-cta', function(){
  $('#sust-menu').hide();
  $('body').removeClass("drawer-active-Sustainable");
});


//	water-menu
$(document).on('click','#water_id', function(){
  // var $el = $(this);
  $('body').addClass("drawer-active-water");
  $('#water-m').show();
  
  });
  
  $(document).on('click touch', function(event) {
  if (!$(event.target).parents().addBack().is('#water-m') && !$(event.target).parents().addBack().is('#water_id')) {
  $('#water-m').hide();
    $('body').removeClass("drawer-active-water");
  }
  });

  $(document).on('click','.back-cta', function(){
    $('#water-m').hide();
    $('body').removeClass("drawer-active-water");
  });

  //	social-menu
$(document).on('click','#social_id', function(){
  // var $el = $(this);
  $('body').addClass("drawer-active-social");
  $('#social-m').show();
  
  });
  
  $(document).on('click touch', function(event) {
  if (!$(event.target).parents().addBack().is('#social-m') && !$(event.target).parents().addBack().is('#social_id')) {
  $('#social-m').hide();
    $('body').removeClass("drawer-active-social");
  }
  });

  $(document).on('click','.back-cta', function(){
    $('#social-m').hide();
    $('body').removeClass("drawer-active-social");
  });


// $(window).click(function(e) {
// 	var id = e.target.id;
// 	if(id =='Sustainable_Menu_id'){} else{
//     if($('body').hasClass('drawer-active')){
//     	$('#sust-menu').hide();
//     	$('body').removeClass("drawer-active");
//     }
//   }
// }); 

//plastic_waste

$(document).on('click','#plastic_waste_id', function(){
// var $el = $(this);
$('body').addClass("drawer-active-plastic-pkg");
$('#plastic-pkg').show();

});

$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#plastic-pkg') && !$(event.target).parents().addBack().is('#plastic_waste_id')) {
$('#plastic-pkg').hide();
  $('body').removeClass("drawer-active-plastic-pkg");
}
});
$(document).on('click','.back-cta', function(){
	$('#plastic-pkg').hide();
  $('body').removeClass("drawer-active-plastic-pkg");
});

// waste

$(document).on('click','#waste_id', function(){
	$('#waste').show();
$('body').addClass("drawer-active-waste");
});

$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#waste') && !$(event.target).parents().addBack().is('#waste_id')) {
$('#waste').hide();
  $('body').removeClass("drawer-active-waste");
}
});
$(document).on('click','.back-cta', function(){
	$('#waste').hide();
  $('body').removeClass("drawer-active-waste");
});

//energy 
$(document).on('click','#energy_id', function(){
	$('#energy').show();
$('body').addClass("drawer-active-energy");
});

$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#energy') && !$(event.target).parents().addBack().is('#energy_id')) {
$('#energy').hide();
  $('body').removeClass("drawer-active-energy");
}
});
$(document).on('click','.back-cta', function(){
	$('#energy').hide();
  $('body').removeClass("drawer-active-energy");
});

// food waste 
$(document).on('click','#food_waste_id', function(){
	$('#food-waste').show();
$('body').addClass("drawer-active-food-waste");
});
$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#food-waste') && !$(event.target).parents().addBack().is('#food_waste_id')) {
$('#food-waste').hide();
  $('body').removeClass("drawer-active-food-waste");
}
});
$(document).on('click','.back-cta', function(){
	 $('#food-waste').hide();
  $('body').removeClass("drawer-active-food-waste");
});

//safe food

$(document).on('click','#safe_food_id', function(){
	$('#safe-food').show();
$('body').addClass("drawer-active-safe-food");
});
$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#safe-food') && !$(event.target).parents().addBack().is('#safe_food_id')) {
$('#safe-food').hide();
  $('body').removeClass("drawer-active-safe-food");
}
});
$(document).on('click','.back-cta', function(){
	 $('#safe-food').hide();
  $('body').removeClass("drawer-active-safe-food");
});

//car-parking 

$(document).on('click','#car_parking', function(){
	$('#responsible').show();
$('body').addClass("drawer-active-car_parking");
});
$(document).on('click touch', function(event) {
if (!$(event.target).parents().addBack().is('#responsible') && !$(event.target).parents().addBack().is('#car_parking')) {
$('#responsible').hide();
  $('body').removeClass("drawer-active-car_parking");
}
});

$(document).on('click','.back-cta', function(){
	$('#responsible').hide();
$('body').removeClass("drawer-active-car_parking");
});

});

