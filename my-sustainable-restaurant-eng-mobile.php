<!doctype html>
<html lang="en">

<head>
    <?php include "includes/page-header.php"; ?>
    <!--META-->
    <meta name="language" content="EN">
    <meta name="description" content="Visit the Metro My Sustainable Restaurant digital immersive experience to explore the future of sustainability in the HoReCa industry.">
    <meta name="keywords" content="metro,sustainability,restaurant">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="imagetoolbar" content="no">
    <meta http-equiv="x-dns-prefetch-control" content="off">
    <!--OPEN GRAPH AND OTHER-->
    <meta name="og:title" content="METRO">
    <meta name="og:type" content="blog">
    <meta name="og:url" content="">
    <!--current page url-->
    <meta name="og:site_name" content="METRO">
    <meta name="og:description" content="Visit the Metro My Sustainable Restaurant digital immersive experience to explore the future of sustainability in the HoReCa industry.">
    <meta name="og:email" content="">
    <meta name="og:phone_number" content="">
    <meta name="apple-mobile-web-app-title" content="METRO">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#003b7e">
    <meta name="mssmarttagspreventparsing" content="true">
    <meta name="IE=edge,chrome=1" content="X-UA-Compatible">
    <meta name="msapplication-starturl" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="assets/prev/css/page2_style.css">
  <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
  <script src="assets/prev/jquery/custom.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  <link rel="stylesheet" href="assets/css/navigation.css">'
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/css/normalize.min.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon-180x180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon-32x32.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="assets\css\responsive.css">
  <link rel="stylesheet" href="assets\css\responsive\explore-plastic-waste.css">
    <!--current page url-->
    <meta name="msapplication-tooltip" content="METRO">
    <meta http-equiv="cleartype" content="on">
    <meta name="canonical" content="">
    <!--current page url-->
    <style>
        @media print {
           
        }

        .gtnb1>img {
            width: 21rem !important;
            margin-bottom: 1rem !important;
            margin-top: 1rem !important;
        }

       

    


.navbar-collapse {
    flex-basis: auto !important;
    align-items: center;
}
.section5{
    display: none !important;
}


.tooltip_wrapper {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
    }

    .tooltip-open {
        display: block;
    }
    .sec-banner.b6 {
    top: 207px !important;
    left: 25% !important;
}.sec-banner {
    height: 0px !important;
    width: 90%;
}
.sec-banner.b6:hover .tooltip_wrapper {
    margin-top: 50%;
    margin-left: 28% !important;
}
.custom__select:before{
            background:#ffe500;
        }
        nav.navbar {
      height: 60px;
      top: 0;
    }
        .search-btn{    margin-right: -16px;
     }
    </style>
    
</head>

<body class="popup-exists page-animation1">
<?php include "includes/header-eng.php"; ?>
    <?php include "includes/loader.php"; ?>


























    <section style="position: relative;">
    
    <div class="sec-banner b6" title="">
        <div class="blink__text arrow" onclick="toggleTooltip()">Click Here</div>
        <div class="tooltip_wrapper" id="tooltipWrapper">
            <div class="">
                <p class="tooltip-content">
                    <span>Just like a sustainable ecosystem or a smart city, a restaurant has a million moving parts. Our purpose is to help you run a profitable business while having a positive impact on your community and environment. Since one in three meals is eaten outside of home, the impact of our work could be huge. Enter the METRO My Sustainable Restaurant experience for a step-by-step guide on boosting the sustainability quotient of key restaurant elements.</span>
                    <a target="_parent" href="the-msr-chapter-guide-eng.php" class="click-cta">Enter MSR</a>
                    <a href="javascript:void(0)" class="click-cta popup__close" onclick="closeTooltip()">Close</a>
                </p>
            </div>
        </div>
    </div>
    <img src="assets\images\mapsm.jpg" />
