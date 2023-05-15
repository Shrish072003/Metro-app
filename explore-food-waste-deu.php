<!doctype html>
<html lang="en">

<head>
    <?php include "includes/page-header.php"; ?>
    <link rel="stylesheet" href="assets/css/ruler.css">
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
    <!--current page url-->
    <meta name="msapplication-tooltip" content="METRO">
    <meta http-equiv="cleartype" content="on">
    <meta name="canonical" content="">
    <!--current page url-->
    <style>
        .two-column {
            column-count: 2;
            column-gap: 2rem;
        }

        .footer-socials.side_nav>ul {
            margin-left: 0rem;
        }

        .sldImg01>img {
            width: 19rem;
        }

        .sldImg02>img {
            width: 13rem;
        }

        .sldImg03>img {
            width: 15rem;
        }

        .sldImg04>img {
            width: 12rem;
        }

        .sldImg05>img {
            width: 8rem;
        }

        .sldImg06>img {
            width: 16rem;
        }

        .sldImg07>img {
            width: 7rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg01>img {
            width: 35rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg02>img {
            width: 26rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg03>img {
            width: 30rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg04>img {
            width: 24rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg05>img {
            width: 16rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg06>img {
            width: 30rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg07>img {
            width: 13rem;
        }
    </style>
    <style>
        .yellow-sec1 {
            width: 100%;
            height: auto;
            background-color: #ffe500;
            margin-bottom: 2rem;
        }

        .t-lower {
            text-transform: capitalize;
        }

        .c-para1 {
            font-size: 24px;
            font-weight: bold;
        }

        .thermo-inner {
            padding-left: 3rem;
            padding-right: 3rem;
            padding-top: 2rem;
            padding-bottom: 5rem;
        }

        .sw-pbtn-holder {
            display: block;
            width: 2rem !important;
            height: 2rem;
            position: relative;
            top: 9rem;
            left: 4rem;

        }

        .swiper-button-prev,
        .swiper-rtl .swiper-button-next,
        .swiper-button-next,
        .swiper-rtl .swiper-button-prev {
            background-color: #003b7e;
            width: 2rem !important;
            height: 2rem !important;
            border-radius: 1rem;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            color: white;
        }

        .swiper-button-next::after,
        .swiper-button-prev::after {
            color: white;
        }

        .sw-nbtn-holder {
            display: block;
            width: 2rem !important;
            height: 2rem;
            position: relative;
            top: -9rem;
            right: -21rem;
        }

        #fruitList {
            background-color: rgba(255, 255, 255, 0.5);
        }

        #vegList {
            background-color: rgba(255, 255, 255, 0.5);
        }

        .dlist-container {
            overflow-y: scroll;
            width: 38rem;
            height: 11rem;
            margin-top: 1rem;
        }

        .dlist-container.v {
            margin-left: 6rem;
        }



        .thermo-fruits {
            column-count: 2;
            /* column-gap: 0rem; */
            list-style-image: url("assets/images/food_waste/bull.svg");
            font-size: 20px;

        }

        .fruit-display-inner {
            width: 34rem;
            margin: 0 auto;
        }

        .thermo-veg {
            column-count: 2;
            /* column-gap: 0rem; */
            list-style-image: url("assets/images/food_waste/bull.svg");
            font-size: 20px;

        }

        .veg-display-inner {
            width: 34rem;
            margin: 0 auto;
        }

        .t32 {
            font-size: 32px;
            /* margin-left: -8rem; */
        }

        .flistd {
            margin-left: -9rem !important;
        }

        .ml3r1 {
            margin-left: 3rem;
        }


        .zdiv {
            z-index: 50;
        }

        .degtext {
            font-size: 40px;
            font-weight: bold;
            font-family: 'GothamBold';
        }

        .i1r {
            width: 1rem;
        }

        .fruit-display {
            margin-top: 4rem;
            text-align: left;
            height: 15rem;
        }

        .veg-display {
            margin-top: 4rem;
            text-align: left;
            margin-left: 7rem;
            height: 15rem;
        }

        .fruit12 {
            background-color: rgba(255, 255, 255, 0.5);
            padding-top: 5rem;
            padding-bottom: 5rem;
            margin-top: -9rem;
        }

        .veg12 {
            background-color: rgba(255, 255, 255, 0.5);
            padding-top: 5rem;
            padding-bottom: 5rem;
            margin-top: -9rem;
        }

        .list-box1 {
            height: 14rem;
            overflow-y: scroll;
        }

        .two-column {
            column-count: 2;
            column-gap: 2rem;
        }

        .sldImg01>img {
            width: 19rem;
        }

        .sldImg02>img {
            width: 13rem;
        }

        .sldImg03>img {
            width: 15rem;
        }

        .sldImg04>img {
            width: 12rem;
        }

        .sldImg05>img {
            width: 8rem;
        }

        .sldImg06>img {
            width: 16rem;
        }

        .sldImg07>img {
            width: 7rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg01>img {
            width: 35rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg02>img {
            width: 26rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg03>img {
            width: 30rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg04>img {
            width: 24rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg05>img {
            width: 16rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg06>img {
            width: 30rem;
        }

        .pageSlider-slide.swiper-slide-active>div.row>div.col-md-12>.pageSlider-slide-image>span.sldImg07>img {
            width: 13rem;
        }

        h1.banner_title {
            font-size: 36px;
            text-transform: unset;
        }

        .mb-1d5 {
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body class="popup-exists page-animation1">
    <?php include "includes/header-deu.php"; ?>
    <?php include "includes/loader.php"; ?>

    <div class="wrapper">
        <section class="safeFoodl4_banner no-print" id="option1" data-scrl="Wie Sie Lebensmittelabfälle reduzieren">
            <div class="container-fluid no-print">
                <div class="row px-4 no-print mb-1d5">
                    <div class="col-md-5 no-print">
                        <div class="banner_l4_title">
                            <h1 class="banner_title">Wie sie lebensmittelabfälle<br>reduzieren</h1>
                            <h6>
                                <strong>Lebensmittelverschwendung in der Gastronomie</strong>
                            </h6>
                            <p>Lebensmittel nicht zu verwenden, kostet Geld. Das Wegwerfen von wertvollen Ressourcen, birgt zudem ein enormes ökologisches und soziales Konfliktpotenzial. Konflikte, die junge und zukünftige Generationen nicht mehr akzeptieren. Gleichzeitig steigt mit dem Anstieg der Weltbevölkerung die Nachfrage nach Lebensmitteln, während Anbauflächen endlich sind. Deshalb werden immer mehr Gesetze erlassen, die das Gastgewerbe verpflichten, sich effizienter mit Lebensmittelabfällen zu befassen. Seit 2020 ist der HoReCa-Sektor in allen EU-Mitgliedstaaten verpflichtet, Lebensmittelabfälle zu erfassen und darüber zu berichten. </p>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1 no-print">
                        <div class="banner_l4_img">
                            <img src="assets/images/safe_food/Asset 1.svg" class="img-fluid pl-5" style="width:80%;float:right;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="good_to_know no-print mtcsutom" id="option2" data-scrl="Mülldeponien sollten der letzte Ort sein, auf dem nicht benötigte Lebensmittel landen">
            <div class="container">
                <div class="row">
                    <h3 class="food_wasteTitle">Mülldeponien sollten der letzte Ort sein, <br>auf dem nicht benötigte Lebensmittel landen
                    </h3>
                    <p class="exploreFood_discripsn">Mehr als 1/3 aller weltweit produzierten Lebensmittel landen im Abfall. Es gibt viele andere Möglichkeiten besser mit Lebensmittelabfällen umzugehen. Verkaufen Sie überschüssige Lebensmittel weiter oder spenden Sie sie an Menschen und Tiere. Wenn möglich, recyceln Sie Lebensmittel für andere Zwecke und kompostieren Sie so viel wie möglich. </p>
                    <div class="col-md-4 px-4">
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 3.1.svg" class="img-fluid">
                            <p>Besseres Image für Ihr Restaurant</p>
                        </div>
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 5.1.svg" class="img-fluid">
                            <p>Hat einen positiven Einfluss auf die Arbeitsmoral </p>
                        </div>
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 8.1.svg" class="img-fluid">
                            <p>Deutliches Unterscheidungsmerkmal von Ihrer Konkurrenz</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="benefit_box" style="min-height: 28.04rem;">
                            <h4 style="font-size: 29px;line-height: 1.5;">Die Reduzierung von Lebensmittelabfällen hat viele Vorteile</h4>
                        </div>
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 9.1.svg" class="img-fluid">
                            <p>Sie differenzieren sich, indem Sie sich als verantwortungsvoll hervorheben </p>
                        </div>
                    </div>
                    <div class="col-md-4 px-4">
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 4.1.svg" class="img-fluid">
                            <p>Effizientere Geschäftsabläufe</p>
                        </div>
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 7.1.svg" class="img-fluid">
                            <p>Hat einen positiven Einfluss auf Ihre lokale Umwelt</p>
                        </div>
                        <div class="good_to_know_box p-4 safe_foodBox_l4">
                            <img src="assets/images/safe_food/Asset 10.svg" class="img-fluid">
                            <p>Sie sind bereit, neue Gesetze einzuhalten</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>






        <!-- Thermometer start -->






        <style>
            .yellow-sec1 {
                width: 100%;
                height: auto;
                background-color: #ffe500;

            }

            .t-lower {
                text-transform: capitalize;
            }

            .c-para1 {
                font-size: 24px;
                font-weight: bold;
            }

            .thermo-inner {
                padding-left: 3rem;
                padding-right: 3rem;
                padding-top: 2rem;
                padding-bottom: 5rem;
            }

            .sw-pbtn-holder {
                display: block;
                width: 2rem !important;
                height: 2rem;
                position: relative;
                top: 9rem;
                left: 4rem;

            }

            .swiper-button-prev,
            .swiper-rtl .swiper-button-next,
            .swiper-button-next,
            .swiper-rtl .swiper-button-prev {
                background-color: #003b7e;
                width: 2rem !important;
                height: 2rem !important;
                border-radius: 1rem;
            }

            .swiper-button-next::after,
            .swiper-button-prev::after {
                color: white;
            }

            .swiper-button-next::after,
            .swiper-button-prev::after {
                color: white;
            }

            .sw-nbtn-holder {
                display: block;
                width: 2rem !important;
                height: 2rem;
                position: relative;
                top: -9rem;
                right: -21rem;
            }

            #fruitList {
                background-color: rgba(255, 255, 255, 0.5);
            }

            #vegList {
                background-color: rgba(255, 255, 255, 0.5);
            }

            .dlist-container {
                overflow-y: scroll;
                width: 38rem;
                height: 11rem;
                margin-top: 1rem;
            }

            .dlist-container.v {
                margin-left: 6rem;
            }



            .thermo-fruits {
                column-count: 2;
                /* column-gap: 0rem; */
                list-style-image: url("assets/images/food_waste/bull.svg");
                font-size: 20px;

            }

            .fruit-display-inner {
                width: 34rem;
                margin: 0 auto;
            }

            .thermo-veg {
                column-count: 2;
                /* column-gap: 0rem; */
                list-style-image: url("assets/images/food_waste/bull.svg");
                font-size: 20px;

            }

            .veg-display-inner {
                width: 34rem;
                margin: 0 auto;
            }

            .t32 {
                font-size: 32px;
                /* margin-left: -8rem; */
            }

            .flistd {
                margin-left: -9rem !important;
            }

            .ml3r1 {
                margin-left: 3rem;
            }

            .zdiv {
                z-index: 50;
            }

            .degtext {
                font-size: 40px;
                font-weight: bold;
                font-family: 'GothamBold';
            }

            .i1r {
                width: 1rem;
            }

            .fruit-display {
                margin-top: 4rem;
                text-align: left;
                height: 15rem;
            }

            .veg-display {
                margin-top: 4rem;
                text-align: left;
                margin-left: 7rem;
                height: 15rem;
            }

            .fruit12 {
                background-color: rgba(255, 255, 255, 0.5);
                padding-top: 5rem;
                padding-bottom: 5rem;
                margin-top: -9rem;
            }

            .veg12 {
                background-color: rgba(255, 255, 255, 0.5);
                padding-top: 5rem;
                padding-bottom: 5rem;
                margin-top: -9rem;
            }

            .list-box1 {
                height: 14rem;
                overflow-y: scroll;
            }
        </style>
        <section class="yellow-sec1" id="option3" data-scrl="Gut zu wissen">
            <div class="thermo-inner">
                <div class="text-center">
                    <h3 class="msr-text-color h3v t-lower" style="text-transform: none;">
                        Gut zu wissen
                    </h3>

                    <p class="c-para1">
                        Optimale "kurzfristige" Lagertemperaturbereiche (&deg;C)

                    </p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="thermometer-wrapper">
                            <div class="thermometer-inner">
                                <div class="thm-inner-sec-1">
                                    <div class="sec-1-content">
                                        <span class="ideg1">
                                            &deg;C
                                        </span>
                                        <span class="iarrow1">
                                            <img src="assets/images/food_waste/c-arrow.svg" class="img-fluid i1r">
                                        </span>
                                    </div>
                                </div>
                                <div class="thm-inner-sec-2">
                                    <div class="thermometer-controls">
                                        <div class="progress-red">
                                            <div class="red-line"></div>
                                        </div>
                                        <div class="ruler-wrapper">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class='ruler'>
                                                        <!--zero-->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!--ONE-->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!--Two-->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- three -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- four -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- five -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- six -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- seven -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- eight -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- nine -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- ten -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- eleven -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- twelve -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- thirteen -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- fourteen -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                        <!-- fifteen -->
                                                        <div class='cm'>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                            <div class='mm'></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="thm-inner-sec-3">
                                    &nbsp;
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 offset-md-1 mt-4">
                        <div class="th-content-wrapper">
                            <div class="row">
                                <div class="col-md-3 text-center zdiv">
                                    <div class="fruits-inner ">
                                        <img src="assets/images/thermometer/fuits-icon.svg" class="img-fluid list-icon1" />
                                    </div>
                                </div>
                                <div class="col-md-6 text-center">
                                    <div class="sldr-container">

                                        <div class="swiper temprature swiper-slide-inner">
                                            <div class="swiper-button-prev pbtn1"></div>
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide" data-slidno="1">
                                                    <div class="degtext">
                                                        0-2 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="2">
                                                    <div class="degtext">
                                                        0-5 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="3">
                                                    <div class="degtext">
                                                        2-5 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="4">
                                                    <div class="degtext">
                                                        5-7 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="5">
                                                    <div class="degtext">
                                                        7-10 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="6">
                                                    <div class="degtext">
                                                        7-12 &deg;C
                                                    </div>
                                                </div>
                                                <div class="swiper-slide" data-slidno="7">
                                                    <div class="degtext">
                                                        12-15 &deg;C
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-button-next nbtn1"></div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-3 text-center zdiv">
                                    <div class="vegetables-inner">
                                        <img src="assets/images/thermometer/vegetables-icon.svg" class="img-fluid list-icon1" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-12 mt-4">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="fruit12">
                                    <div class="row">
                                        <div class="col-md-7 offset-md-1  text-center">
                                            <div class="h3v t32">
                                                <span class="fruitspn">
                                                    Obst
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-md-1 mt-2">
                                            <div class="list-box1">
                                                <ul class="thermo-fruits">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="veg12">
                                    <div class="row">
                                        <div class="col-md-7 offset-md-4  text-center">
                                            <div class="h3v t32">
                                                <span class="fruitspn">
                                                    Gemüse
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8 offset-md-3 mt-2">
                                            <div class="list-box1">
                                                <ul class="thermo-veg">
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>












                        </div>
                    </div>
                </div>


            </div>

        </section>
        <script>
            //thermometer
            $(document).ready(function() {

                bindThmScheme1();
                //next button
                $(".nbtn1").click(function() {
                    //alert($(".swiper-slide-active").data("slidno"));
                    bindThermometer($(".swiper-slide-active").data("slidno"));
                });
                //previous button
                $(".pbtn1").click(function() {
                    bindThermometer($(".swiper-slide-active").data("slidno"));
                });

                function bindThermometer(slideno) {
                    if (slideno == "1") {
                        bindThmScheme1();
                    } else if (slideno == "2") {
                        bindThmScheme2();
                    } else if (slideno == "3") {
                        bindThmScheme3();
                    } else if (slideno == "4") {
                        bindThmScheme4();
                    } else if (slideno == "5") {
                        bindThmScheme5();
                    } else if (slideno == "6") {
                        bindThmScheme6();
                    } else if (slideno == "7") {
                        bindThmScheme7();
                    }
                };

                function BindFruits(fruitlist) {
                    var ful1 = $('ul.thermo-fruits');
                    ful1.empty();
                    $.each(fruitlist, function(i) {
                        var li = $('<li/>')
                            .text(fruitlist[i])
                            .appendTo(ful1);
                    });
                };

                function BindVegs(veglist) {
                    var vul1 = $('ul.thermo-veg');
                    vul1.empty();
                    $.each(veglist, function(i) {
                        var li = $('<li/>')
                            .text(veglist[i])
                            .appendTo(vul1);
                    });
                };

                function bindThmScheme1() {
                    //0-2
                    var fruits = ["Himbeeren", "Blaubeeren", "Brombeeren"];
                    var veg = [""];
                    $(".red-line").css("width", "12.90322580645161%");
                    $(".red-line").css("margin-left", "0%");
                    BindFruits(fruits);
                    $('ul.thermo-veg').empty();
                };

                function bindThmScheme2() {
                    //0-5
                    var fruits = ["Äpfel", "Aprikosen", "Kirschen", "Kokosnüsse", "Datteln", "Feigen", "Frischgeschnittenes", "Trauben", "Kiwis", "Mispeln", "Nektarinen", "Pfirsiche", "Birnen", "Kakis", "Pflaumen", "Erdbeeren"];
                    var veg = ["Artichoken", "Spargel", "Bok Choy", "Brokkoli", "Rosenkohl", "Kohl", "Karotten", "Blumenkohl", "Sellerie", "Chicorée", "Chinakohl", "Mangold", "Mais", "Endiviensalat", "Fenchel", "Frischgeschnittene Produkte", "Knoblauch", "Ginseng", "Grünes Blattgemüse", "Meerrettich", "Kräuter", "Kohlrabi", "Lauch", "Salat", "Pilze", "Petersilie", "Erbsen", "Rettich", "Salatblätter", "Spinat", "Sprossen", "Steckrübe", "Brunnenkresse"];
                    $(".red-line").css("width", "32.25806451612903%");
                    $(".red-line").css("margin-left", "0%");
                    BindFruits(fruits);
                    BindVegs(veg);
                };

                function bindThmScheme3() {
                    //2-5
                    var fruits = ["Reife Avocados", "Cranberry", "Litschis", "Trüffel"];
                    var veg = [""];
                    $(".red-line").css("width", "19.35483870967742%");
                    $(".red-line").css("margin-left", "12.90322580645161%");
                    BindFruits(fruits);
                    $('ul.thermo-veg').empty();
                };

                function bindThmScheme4() {
                    //5-7
                    var fruits = ["Papayas"];
                    var veg = ["Melonen"];
                    $(".red-line").css("width", "12.90322580645161%");
                    $(".red-line").css("margin-left", "32.25806451612903%");
                    BindFruits(fruits);
                    BindVegs(veg);
                };

                function bindThmScheme5() {
                    //7-10
                    var fruits = ["Avocados", "Drachenfrucht", "Zitronen", "Limetten", "Mandarinen", "Mangos", "Orangen", "Passionsfrucht", "Granatapfel"];
                    var veg = ["Grüne Bohnen", "Kaktusblätter", "Maniok", "Chayoten", "Gurken", " Auberginen", "Okraschoten", "Paprika (Paprika/Chili)", "Kürbis (gelb)", "Physalis", "Zucchinis"];
                    $(".red-line").css("width", "19.35483870967742%");
                    $(".red-line").css("margin-left", "45.16129032258064%");
                    BindFruits(fruits);
                    BindVegs(veg);
                };

                function bindThmScheme6() {
                    //7-12
                    var fruits = ["Ananas"];
                    var veg = ["Knoblauch", "Zwiebeln "];
                    $(".red-line").css("width", "32.25806451612903%");
                    $(".red-line").css("margin-left", "45.16129032258064%");
                    BindFruits(fruits);
                    BindVegs(veg);

                };

                function bindThmScheme7() {
                    //12-15
                    var fruits = ["Bananen", "Karambole", "Kirschlorbeer", "Durian", "Grapefruit", "Mangostane", "Papayas", "Wachs-Äpfel"];
                    var veg = ["Ingwer", "Melonen", "Zwiebeln", "Kartoffeln", "Kürbis", "Süßkartoffel", "Tomaten", "Wassermelone", "Winterkürbis"];
                    $(".red-line").css("width", "19.35483870967742%");
                    $(".red-line").css("margin-left", "77.41935483870967%");
                    BindFruits(fruits);
                    BindVegs(veg);
                };
            });


            var swiper = new Swiper(".temprature", {
                navigation: {
                    nextEl: ".swiper-button-next.nbtn1",
                    prevEl: ".swiper-button-prev.pbtn1",
                },
            });
        </script>





        <!-- thermometer end -->




        <section class="waste_food_l4_slider no-print" id="option4" data-scrl="Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren">
            <div class="section-div">
                <div class="container-fluid ">
                    <div class="sw-holder">
                        <h3 class="wayT0Title">Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren</h3>
                        <!--<div class="sw-btn-prev-container"><div class="swiper-button-prev btn-y pbtn"></div></div>-->
                        <div class="swholder1 slider_3">

                            <div class="swholder-sw">

                                <div class="row">
                                    <div class="col-md-12 mb-5">
                                        <div class="pageSlider-container">
                                            <div class="pageSlider-container-inner">
                                                <div class="pageSlider-prev">
                                                    <div class="pageSlider-prev-inner">
                                                        <div class="swiper-button-prev pageSwiper1PrevBtn"></div>
                                                    </div>
                                                </div>
                                                <div class="pageSlider">
                                                    <div class="pageSlider-inner">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="pageSlider-holder">
                                                                    <div class="swiper pageSwiper1">
                                                                        <div class="swiper-wrapper">
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg01">
                                                                                                <img src="assets/images/safe_food/fw-1.svg" class="img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText01">
                                                                                                Beziehen<br> Sie Ihr Personal ein
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn01">
                                                                                                <button class="read-more-btn" onclick="openPopUp(1);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg02">
                                                                                                <img src="assets/images/safe_food/fw-2.svg" class="img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText02">
                                                                                                Verschiedene <br>Abfallarten identifizieren
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn02">
                                                                                                <button class="read-more-btn" onclick="openPopUp(2);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg03">
                                                                                                <img src="assets/images/safe_food/fw-3.svg" class=" img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText03">
                                                                                                Lagern Sie Obst <br>und Gemüse richtig
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn03">
                                                                                                <button class="read-more-btn" onclick="openPopUp(3);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg04">
                                                                                                <img src="assets/images/safe_food/fw-4.svg" class=" img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText04">
                                                                                                Ordern Sie nur solche Waren, <br>die Sie wirklich brauchen
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn04">
                                                                                                <button class="read-more-btn" onclick="openPopUp(4);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg05">
                                                                                                <img src="assets/images/safe_food/fw-5.svg" class=" img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText05">
                                                                                                Achten Sie auf gute Qualität
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn05">
                                                                                                <button class="read-more-btn" onclick="openPopUp(5);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg06">
                                                                                                <img src="assets/images/safe_food/fw-6.svg" class=" img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText06">
                                                                                                Kompostieren Sie die Reste
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn06">
                                                                                                <button class="read-more-btn" onclick="openPopUp(6);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="swiper-slide pageSlider-slide text-center">
                                                                                <div class="row">
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-image">
                                                                                            <span class="sldImg07">
                                                                                                <img src="assets/images/safe_food/fw-7.svg" class=" img-fluid">
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-text">
                                                                                            <span class="sldText07">
                                                                                                Spenden Sie überschüssige Lebensmittel
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-md-12">
                                                                                        <div class="pageSlider-slide-button">
                                                                                            <span class="sldBtn07">
                                                                                                <button class="read-more-btn" onclick="openPopUp(7);">WEITERLESEN</button>
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>



                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="pageSlider-pagination">
                                                                    <div class="pageSlider-pagination-inner">
                                                                        <div class="swiper-pagination pageSwiper1Pagination"></div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="pageSlider-next">
                                                    <div class="pageSlider-next-inner">
                                                        <div class="swiper-button-next pageSwiper1NextBtn"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>



                            </div>
                            <!--<div class="swholder-pg"><div class="swiper-pagination"></div></div>-->
                        </div>
                        <!--<div class="sw-btn-next-container"><div class="swiper-button-next nbtn btn-y"></div></div>-->
                    </div>
                </div>
            </div>

        </section>
        <section class="advance_way no-print" id="option5" data-scrl="Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren">
            <div class="container">
                <div class="row">
                    <h3>Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren</h3>
                    <p>Sie können noch einen Schritt weiter gehen. Nutzen Sie die folgenden Tipps für Fortgeschrittene zur Reduzierung von Lebensmittelabfällen: </p>
                </div>
            </div>
        </section>
        <section class="compost_wasteFood pb-3 no-print" id="option6" data-scrl="Kompostieren Sie Lebensmittelabfälle">
            <div class="container-fluid">
                <div class="row px-4">
                    <h3 class="food_wasteTitle">Kompostieren Sie Lebensmittelabfälle </h3>
                    <p class="exploreFood_discripsn">Durch Kompostierung können Sie dazu beitragen, Lebensmittelabfälle zu verwerten und die Methanemissionen in Mülldeponien zu verringern.<br> Orientieren Sie sich an den folgenden Schritten, um Lebensmittel zu kompostieren:
                    </p>
                    <div class="col-md-6">
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 18.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p class="pt-0">Informieren Sie Ihr Personal und helfen Sie ihnen zu verstehen, warum diese Maßnahmen nötig sind. Fragen Sie sie nach ihren Ideen. </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 19.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p class="mt-3">Entscheiden Sie, ob Sie vor Ort kompostieren oder einen Dienstleister dafür beauftragen wollen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 31.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Bringen Sie Hinweisschilder im hinteren Bereich Ihres Restaurants an, um zu zeigen, wo und was kompostiert wird.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 30.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Sichern Sie die Kompostanlage, um zu verhindern, dass sie die Umgebung verunreinigt und Schädlinge anzieht.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 29.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p class="mt-3">Benutzen Sie umweltfreundliche Müllbeutel für die Abfallentsorgung.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 28.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Erkundigen Sie sich bei Ihrer örtlichen Müllabfuhr, was bei der Kompostierung über Ihr lokales Stadtwerk zu beachten ist.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left" style="padding-top:15px ;">
                                    <img src="assets/images/safe_food/Asset-l4.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Kompostieranlagen können im Haus oder im Freien aufgestellt werden. Der Einsatz von Regenwürmern kann die Kompostierung beschleunigen. Und Sie können sich sowohl für offene als auch für geschlossene Systeme entscheiden. Prüfen Sie, was für Ihren Standort geeignet und hygienisch ist.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left" style="padding-top:13px ;">
                                    <img src="assets/images/safe_food/Asset 41.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Informieren Sie Ihre Gäste über Ihre Speisekarte, Ihre Website, die sozialen Medien oder mit Schildern in Ihrem Restaurant, dass Sie die eigene Kompostierung aus Gründen der Abfallvermeidung eingeführt haben. </p>
                                </div>
                            </div>
                        </div>
                        <button class="read-more-btn r2 mt-5" id="myBtn33" href="#clickTohide">Mehr Lesen</button>
                    </div>
                    <div class="col-md-6">
                        <div class="compost_wasteFood_img">
                            <img src="assets/images/safe_food/Asset 32.svg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="safeFoodl4_paragraphs no-print" id="clickTohide">
            <div class="container ">
                <div class="row safeFoodl4_paragraphs_bgwhite no-print cx9" style="padding: 2.5rem;">
                    <div class="col-md-12 mt-2 px-2">
                        <h4 class="pl-4">Die Vorteile der Kompostierung</h4>
                        <p class="two-column mt-2">
                            Bei der Kompostierung wird organisches Material, wie z. B. Speisereste, mit Hilfe von Wärme, Feuchtigkeit, Bewegung, Luftzufuhr und manchmal mit Regenwürmern zersetzt. Damit können alle organischen, ungekochten Abfälle eines Restaurants in nährstoffreiche Erde umgewandelt werden. Diese Erde kann dann zum Beispiel als natürlicher Dünger durch die örtlichen Landwirte und Gärtner genutzt werden. Sie könnten sie auch im Garten Ihres Restaurants verwenden, sofern Sie einen besitzen. Weil Kompost keine synthetischen chemischen Bestandteile enthält, aber ein guter Dünger für Beete und Gärten ist, wirkt er sich positiv auf die Umwelt aus. Die Kompostierung von Lebensmittelabfällen trägt zur Verringerung von Lebensmittelabfällen und damit zu einem noch besseren Ruf Ihres Restaurants bei.
                            <br>
                            Allerdings können nicht alle Lebensmittel kompostiert werden. Kranke Pflanzen, Milchprodukte, Asche, Fleisch und Knochen, Öl, Fett und Schmiermittel sowie alle giftigen Materialien können nicht kompostiert werden. Kompostierbar sind Obst- und Gemüseabfälle, Kaffeesatz und -filter, Papierservietten, Holzasche, Pappe und Zeitungen. Erkundigen Sie sich bei Ihrer örtlichen Müllabfuhr, was in die städtische Kompostierung abgegeben werden darf. Erkundigen Sie sich auch, ob gekochte und tierische Produkte angenommen werden. Eventuell besteht die Möglichkeit, diese Lebensmittel in einer kommunalen Biogas-Anlage zu verarbeiten.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="compost_wasteFood pb-5 no-print">
            <div class="container-fluid">
                <div class="row px-4">
                    <h3 class="food_wasteTitle">Lernen Sie, mit Lebensmittelresten zu kochen
                    </h3>
                    <p class="text-center">Beachten Sie die folgenden Aspekte, wenn Sie das einmal ausprobieren wollen:</p>
                    <div class="col-md-6">
                        <div class="compost_wasteFood_img learn_to_make">

                            <p class="mt-5">Es gibt Bestandteile von Fleisch, Fisch und Gemüse, die üblicherweise weggeworfen werden, weil ihr Geschmack, ihre Beschaffenheit oder ihr Aussehen zum Kochen ungeeignet scheinen. Innereien oder Knochen gerieten so im Laufe der Zeit schlicht in Vergessenheit. Viele von uns, insbesondere in den Industrieländern, haben vergessen, dass tatsächlich alle Teile eines Tieres zu leckeren und nahrhaften Gerichten verarbeitet werden können. Wir haben den Bezug dazu verloren, woher Lebensmittel kommen und wie viel Aufwand ihre Herstellung erfordert. <br><br>

                                Wenn Sie einmal versuchen, bislang unerwünschte Bestandteile von Lebensmitteln beim Kochen zu verwenden, können Sie Ihren Gästen eine ganz neue Welt des Geschmacks eröffnen. Restaurants beeinflussen das Essverhalten Ihrer Gäste. Viele Trends haben in der Gastronomie begonnen.
                            </p>
                            <center class="mt-5">
                                <img src="assets/images/safe_food/Asset 33.svg" class="img-fluid">
                            </center>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 43.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Beziehen Sie Fisch und Fleisch aus <a href="https://verantwortung.metroag.de/schwerpunkte/rohstoffbeschaffung" target="_blank">nachhaltigen Quellen</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 42.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Kaufen Sie Teile von Fischen und Fleisch ein, die nicht so beliebt sind oder die normalerweise weggeworfen werden.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 41.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Sprechen Sie mit Ihren Gästen darüber, was Sie tun und weshalb. Um sie davon zu überzeugen, ungewöhnliche Gerichte zu probieren, könnten Sie Probierteller anbieten.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 40.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Machen Sie aus Lachsresten ein Risotto.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 39.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Braten Sie z. B. Hühnerhaut zu Chips.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 38.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Verarbeiten Sie Knochen zu Brühe.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 37.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Benutzen Sie Kronfleisch – das ist genauso lecker wie ein Entrecote, aber günstiger.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 36.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Aus Karottenspitzen lässt sich eine Pestosauce herstellen.</p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 35.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Verwelkter Salat kann sautiert und als Beilage serviert werden.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="compost_wasteFood_listing">
                            <div class="media">
                                <div class="media-left">
                                    <img src="assets/images/safe_food/Asset 34.svg" class="media-object" style="width:80px">
                                </div>
                                <div class="media-body">
                                    <p>Gekochte Brokkolistängel können zu einer Suppe püriert werden.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="safeFoodl4_banner no-print" id="option7" data-scrl="Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber">
            <div class="container-fluid">
                <div class="row px-4">
                    <div class="col-md-5">
                        <div class="banner_l4_title">
                            <h1 class="banner_title2" style="text-transform: none;">Überprüfen Sie Ihre Fortschritte<br>und sprechen Sie darüber</h1>
                            <p>Überprüfen Sie regelmäßig die Ergebnisse Ihrer Maßnahmen, sobald Sie erste Schritte zur Abfallvermeidung ergriffen haben. Halten Sie Ausschau nach einfachen Lösungen, die Ihnen nicht viel Zeit abverlangen. Überwachen Sie z. B. Ihre Entsorgungskosten, das Spendenaufkommen, die Einsparung von Kosten durch die Verteilung von Lebensmittelresten und die Ansprache neuer Gäste. Sprechen Sie mit Ihren Mitarbeitenden, wie viel Sie eingespart haben und wie ihre Mitarbeitenden Sie bei diesen angestrebten Einsparungen unterstützt haben. Die sichtbaren Fortschritte können Sie motivieren, auch weiterhin Lebensmittel einzusparen. Machen Sie Ihre Aktivitäten bekannt. Sie können Ihr verantwortungsbewusstes Handeln für Ihre Gäste mit einem Hinweis auf Ihrer Website oder in Ihrer Speisekarte sichtbar machen. Die Wirkung Ihrer Handlungen wird dadurch nur vergrößert, denn Ihre Mitarbeitenden und Gäste werden diese Botschaften mit nach Hause nehmen. </p>
                        </div>
                    </div>
                    <div class="col-md-5 offset-md-1">
                        <div class="banner_l4_img talk_prog_img">
                            <img src="assets/images/safe_food/Asset 44.svg" class="img-fluid pl-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="action_plan mt-5 section-to-print" id="option8" data-scrl="Ihr Aktionsplan">
            <div class="container">
                <div class="top-content mb-4">
                    <h3> Ihr Aktionsplan </h3>
                </div>
                <div class="mid-content cation-plan-section">
                    <ul>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class="">Ermitteln Sie die Herkunft der Lebensmittelabfälle in Ihrem Restaurant
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class="">Lagern Sie Obst und Gemüse ordnungsgemäß
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Kaufen Sie nur das ein, was Sie wirklich brauchen
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Spenden Sie überschüssige Lebensmittel und informieren Sie sich über lokale Einrichtungen, die Spenden annehmen. Achten Sie auf die Anforderungen, die diese Einrichtungen an die Abgabe von Lebensmitteln stellen
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Kompostieren Sie Produkte, die kompostierbar sind
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Ergänzen Sie die Speisekarte mit Gerichten, die auch unübliche Zutaten enthalten
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Informieren und engagieren Sie Ihr Personal </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Sprechen Sie mit Ihren Gästen über Ihre Fortschritte </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p class=""> Bringen Sie visuelle Erinnerungshilfen an
                            </p>
                        </li>
                        <li class="print-li">
                            <button onclick="window.print();" class="no-print">Drucken</button>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-md-12 like-section">
                <h4>
                    War dieser Artikel hilfreich?
                </h4>
                <button id="likeBtn" class="ripple" onclick="liked()">
                    <i class="fa fa-thumbs-up"></i>
                    <span class="liketxt">Yes!</span>
                </button>
            </div>
            <div class="col-md-12">
                <div class="sharing">
                    <h4>
                        Teile diese Seite
                    </h4>
                    <a href="" id="fb-share-button" class="sharebtn"><i class="fa fa-facebook"></i></a>
                    <a href="" id="tw-share-button" class="sharebtn"><i class="fa fa-twitter"></i></a>
                    <a href="" id="ld-share-button" class="sharebtn"><i class="fa fa-linkedin"></i></a>
                    <a href="" id="mail-share-button" class="sharebtn"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <?php include "includes/footer-deu.php"; ?>
    </div>






    <?php include "includes/page-footer.php"; ?>
    <div id="pop1" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(1);">X</a>
            <h4>Beziehen Sie Ihr Personal ein</h4>
            <p> Wenn Sie versuchen, möglichst wenig Lebensmittel zu verschwenden, sollten Sie Ihr Personal miteinbinden. Machen Sie ihnen die Bedeutung der Abfallvermeidung in Ihrem Betrieb verständlich. Das Engagement Ihres Personals ist entscheidend dafür, dass alle Maßnahmen funktionieren. Sie müssen auf dem Laufenden gehalten und geschult werden. Führen Sie mehrfache Schulungen durch, platzieren Sie Informationen zur Abfallvermeidung an gut sichtbaren Stellen und erinnern Sie alle immer wieder daran, dass die Unterstützung jedes einzelnen Mitarbeitenden zählt, um die Lebensmittelverschwendung im Arbeitsalltag der Gastronomie zu bekämpfen.
            </p>

        </div>
    </div>
    <div id="pop2" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(2);">X</a>
            <h4>Verschiedene Abfallarten identifizieren </h4>
            <p> Lebensmittelabfälle sind in der Gastronomie allgegenwärtig, aber Sie können einfache Maßnahmen ergreifen, um sie zu reduzieren. Beginnen Sie damit, die verschiedenen Abfallarten in Ihrem Restaurant zu identifizieren und stellen Sie fest, wo diese anfallen. Allgemein entstehen Lebensmittelabfälle entweder im hinteren Teil Ihres Restaurants (z. B. im Lager oder in der Küche) oder im vorderen Teil (z. B. dort, wo die Gäste bedient werden). Prüfen Sie, wie viel Lebensmittelabfälle Sie in Ihrem Restaurant produzieren und ermitteln Sie, wo diese Lebensmittel unnötig weggeworfen werden.
            </p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <h6><strong>Lebensmittelabfälle im hinteren Bereich des Restaurants</strong></h6>
                    <ul>
                        <li> Messen, verfolgen und analysieren Sie Ihre Lebensmittelabfälle</li>
                        <li> Prüfen Sie Ihre Speisekarte. Entfernen Sie Gerichte, die sich nicht gut verkaufen</li>
                        <li> Nutzen Sie digitale Tools, wie das <a href="https://www.menukithd.com/" target="_blank">Menukit </a>, um Rezepte zu verwalten und den täglichen Bedarf an Lebensmitteln zu berechnen. So können Sie gleichzeitig Ihre Einkaufskosten besser kontrollieren.</li>
                        <li> Fragen Sie Ihre Mitarbeitenden nach ihrer Einschätzung: Wo werden Lebensmittel verschwendet und wie kann man es vermeiden?
                        </li>
                        <li> Optimieren Sie die Haltbarkeit von Lebensmitteln, indem Sie sicherstellen, dass die Kühlketten nicht unterbrochen und die Produkte bei der richtigen Temperatur gelagert werden.
                        </li>
                        <li>Organisieren und beschriften Sie Ihre Vorräte, so dass die Haltbarkeit sichtbar ist.
                        </li>
                        <li>Stellen Sie sicher, dass alle bereits geöffneten und verarbeiteten Zutaten ein Etikett mit ihrer Haltbarkeitsdauer erhalten.
                        </li>
                        <li>Sorgen Sie für Ordnung in Ihrem Vorratsraum. Sie sollten immer wissen, was verbraucht werden muss, damit Sie nicht mehr bestellen, als wirklich nötig ist.</li>
                        <li>Überprüfen Sie Ihren Bestand regelmäßig, um die gekauften Mengen und die Menge der verschwendeten Lebensmittel zu vergleichen.
                        </li>
                        <li>Versuchen Sie, bislang nicht verwendete Teile von Lebensmitteln zu nutzen, z. B. mit Hilfe von <a href="https://www.mpulse.de/de/gastronomie/food-trends-fuer-die-gastronomie" target="_blank"> Zero-Waste-Rezepten.</a>
                        </li>
                        <li> Bedenken Sie, dass Lebensmittelreste (die nicht von Tieren stammen) als Tierfutter gespendet werden können, z. B. an ein örtliches Tierheim oder einen Zoo.
                        </li>
                        <li> Erlauben Sie Ihrem Personal, die überschüssigen Lebensmittel am Ende des Tages zu essen oder mit nach Hause zu nehmen.</li>
                        <li>Spenden Sie Ihre übrig gebliebenen Lebensmittel.
                        </li>
                        <li> Recyceln und/oder verwerten Sie Abfälle, wo immer es möglich ist.</li>
                        <li>Rausnehmen, aber den Link übernehmen.
                        </li>


                    </ul>
                </div>

                <div class="col-md-6">
                    <h6><strong>Lebensmittelabfälle im vorderen Bereich des Restaurants
                        </strong></h6>
                    <ul>
                        <li> Überwachen Sie die Portionsgrößen der Gerichte. Prüfen Sie, ob Sie die Mengen ändern sollten, wenn zu viele Reste pro Gast anfallen
                        </li>
                        <li> Erwägen Sie die Verwendung kleinerer Teller</li>
                        <li> Analysieren Sie die Beliebtheit einzelner Gerichte </li>
                        <li> Ermutigen Sie Ihre Gäste, Essensreste mitzunehmen</li>
                        <li> Legen Sie mit Ihrem Personal die genauen Portionsgrößen pro Gericht fest
                        </li>
                        <li> Überarbeiten Sie Ihre Speisekarte, um die Menge der Lebensmittelreste zu reduzieren
                        </li>
                        <li> Geben Sie Rabatte an Ihre Gäste weiter, wenn Sie übriggebliebene Lebensmittel verwenden
                        </li>
                        <li> Spenden Sie Ihre überschüssigen Lebensmittel, wenn Sie sie nicht weiterverkaufen können</li>
                        <li> Trennen Sie Ihre Lebensmittelabfälle ordnungsgemäß, damit sie richtig verarbeitet werden können
                        </li>
                        <li> Kompostieren Sie Ihre Lebensmittel, wenn möglich
                        </li>
                        <li> Informieren Sie Ihre Gäste über Ihre Maßnahmen
                        </li>

                    </ul>
                </div>
            </div>


        </div>
    </div>
    <div id="pop3" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(3);">X</a>
            <h4> Lagern Sie Obst und Gemüse richtig </h4>
            <p> Obst und Gemüse tragen wesentlich zu der Menge von Lebensmittelabfällen in Ihrem Restaurant bei. Prüfen Sie deshalb, ob Sie bereits alle Maßnahmen zur Lagerung von Obst und Gemüse ausschöpfen, um unnötige Lebensmittelabfälle zu vermeiden:


            <ul>
                <li>Stellen Sie sicher, dass Ihr Lagerraum gut belüftet ist.
                </li>
                <li>Wenden Sie das First-In-First-Out-Prinzip (FIFO) an, um sicherzugehen, dass Produkte, die zuerst angeliefert werden, auch sofort weiterverarbeitet werden.
                </li>
                <li>Lagern Sie Obst und Gemüse bei einer niedrigeren Temperatur als in der Umgebung, in er sie normalerweise wachsen, um ihre Haltbarkeit zu verlängern.
                </li>
                <li>Lagern Sie Obst und Gemüse entsprechend ihren spezifischen Lagertemperaturen. Beeren können z. B. in einem Kühlschrank aufbewahrt werden, Bananen sollten jedoch außerhalb des Kühlschranks an einem kühlen Ort gelagert werden.
                </li>
                <li>Frische Produkte sollten ihre spezifische Temperaturzone nicht zu lange verlassen. Abgepackte Salate verlieren einen Tag ihrer Haltbarkeit für jede Stunde, die sie nicht optimal gelagert werden.</li>
                <li>Gehen Sie vorsichtig mit Obst und Gemüse um, um Beschädigungen zu vermeiden.
                </li>
                <li>Stapeln Sie leichte Waren wie Beeren, Pilze und leichte Kisten oben im Kühlschrank und Kühlraum.
                </li>
                <li>Achten Sie auf verpackte Produkte, wie z. B. Äpfel in einer Plastikfolie, da die Beschädigung eines Produkts in der Verpackung auch die anderen schnell beschädigen kann.
                </li>
                <li>Trennen Sie Ethylen produzierende Produkte (Bananen, Äpfel, Birnen, Kiwis, Feigen, Melonen und Tomaten) von ethylempfindlichen Produkten (Zitrusfrüchte, Ananas, Blattgemüse, Kirschen, Beeren, Trauben sowie Fruchtgemüse). Durch die Trennung wird die Reifung der ethylempfindlichen Lebensmittel verlangsamt.
                </li>
            </ul>
            </p>

        </div>
    </div>
    <div id="pop4" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(4);">X</a>
            <h4> Ordern Sie nur solche Waren, die Sie wirklich brauchen </h4>
            <p>Vermeiden Sie von vornherein, Lebensmittel zu verschwenden. Kaufen Sie nur das ein, was Sie auch wirklich verbrauchen </p>

        </div>
    </div>
    <div id="pop5" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(5);">X</a>
            <h4> Achten Sie auf gute Qualität </h4>
            <p>Seien Sie offen für leichte Mängel an Lebensmitteln, aber meiden Sie Gemüse und Obst, das zu viele Druckstellen oder Schäden aufweist.</p>

        </div>
    </div>
    <div id="pop6" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(6);">X</a>
            <h4>Kompostieren Sie die Reste </h4>
            <p> Die Kompostierung kann dazu beitragen, Lebensmittelreste zu verwerten und die Methanemissionen in Mülldeponien zu verringern. Obst, Gemüse, Kaffee und Tee eignen sich allesamt hervorragend für den Kompost.</p>

        </div>
    </div>
    <div id="pop7" class="modalx">
        <div class="modalx-content">
            <a class="btn-close-popup" onclick="closePopUp(7);">X</a>
            <h4> Spenden Sie überschüssige Lebensmittel </h4>
            <p>Nicht verwendete Lebensmittel müssen nicht weggeworfen werden. Indem Sie solche Lebensmittel spenden oder günstiger anbieten (z. B. über <a href="https://toogoodtogo.at/de-at" target="_blank">TOO GOOD TO GO</a>), verhindern Sie, dass diese auf der Mülldeponie landen. Gleichzeitig helfen Sie Menschen in Not. Darüber hinaus steigern Spenden die Moral Ihres Personals, weil Ihre Mitarbeitenden sehen, dass sie etwas Positives bewirken. Spenden können Ihnen auch bei der Steuer finanzielle Vorteile bringen. Grundsätzlich können Lebensmittel an Wohltätigkeitsorganisationen, Lebensmittelbanken, Zoos oder Tierheime gespendet werden. Aber denken Sie daran: In der Regel stellen diese bestimmte Anforderungen an die Lebensmittel, die sie annehmen. Dies sind zum Beispiel:
            <ul>
                <li>Frische Lebensmittel müssen verpackt und noch haltbar sein
                </li>
                <li>Obst und Gemüse darf nicht verdorben sein
                </li>
                <li>Verpackte Lebensmittel müssen ungeöffnet sein </li>
            </ul>

            </p>
        </div>
    </div>
    <script>
        //thermometer
        $(document).ready(function() {

            bindThmScheme1();
            //next button
            $(".nbtn1").click(function() {
                //alert($(".swiper-slide-active").data("slidno"));
                bindThermometer($(".swiper-slide-active").data("slidno"));
            });
            //previous button
            $(".pbtn1").click(function() {
                bindThermometer($(".swiper-slide-active").data("slidno"));
            });

            function bindThermometer(slideno) {
                if (slideno == "1") {
                    bindThmScheme1();
                } else if (slideno == "2") {
                    bindThmScheme2();
                } else if (slideno == "3") {
                    bindThmScheme3();
                } else if (slideno == "4") {
                    bindThmScheme4();
                } else if (slideno == "5") {
                    bindThmScheme5();
                } else if (slideno == "6") {
                    bindThmScheme6();
                } else if (slideno == "7") {
                    bindThmScheme7();
                }
            };

            function BindFruits(fruitlist) {
                var ful1 = $('ul.thermo-fruits');
                ful1.empty();
                $.each(fruitlist, function(i) {
                    var li = $('<li/>')
                        .text(fruitlist[i])
                        .appendTo(ful1);
                });
            };

            function BindVegs(veglist) {
                var vul1 = $('ul.thermo-veg');
                vul1.empty();
                $.each(veglist, function(i) {
                    var li = $('<li/>')
                        .text(veglist[i])
                        .appendTo(vul1);
                });
            };

            function bindThmScheme1() {
                //0-2
                var fruits = ["Himbeeren", "Blaubeeren", "Brombeeren"];
                var veg = [""];
                $(".red-line").css("width", "12.90322580645161%");
                $(".red-line").css("margin-left", "0%");
                BindFruits(fruits);
                $('ul.thermo-veg').empty();
            };

            function bindThmScheme2() {
                //0-5
                var fruits = ["Äpfel", "Aprikosen", "Kirschen", "Kokosnüsse", "Datteln", "Feigen", "Trauben", "Kiwis", "Mispeln", "Nektarinen", "Pfirsiche", "Birnen", "Kakis", "Pflaumen", "Erdbeeren"];
                var veg = ["Artichoken", "Spargel", "Bok Choy", "Brokkoli", "Rosenkohl", "Kohl", "Karotten", "Blumenkohl", "Sellerie", "Chicorée", "Chinakohl", "Mangold", "Mais", "Endiviensalat", "Fenchel", "Frischgeschnittene Produkte", "Knoblauch", "Ginseng", "Grünes Blattgemüse", "Meerrettich", "Kräuter", "Kohlrabi", "Lauch", "Salat", "Pilze", "Petersilie", "Erbsen", "Rettich", "Salatblätter", "Spinat", "Sprossen", "Steckrübe", "Brunnenkresse"];
                $(".red-line").css("width", "32.25806451612903%");
                $(".red-line").css("margin-left", "0%");
                BindFruits(fruits);
                BindVegs(veg);
            };

            function bindThmScheme3() {
                //2-5
                var fruits = ["Reife Avocados", "Cranberry", "Litschis", "Trüffel"];
                var veg = [""];
                $(".red-line").css("width", "19.35483870967742%");
                $(".red-line").css("margin-left", "12.90322580645161%");
                BindFruits(fruits);
                $('ul.thermo-veg').empty();
            };

            function bindThmScheme4() {
                //5-7
                var fruits = ["Papayas"];
                var veg = ["Melonen"];
                $(".red-line").css("width", "12.90322580645161%");
                $(".red-line").css("margin-left", "32.25806451612903%");
                BindFruits(fruits);
                BindVegs(veg);
            };

            function bindThmScheme5() {
                //7-10
                var fruits = ["Avocados", "Drachenfrucht", "Zitronen", "Limetten", "Mandarinen", "Mangos", "Orangen", "Passionsfrucht", "Granatapfel"];
                var veg = ["Grüne Bohnen", "Kaktusblätter", "Maniok", "Chayoten", "Gurken", " Auberginen", "Okraschoten", "Paprika (Paprika/Chili)", "Kürbis (gelb)", "Physalis", "Zucchinis"];
                $(".red-line").css("width", "19.35483870967742%");
                $(".red-line").css("margin-left", "45.16129032258064%");
                BindFruits(fruits);
                BindVegs(veg);
            };

            function bindThmScheme6() {
                //7-12
                var fruits = ["Ananas"];
                var veg = ["Knoblauch", "Zwiebeln "];
                $(".red-line").css("width", "32.25806451612903%");
                $(".red-line").css("margin-left", "45.16129032258064%");
                BindFruits(fruits);
                BindVegs(veg);

            };

            function bindThmScheme7() {
                //12-15
                var fruits = ["Bananen", "Karambole", "Kirschlorbeer", "Durian", "Grapefruit", "Mangostane", "Papayas", "Wachs-Äpfel"];
                var veg = ["Ingwer", "Melonen", "Zwiebeln", "Kartoffeln", "Kürbis", "Süßkartoffel", "Tomaten", "Wassermelone", "Winterkürbis"];
                $(".red-line").css("width", "19.35483870967742%");
                $(".red-line").css("margin-left", "77.41935483870967%");
                BindFruits(fruits);
                BindVegs(veg);
            };
        });


        var swiper = new Swiper(".temprature", {
            navigation: {
                nextEl: ".swiper-button-next.nbtn1",
                prevEl: ".swiper-button-prev.pbtn1",
            },
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
        $('#myBtn33').click(function() {
            //get collapse content selector
            var collapse_content_selector = $(this).attr('href');

            //make the collapse content to be shown or hide
            var toggle_switch = $(this);
            $(collapse_content_selector).toggle(function() {
                if ($(this).css('display') == 'none') {
                    //change the button label to be 'Show'
                    toggle_switch.html('Mehr Lesen');
                } else {
                    //change the button label to be 'Hide'
                    toggle_switch.html('Weniger Lesen');
                }
            });
        });
        //page params
        $(document).ready(function() {
            var cur_page_name = "Food Waste";
            var cur_nav_link_id = "3";
            var eng_page_path = "explore-food-waste-eng.php";
            var deu_page_path = "explore-food-waste-deu.php";
            //manipulation
            pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
            var menuIdVal = "2";
            menumanipulation(menuIdVal);
        });
        var fDText = "Waste collection or deposit services either in METRO or via an external provider for non-food waste and food waste. Contact charities that take surplus food.";
        $("#footDynamicText").text(fDText);
    </script>
    <script>
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
        //page params
        $(document).ready(function() {
            var cur_page_name = "Lebensmittelverluste";
            var cur_nav_link_id = "3";
            var eng_page_path = "explore-food-waste-eng.php";
            var deu_page_path = "explore-food-waste-deu.php";
            //manipulation
            pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
            var menuIdVal = "2";
            menumanipulation(menuIdVal, "d");
        });
        var fDText = "Sammlung von Abfällen oder Pfandsysteme finden Sie entweder bei METRO oder über einen externen Anbieter sowohl für Non-Food- als auch für Lebensmittelabfälle. Kontaktieren Sie Wohltätigkeitsorganisationen, die überschüssige Lebensmittel annehmen.";
        $("#footDynamicText").html(fDText);

         //like share stats
        $(document).ready(function(){
            $.ajax({
                url : 'isliked.php?q=Lebensmittelverluste',
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
                url : 'isliked.php?q=Lebensmittelverluste',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        //dislike
                        $.ajax({
                            url : 'dislike.php?q=Lebensmittelverluste',
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
                            url : 'like.php?q=Lebensmittelverluste',
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
</body>

</html>