$(document).ready(function () {
  //scheme and certifications
  $("#scheme1").click(function () {
    // set data
    $("#data-sc1").removeClass("nodisplay").addClass("displaythis");
    $("#data-sc2").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc3").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc4").removeClass("displaythis").addClass("nodisplay");
    //highlight link
    $("#scheme1").addClass("sc-link-active");
    $("#scheme2").removeClass("sc-link-active");
    $("#scheme3").removeClass("sc-link-active");
    $("#scheme4").removeClass("sc-link-active");
    //highlight yellow arrow
    $("#scheme1 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-hide")
      .addClass("arrow-show");
    $("#scheme2 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme3 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme4 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    return false;
  });
  $("#scheme2").click(function () {
    // set data
    $("#data-sc1").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc2").removeClass("nodisplay").addClass("displaythis");
    $("#data-sc3").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc4").removeClass("displaythis").addClass("nodisplay");
    //highlight link
    $("#scheme1").removeClass("sc-link-active");
    $("#scheme2").addClass("sc-link-active");
    $("#scheme3").removeClass("sc-link-active");
    $("#scheme4").removeClass("sc-link-active");
    //highlight yellow arrow
    $("#scheme1 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme2 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-hide")
      .addClass("arrow-show");
    $("#scheme3 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme4 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    return false;
  });
  $("#scheme3").click(function () {
    // set data
    $("#data-sc1").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc2").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc3").removeClass("nodisplay").addClass("displaythis");
    $("#data-sc4").removeClass("displaythis").addClass("nodisplay");
    //highlight link
    $("#scheme1").removeClass("sc-link-active");
    $("#scheme2").removeClass("sc-link-active");
    $("#scheme3").addClass("sc-link-active");
    $("#scheme4").removeClass("sc-link-active");
    //highlight yellow arrow
    $("#scheme1 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme2 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme3 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-hide")
      .addClass("arrow-show");
    $("#scheme4 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    return false;
  });

  $("#scheme4").click(function () {
    // set data
    $("#data-sc1").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc2").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc3").removeClass("displaythis").addClass("nodisplay");
    $("#data-sc4").removeClass("nodisplay").addClass("displaythis");
    //highlight link
    $("#scheme1").removeClass("sc-link-active");
    $("#scheme2").removeClass("sc-link-active");
    $("#scheme3").removeClass("sc-link-active");
    $("#scheme4").addClass("sc-link-active");
    //highlight yellow arrow
    $("#scheme1 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme2 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme3 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-show")
      .addClass("arrow-hide");
    $("#scheme4 > div.scheme-box-row > div.col-md-2 > img")
      .removeClass("arrow-hide")
      .addClass("arrow-show");
    return false;
  });

  //fairtrade
  $("#sc11").click(function () {
    $("#sc11m").modal("show");
    return false;
  });

  $("#sc11mClose").click(function () {
    $("#sc11m").modal("hide");
    return false;
  });
  //gepa
  $("#sc12").click(function () {
    $("#sc12m").modal("show");
    return false;
  });

  $("#sc12mClose").click(function () {
    $("#sc12m").modal("hide");
    return false;
  });
  //geographival indications
  $("#sc21").click(function () {
    $("#sc21m").modal("show");
    return false;
  });

  $("#sc21mClose").click(function () {
    $("#sc21m").modal("hide");
    return false;
  });
  //EU SCHEMES
  $("#sc22").click(function () {
    $("#sc22m").modal("show");
    return false;
  });

  $("#sc22mClose").click(function () {
    $("#sc22m").modal("hide");
    return false;
  });
  //sc31
  $("#sc31").click(function () {
    $("#sc31m").modal("show");
    return false;
  });

  $("#sc31mClose").click(function () {
    $("#sc31m").modal("hide");
    return false;
  });
  //sc32
  $("#sc32").click(function () {
    $("#sc32m").modal("show");
    return false;
  });

  $("#sc32mClose").click(function () {
    $("#sc32m").modal("hide");
    return false;
  });
  //sc33
  $("#sc33").click(function () {
    $("#sc33m").modal("show");
    return false;
  });

  $("#sc33mClose").click(function () {
    $("#sc33m").modal("hide");
    return false;
  });
  //sc34
  $("#sc34").click(function () {
    $("#sc34m").modal("show");
    return false;
  });

  $("#sc34mClose").click(function () {
    $("#sc34m").modal("hide");
    return false;
  });
  //sc35
  $("#sc35").click(function () {
    $("#sc35m").modal("show");
    return false;
  });

  $("#sc35mClose").click(function () {
    $("#sc35m").modal("hide");
    return false;
  });
  //sc36
  $("#sc36").click(function () {
    $("#sc36m").modal("show");
    return false;
  });

  $("#sc36mClose").click(function () {
    $("#sc36m").modal("hide");
    return false;
  });
  //sc37
  $("#sc37").click(function () {
    $("#sc37m").modal("show");
    return false;
  });

  $("#sc37mClose").click(function () {
    $("#sc37m").modal("hide");
    return false;
  });
  //sc38
  $("#sc38").click(function () {
    $("#sc38m").modal("show");
    return false;
  });

  $("#sc38mClose").click(function () {
    $("#sc38m").modal("hide");
    return false;
  });
  //sc39
  $("#sc39").click(function () {
    $("#sc39m").modal("show");
    return false;
  });

  $("#sc39mClose").click(function () {
    $("#sc39m").modal("hide");
    return false;
  });
  //scheme41
  $("#sc41").click(function () {
    $("#sc41m").modal("show");
    return false;
  });

  $("#sc41mClose").click(function () {
    $("#sc41m").modal("hide");
    return false;
  });
  //scheme42
  $("#sc42").click(function () {
    $("#sc41m").modal("show");
    return false;
  });

  $("#sc42mClose").click(function () {
    $("#sc42m").modal("hide");
    return false;
  });

  ////////////////comprehensive products///////////////////////

  var cproducts = [
    "#cp01",
    "#cp02",
    "#cp03",
    "#cp04",
    "#cp05",
    "#cp06",
    "#cp07",
    "#cp08",
    "#cp09",
    "#cp10",
    "#cp11",
    "#cp12",
    "#cp13",
  ];

  $("#cp01").click(function () {
    hightlightProduct("#cp01");
    return false;
  });
  $("#cp02").click(function () {
    hightlightProduct("#cp02");
    return false;
  });
  $("#cp03").click(function () {
    hightlightProduct("#cp03");
    return false;
  });
  $("#cp04").click(function () {
    hightlightProduct("#cp04");
    return false;
  });
  $("#cp05").click(function () {
    hightlightProduct("#cp05");
    return false;
  });
  $("#cp06").click(function () {
    hightlightProduct("#cp06");
    return false;
  });
  $("#cp07").click(function () {
    hightlightProduct("#cp07");
    return false;
  });
  $("#cp08").click(function () {
    hightlightProduct("#cp08");
    return false;
  });
  $("#cp09").click(function () {
    hightlightProduct("#cp09");
    return false;
  });
  $("#cp10").click(function () {
    hightlightProduct("#cp10");
    return false;
  });
  $("#cp11").click(function () {
    hightlightProduct("#cp11");
    return false;
  });
  $("#cp12").click(function () {
    hightlightProduct("#cp12");
    return false;
  });
  $("#cp13").click(function () {
    hightlightProduct("#cp13");
    return false;
  });

  function hightlightProduct(pid) {
    $(pid).addClass("active");
    $(pid + " > div.product-icon-1").addClass("active");

    if (pid == "#cp02") {
      $(pid + " > div.product-icon-1 > img").css("max-width", "50px");
      $(pid + " > div.product-icon-1 > img").css("width", "50px");
      $(pid + " > div.product-icon-1 > img").css("margin-top", "5px");
    } else {
      $(pid + " > div.product-icon-1 > img").addClass("active");
    }

    $(pid + " > div.product-01").addClass("product-active");
    $(pid + " > div.product-01").removeClass("product-01");
    $(pid + " > div.product-active").css("margin-top", "1.5rem");

    $(pid + " > div.product-active > span.arrow0 > img").attr(
      "src",
      "images/resp_sourcing/long-arrow.svg"
    );

    $(pid + " > div.product-highlighter > img").attr(
      "src",
      "images/resp_sourcing/highlighter-active.svg"
    );

    ShowContent(pid);

    return false;
  }

  function ShowContent(pid) {
    alert("Show:" + pid);
  }
});