</section>

        <?php include "includes/footer-eng.php"; ?>
    </div>






    <?php include "includes/page-footer.php"; ?>
    
    <script>
        var eurl = "explore-to-plastic-waste-eng.php"
        var gurl = "explore-to-plastic-waste-deu.php"


        //btn-test click test script

        $(document).ready(function() {
            $('#select').change(function() {
                location.href = $(this).val();
            });
        });


        $(document).ready(function() {
            $('#myBtn_cust').click(function() {
                //get collapse content selector
                var collapse_content_selector = $(this).attr('href');

                //make the collapse content to be shown or hide
                var toggle_switch = $(this);
                $(collapse_content_selector).toggle(function() {
                    if ($(this).css('display') == 'none') {
                        //change the button label to be 'Show'
                        toggle_switch.html('Read More');
                    } else {
                        //change the button label to be 'Hide'
                        toggle_switch.html('Read Less');
                    }
                });
            });

        });

        //pageSlider swiper
        function openPopUp(Id) {
            //alert(Id);
            $("#pop" + Id).css("display", "block");
        }

        function closePopUp(Id) {
            //alert(Id);
            $("#pop" + Id).css("display", "none");
        }
        var swiper = new Swiper(".pageSwiper1", {
            grabCursor: true,
            centeredSlides: true,
            initialSlide: 1,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 30,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            navigation: {
                nextEl: ".swiper-button-next.pageSwiper1NextBtn",
                prevEl: ".swiper-button-prev.pageSwiper1PrevBtn",
            },
            pagination: {
                el: ".swiper-pagination.pageSwiper1Pagination",
            },
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".nextStepCta a").click(function() {
                $(".nav-tabs .nav-item").removeClass("active");
                $(this).addClass("active");
            });
        });
        //page params
        $(document).ready(function() {
            var cur_page_name = "Plastic Waste";
            var cur_nav_link_id = "3";
            var eng_page_path = "my-sustainable-restaurant-eng-mobile.php";
            var deu_page_path = "my-sustainable-restaurant-deu-mobile.php";
            //manipulation
            pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
            var menuIdVal = "3";
            menumanipulation(menuIdVal, "e");
        });
        var fDText = "METRO offers a wide variety of waste-less products, such as eco-friendly disposables and takeaway containers, products with less packaging e.g. reformulated detergents, returnable bottle schemes, water filters, reusable carafes for water, products that don\´t contain PVC or are alternatives for EPS.";
        $("#footDynamicText").text(fDText);

         //like share stats
        $(document).ready(function(){
            $.ajax({
                url : 'isliked.php?q=PLASTIC WASTE',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        $("#likeBtn").addClass("liked");
                    }
                },
                error : function () {
                    console.log (error);
                }
            });
            return false;
         });

        $("#likeBtn").click(function(){
            $.ajax({
                url : 'isliked.php?q=PLASTIC WASTE',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        //dislike
                        $.ajax({
                            url : 'dislike.php?q=PLASTIC WASTE',
                            type : 'POST',
                            success : function (result) {
                                var retVal=parseInt(result);
                                if(retVal="1"){
                                    $("#likeBtn").removeClass("liked");
                                }else{
                                    console.log("DISLIKE ERROR")
                                }
                            },
                            error : function () {
                                console.log ("error");
                            }
                        });
                    }else{
                        $.ajax({
                            url : 'like.php?q=PLASTIC WASTE',
                            type : 'POST',
                            success : function (result) {
                                var retVal=parseInt(result);
                                if(retVal="1"){
                                    $("#likeBtn").addClass("liked");
                                }else{
                                    console.log("LIKE ERROR")
                                }
                            },
                            error : function () {
                                console.log ("error");
                            }
                        });
                    }
                },
                error : function () {
                    console.log ("error");
                }
            });
            return false;
        });
    </script>
    <script>
    function toggleTooltip() {
        var tooltipWrapper = document.getElementById("tooltipWrapper");
        tooltipWrapper.classList.toggle("tooltip-open");
    }

    function closeTooltip() {
        var tooltipWrapper = document.getElementById("tooltipWrapper");
        tooltipWrapper.classList.remove("tooltip-open");
    }
</script>
<script>
    // Check if the user is on a desktop device
    function isDesktopDevice() {
        return !(/Mobi/i.test(navigator.userAgent));
    }

    // Redirect to another page if on a desktop device
    function redirectToDesktopPage() {
        if (isDesktopDevice()) {
            window.location.href = "my-sustainable-restaurant-eng.php";
        }
    }

    // Call the function when the page finishes loading
    window.onload = redirectToDesktopPage;
</script>

</body>

</html>