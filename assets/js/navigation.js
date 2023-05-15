$(document).ready(function () {
  $(".custom__select select").change(function () {
    var lSelected = $(this).val();
    console.log(lSelected);
    window.location.href = lSelected;
  });
});

function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}

//New menu Js start*/

$(".burger, .overlay2").click(function () {
  $(".burger").toggleClass("clicked");
  $(".overlay2").toggleClass("show");
  $("nav2").toggleClass("show");
  $("body").toggleClass("overflow");
});

$(document).ready(function () {
  $("#nav-icon4").click(function () {
    $(this).toggleClass("open");
  });
});
