<!doctype html>
<html lang="en">

<head>
    <?php include "includes/page-header.php"; ?>
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
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
  <link rel="stylesheet" href="likebtn.css">

  <link rel="stylesheet" href="assets/css/navigation.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/normalize.min.css" rel="stylesheet">
  <link href="assets/css/style1.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">

  <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon-180x180.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icon-32x32.png">
  <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
  <link rel="stylesheet" href="assets\css\responsive.css">
  <link rel="stylesheet" href="assets\css\responsive\main-home.css">
    <!--current page url-->
    <meta name="msapplication-tooltip" content="METRO">
    <meta http-equiv="cleartype" content="on">
    <meta name="canonical" content="">
    <!--current page url-->
    <style>
    .custom__select:before{
            background:#ffe500;
        }
        nav.navbar {
      height: 60px;
      top: 0;
    }
        .search-btn{    margin-right: -16px;
     }
     @media screen and (max-width: 600px) {
     .footer-wrap {
    /* margin-top: 330% !important; */
}
     }
     @media screen and (max-width: 400px) {
   .video-contain{
     margin-top:110px !important;  
    }
    .footer-wrap {
    margin-top: 470px;
}
}
    </style>
</head>

<body class="popup-exists page-animation1">
    <?php include "includes/header-deu.php"; ?>

    <section class="video-contain">
    <div class="wrapper">
        <div class="overlay"><span class="close_btn">
                <button class="article__close"></button>
            </span></div>
        <div class="artcle-top-wrap">
            <div class="artcle-top-header">
                <header class="article__header">
                    <h1 class="article__title--strong"><span>Willkommen bei</span> METRO <br>Mein Nachhaltiges Restaurant</h1>
                </header>
                <img src="assets/images/overlay-img.jpg" class="main-img-metro">
            </div>
            <article class="article--home">

                <div class="article__copy">

                    <section class="article__columns">
                        <div class="article__subheading">
                            Der digitale Leitfaden, der Sie durch die wichtigsten Nachhaltigkeitsthemen führt.
                        </div>
                        <div class="article__content">
                            <p class="article__user-story">Wir bedienen Milliarden Menschen auf der ganzen Welt und unser Einfluss ist groß. Gleichzeitig wächst damit unsere Verantwortung, die richtigen Entscheidungen zu treffen. Mein Nachhaltiges Restaurant ist unser Beitrag dazu, Sie als Restaurantbesitzerin oder -besitzer zu unterstützen, fokussierter, vielfältiger, verantwortungsvoller und damit erfolgreicher zu werden.</p>
                            <a href="my-sustainable-restaurant-deu.php" class="btn-changing click-cta1-rev">Mein Nachhaltiges Restaurant <span class="homeArrow"><i class="bi bi-arrow-right-circle-fill"></i></span> </a>
                        </div>
                    </section>
                </div>
            </article>
        </div>
        <div class="right-bottom-section">
            <div class="bulb-section animate__animated">
                <div class="blink__text1 arrow1">Klicken Sie hier für interessante Fakten</div>
                <div class="bulb-wrap" onclick="mynewFunction()" id="selectFact"><img src="assets/images/bulb.svg" /></div>
                <div class="bulb-text">
                    <!-- <p>Für 1 Kilogramm Rindfleisch aus industrieller Landwirtschaft werden 15.500 Liter Wasser benötigt – das entspricht der Menge von 100 Badewannen.</p> -->
                    <p id="result_fact"></p>
                </div>
            </div>
        </div>

</section>


        <?php include "includes/footer-eng.php"; ?>
    </div>



    <?php include "includes/page-footer.php"; ?>
    <script src="assets/prev/jquery/page1.js"></script>
    <script>
        function mynewFunction() {
            idArray = new Array();
            idArray[0] = "Für 1 kg Rindfleisch werden 15.500 Liter Wasser verbraucht, was 100 Badewannen entspricht."
            idArray[1] = "Jedes Jahr landen 2,21 Milliarden Tonnen Abfall auf Deponien."
            idArray[2] = "Etwa 40 % aller weltweit produzierten Lebensmittel werden verschwendet."
            idArray[3] = "1 von 9 Menschen auf diesem Planeten geht hungrig ins Bett."
            idArray[4] = "1/4 des weltweiten Süßwasservorrats wird für den Anbau von Lebensmitteln verwendet, die nie gegessen werden."
            idArray[5] = "Wäre die Lebensmittelverschwendung ein Land, wäre es nach China und den USA der drittgrößte Emittent von Treibhausgasen."
            idArray[6] = "Bis 2050 wird es mehr Plastik als Fisch (nach Gewicht) in den Ozeanen geben, wenn wir nichts dagegen unternehmen."
            idArray[7] = "Nur 14 % der Kunststoffverpackungen werden weltweit für das Recycling gesammelt."
            idArray[8] = "Kartoffel-, Fisch- und Orangenabfälle könnten schon bald zu neuen Verpackungsformen werden, daran arbeiten Wissenschaftlerinnen und Wissenschaftler."
            idArray[9] = "LED-Lampen verbrauchen bis zu 90% weniger Energie als Glühbirnen."
            idArray[10] = "Beim Kochen mit einem Induktionsherd gehen nur 10 % der Wärme verloren, während bei einem Gasherd fast 50 % der Wärme verloren gehen."

            document.getElementById("selectFact").onclick = mynewFunction;
            //randomParagraph = Math.floor(Math.random() * 3);
            const rndInt = randomIntFromInterval(0, 10)
            document.getElementById("result_fact").innerHTML = idArray[rndInt];
            //console.log(idArray);
        };

        function randomIntFromInterval(min, max) { // min and max included 
            return Math.floor(Math.random() * (max - min + 1) + min)
        };
        //page params
        $(document).ready(function() {
            var cur_page_name = "Home";
            var cur_nav_link_id = "1";
            var eng_page_path = "index.php";
            var deu_page_path = "home.php";
            //manipulation
            pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
        });
    </script>
    <script src="assets/js/jquery-ui.min.js"></script>
</body>

</html>