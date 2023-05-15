



$(".hov-item").on({
    mouseenter: function () {
       $(this).toggleClass('hovItemEffect');
    },
    mouseleave: function () {
        $(this).toggleClass('hovItemEffect');
    }
});


$(".hov-item2").on({
    mouseenter: function () {
       $(this).toggleClass('hovItemEffect');
    },
    mouseleave: function () {
        $(this).toggleClass('hovItemEffect');
    }
});




$("#searchq1").click(function() {
    $(".searchbox").toggle();
    $('#sq1').select();
});


$("#button-addon1").click(function() {
    $(".searchbox").toggle();
    $('#sq1').select();
});

$("#searchq2").click(function() {
    $(".searchbox").toggle();
    $('#sq2').select();
});


$("#button-addon2").click(function() {
    $(".searchbox").toggle();
    $('#sq2').select();
});