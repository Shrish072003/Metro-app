$(document).ready(function () {
  $(".custom__select select").change(function () {
    var lSelected = $(this).val();
    console.log(lSelected);
    window.location.href = lSelected;
  });
});
