<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>METRO</title>
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
  <!--META TAGS-->
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="theme-color" content="#ffffff">
  <meta name="robots" content="noindex,nofollow">
  <style>
    .section-lena-inner {
      padding-left: 0;
    }

    body {
      overflow: auto;
    }

    nav.navbar {
      height: 60px;
      top: 0;
    }

    .c9 {
      padding-left: 0 !important;
      padding-right: 0 !important;
      max-width: 100%;
    }

    .likebtn {
      margin-bottom: 2rem;
    }

    .spacerx {
      margin-top: 3rem;
    }

    .nodeco {
      color: white !important;
      text-decoration: none !important;
    }

    .nowrap1 {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }

    @media print {
      body * {
        visibility: hidden;
      }

      .section-to-print,
      .section-to-print * {
        visibility: visible;
      }

      .section-to-print {
        position: absolute;
        left: 0;
        top: 0;
      }
    }

    .section1 {
      margin-top: 4rem;
      background-color: white;
    }

    .w100p {
      width: 100% !important;
      max-width: 100% !important;
    }

    .mid-highlight.container {
      max-width: 100%;
    }

    .section-lena-kitchen {
      max-width: 100%;
    }

    .section-simple-way {
      background-color: white;
    }

    .page-3_stage.page-4_stage {
      background-color: white;
    }
  </style>
  
</head>

<body class="page4-page">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
      <a class="navbar-brand text-theme-yellow" href="index.php">
        <img src="assets/images/logo-png.png" class="img-fluid brand1">
      </a>
      <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="collapse navbar-collapse" id="main_nav">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link header-brand-link header-brand-link1" href="index.php">Home </a> </li>
            <li class="nav-item"><a class="nav-link header-brand-link header-brand-link2" href="my-sustainable-restaurant-eng.php">My Sustainable Restaurant</a></li>
            <li class="nav-item dropdown" id="myDropdown">
              <a class="nav-link header-brand-link dropdown-toggle header-brand-link3" href="the-msr-chapter-guide-eng.php" data-bs-toggle="dropdown">The MSR Chapter Guide <span class="i1"><i class="fa fa-chevron-down"></i></span> </a>
              <ul class="dropdown-menu" id="ulmain">
                <li><a class="dropdown-item hov-item" href="the-msr-chapter-guide-eng.php">Chapters </a></li>
                <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php">Sustainable Menu <i class="fa fa-chevron-right"></i></a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item hov-item2" href="introduction-to-sustainable-menu-eng.php">Overview <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option1">Why it is important to offer a sustainable menu</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-sustainable-menu-eng.php#option6">Steps to create sustainable menu</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option1">How to create sustainable menu</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option2">Simple ways to create sustainable menu</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option3">Good to know - Different ways of eating</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option4">Advance ways to create sustainable menu</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option5">Highlight your sustainable menu</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option6">Lena's kitchen</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option7">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-sustainable-menu-eng.php#option8">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php">Responsible Sourcing <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-responsible-sourcing-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option1">How to source products responsibly for restaurants </a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-responsible-sourcing-eng.php#option6">SSteps to source responsibly</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-responsible-sourcing-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option1">How to source responsibly</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option2">The importance of sourcing responsibly</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option3">Good to know - schemes that help you find your way</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option4">Non-certified sustainable products</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option5">The comprehensive guide to sustainable products</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option6">Simple ways to source responsibly</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option7">Advanced ways to source responsibly</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option8">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-responsible-sourcing-eng.php#option9">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php">Food Waste <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-food-waste-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option1">Why we need to reduce food waste</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-food-waste-eng.php#option6">Steps to avoid food waste</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-food-waste-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option1">How to reduce food waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option2">Landfills should be the last place for food waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option3">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option4">Simple ways to prevent food waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option5">Advanced ways to reduce food waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option6">Learn to make more out of food scraps</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option7">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-food-waste-eng.php#option8">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php">Plastic Waste <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-plastic-waste-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option1">The role of plastic in gastronomy</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-plastic-waste-eng.php#option6">Steps to minimize plastic waste</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-plastic-waste-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option1">How to avoid plastic waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option2">How to prevent plastic waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option3">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option4">Simple ways to prevent plastic waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option5">Advanced ways to save plastic waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option6">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-plastic-waste-eng.php#option7">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php">Safe Food <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-safe-food-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option1">Why we need to talk about safe food</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-safe-food-eng.php#option6">Steps to ensure safe food</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-safe-food-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-safe-food-eng.php#option1">How to ensure safe food</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-safe-food-eng.php#option2">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-safe-food-eng.php#option3">Three steps to food safety</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-safe-food-eng.php#option4">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-safe-food-eng.php#option5">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-energy-eng.php">Energy <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-energy-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option1">How to use less energy in your restaurant and save cost</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-energy-eng.php#option6">Steps to reduce energy consumption</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-energy-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option1">How to use energy efficiently</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option2">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option3">Simple ways to save energy</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option4">Advanced ways to save energy</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option5">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-energy-eng.php#option6">Your action plan</a></li>

                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-water-eng.php">Water <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-water-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option1">How to save water in your restaurant</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-water-eng.php#option6">Steps to save water</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-water-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option1">How to use water responsibly</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option2">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option3">Simple ways to save water</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option4">Advanced ways to save water</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option5">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-water-eng.php#option6">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-waste-eng.php">Waste <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-waste-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option1">The problem with waste</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-waste-eng.php#option6">Steps to reduce waste</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-waste-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option1">How to use reduce waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option2">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option3">Simple steps to start managing waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option4">How to maximise sorting waste</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option5">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-waste-eng.php#option6">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a class="dropdown-item hov-item" href="introduction-to-social-eng.php">Social <i class="fa fa-chevron-right"></i> </a>
                  <ul class="submenu dropdown-menu">
                    <li class="ddnLvl1"><a class="dropdown-item" href="introduction-to-social-eng.php">Overview <i class="fa fa-chevron-right"></i> </a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option1">Why the gastronomy industry must engage socially</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option2">Did you know that...</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option3">The big issue</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option4">Benefits</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option5">The greater impact</a></li>
                        <li><a class="dropdown-item hov-item" href="introduction-to-social-eng.php#option6">Steps to act socially</a></li>
                      </ul>
                    </li>
                    <li class="ddnLvl1"><a class="dropdown-item" href="explore-social-eng.php">How to <i class="fa fa-chevron-right"></i></a>
                      <ul class="submenu dropdown-menu">
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option1">How to engage socially as a restaurateur</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option2">Good to know</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option3">The 7 Basic Human Rights</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option4">Ways to be socially engaged as a restaurateur</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option5">Track and talk about your progress</a></li>
                        <li><a class="dropdown-item hov-item" href="explore-social-eng.php#option6">Your action plan</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>


            <li class="nav-item dropdown dynamic-li1" id="myDropdown">
              <a class="nav-link header-brand-link dropdown-toggle active-link page-title-nav-link d-li1" href="#" data-bs-toggle="dropdown"><span id="cur_page">PAGE_TITLE</span> <span class="i1"><i class="fa fa-chevron-down"></i></span> </a>
              <ul class="dropdown-menu" id="chapterddn">
              </ul>
            </li>
            <li class="nav-item dropdown dynamic-li1" id="myDropdown">
              <a class="nav-link header-brand-link dropdown-toggle d-li2" href="#" data-bs-toggle="dropdown">Overview <span class="i1"><i class="fa fa-chevron-down"></i></span></a>
              <ul class="dropdown-menu" id="l3ddn">
              </ul>
            </li>
            <li class="nav-item dropdown dynamic-li1" id="myDropdown">
              <a class="nav-link header-brand-link dropdown-toggle d-li3" href="#" data-bs-toggle="dropdown">How to <span class="i1"><i class="fa fa-chevron-down"></i></span></a>
              <ul class="dropdown-menu" id="l4ddn">
              </ul>
            </li>
            <li class="nav-item dynamic-li2"><a class="nav-link header-brand-link d-li4 active-link dynamic9" href="#"></a></li>
          </ul>
        </div>
        <div class="d-flex">
          <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
          <button class="btn search-btn" type="submit" id="searchq1">
            <i class="fa fa-2x fa-search text-theme-yellow"></i>
          </button>
          <div class="custom__select top-mar-less">
            <select>
              <option id="lange" value="explore-sustainable-menu-eng.php" selected>ENG</option>
              <option id="langd" value="explore-sustainable-menu-deu.php">DEU</option>
            </select>
          </div>
          <div id="nav-icon4" class="burger">
            <span></span>
            <span></span>
            <span></span>
          </div>

          <div class="new_header header-menu">
            <nav2>
              <ul class="main">
                <li>
                  <a href="index.php">Home</a>
                </li>
                <li>
                  <a href="my-sustainable-restaurant-eng.php">My Sustainable Restaurant</a>
                </li>
                <li>
                  <a href="the-msr-chapter-guide-eng.php">The MSR Chapter Guide</a>
                </li>
                <div class="sub_menuUi">
                  <li>
                    <a href="introduction-to-sustainable-menu-eng.php">Sustainable Menu</a>
                  </li>
                  <li>
                    <a href="introduction-to-responsible-sourcing-eng.php">Responsible Sourcing</a>
                  </li>
                  <li>
                    <a href="introduction-to-food-waste-eng.php">Food Waste</a>
                  </li>
                  <li>
                    <a href="introduction-to-plastic-waste-eng.php">Plastic Waste</a>
                  </li>
                  <li>
                    <a href="introduction-to-safe-food-eng.php">Safe Food</a>
                  </li>
                  <li>
                    <a href="introduction-to-energy-eng.php">Energy</a>
                  </li>
                  <li>
                    <a href="introduction-to-water-eng.php">Water</a>
                  </li>
                  <li>
                    <a href="introduction-to-waste-eng.php">Waste</a>
                  </li>
                  <li>
                    <a href="introduction-to-social-eng.php">Social</a>
                  </li>
                </div>
                <li>
                  <a href="https://www.metroag.de/en/contact" target="_blank">Contact</a>
                </li>
              </ul>
              <!-- <div class="about"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p></div> -->
              <div class="social">
                <p>Hilfreiche Links</p>
                <a href="https://www.menukithd.com/" target="_blank">
                  <img src="assets/images/logo-dish.png" style="width: 5rem;">
                </a>
                <a href="https://www.dish.co/DE/en/" target="_blank">
                  <img src="assets/images/Dish_Logo-svg.svg" style="width: 3rem;">
                </a>
                <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank">
                  <img src="assets/images/Protrace_Logo-ai.svg" style="width: 2rem;">
                </a>
              </div>

              <div class="footer-socials-sidenav side_nav">
                <ul>
                  <li>
                    <a href="https://www.facebook.com/metro.deutschland" target="_blank">
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.youtube.com/user/MetroGrossmarkt" target="_blank">
                      <i class="fa fa-youtube-play"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/metro_mpulse/ " target="_blank">
                      <i class="fa fa-instagram"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://www.linkedin.com/company/metro-ag" target="_blank">
                      <i class="fa fa-linkedin"></i>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/@METRO_News" target="_blank">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </nav2>
            <div class="overlay2"></div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="searchbox">
    <div class="input-group mb-3">
      <input id="sq1" type="text" class="form-control" value="" placeholder="" aria-label="" aria-describedby="button-addon2">
      <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i class="bi bi-x"></i></button>
    </div>
  </div>

  <?php include "includes/loader.php"; ?>

  <div class="container-full" style="margin-top: 2rem;">
    <div class="page-3_stage page-4_stage">
      <section class="section1 no-print" id="option1" data-scrl="How to create a sustainable menu">
        <div class="left-content">
          <h3>How to create a <br> Sustainable Menu</h3>
          <div class="right-content_mobile">
          <img src="assets/prev/images/page3banner.svg" />
        </div>
          <h4>Sustainability and Your Menu</h4>
          <p>Put sustainability on the menu and you can visibly demonstrate your engagement for a food future that respects the health of the planet and its communities. With conscious choices you will win customers and employees over. By carefully picking the products you use, you can create a positive impact on the environment as well as on the health of your customers. Just think about more regional, more organic, less sugar, less salt.<span id="dots"></span>

          </p>
          <!-- <button class="read-more-btn" href="#" id="myBtn" onclick="expand-next('#more')">Read more</button> -->
          <button class="read-more-btn" href="#" id="myBtn" target="#more">Read more</button>
        </div>
        <div class="right-content">
          <img src="assets/prev/images/page3banner.svg" />
        </div>
      </section>
      <section class="section-text container" id="more">
        <div class="section-text-inner">
          <p> <strong>Many customers </strong> will appreciate your efforts. In addition to a growing number of established consumers, the younger generation cares about the environment and how people are treated. By being more sustainable, you will build a positive image with your customers and create opportunities to win new ones. It is also an opportunity to differentiate yourself from other competitors and you will automatically create a positive impact for your existing and potential employees. Furthermore, your activities will have a positive, restorative impact on the environment and your local community. Your business will be future proof, because you can build a stable, profitable business when you buy products that are sourced and produced sustainably. As a restaurateur, you can have a real impact on the health of your community and environment through the meals you serve. </p>
        </div>

      </section>

      <section class="section-simple no-print" id="option2" data-scrl="Simple ways to create a sustainable menu">
        <div class="section-simple-way text-center">
          <h3>Simple ways to create a Sustainable Menu</h3>
          <p>As restaurateur there are many ways how to make your menu sustainable. But as individual communities have different ideas of what constitutes a sustainable plate, you can employ the following steps according to your location and customers.</p>
        </div>
      </section>
      <section class="section-slider1 section-slider2 no-print">
        <div class="section-slider-center text-center">
          <div class="wrap" style="z-index: 0;">
            <div class="slider2">
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle11">
                    Source locally,
                    regionally
                    and in season
                   <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i>
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle9">
                    Reduce the
                    size of
                    your menu
                  <br>  <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle8">
                    Engage
                    your staff
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle10">
                    Introduce
                    smaller
                    portion sizes
                    as an option
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>
              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle12">
                    Use less
                    and
                    better meat
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle13">
                    Go for vegetables
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle14">
                    Use sustainable fish
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle15">
                    Experiment with plant
                    proteins
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle16">
                    Avoid highly processed ingredients
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>

              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle17">
                    Put food on the menu
                    that does justice to everyone
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>


              <div class="item">
                <div class="inner-item">
                  <button class="modal-toggle18">
                    Introduce diverse grains
                   <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i>
                  </button>
                </div>
              </div>


            </div>
          </div>

        </div>
      </section>
      <section class="section-slider1 no-print spacerx" id="option3" data-scrl="Good to know - different ways of eating">
        <div class="section-slider-center text-center">
          <div class="wrap" style="z-index: 0;">
            <h3>Good to know - Different ways of eating </h3>
            <!---////////////////////////////////////////-->
            <div class="slider">

              <div class="item vegan-item">
                <div class="inner-item modal-toggle1">
                  <span class="icon-list">
                    <img src="assets/prev/images/i1-svg.svg" />
                  </span>
                  <button class="modal-togg">Vegan<br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="item vegi-item">
                <div class="inner-item modal-toggle2">
                  <span class="icon-list">
                    <img src="assets/prev/images/i5-svg.svg" />
                  </span>
                  <button class="modal-togg">Vegetarian <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>

              <div class="item paleo-item">
                <div class="inner-item modal-toggle3">
                  <span class="icon-list">
                    <img src="assets/prev/images/i7-svg.svg" />
                  </span>
                  <button class="modal-togg">Paleo <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="item keto-item">
                <div class="inner-item modal-toggle4">
                  <span class="icon-list">
                    <img src="assets/prev/images/i8-svg.svg" />
                  </span>
                  <button class="modal-togg">Keto <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="item fruiti-item">
                <div class="inner-item modal-toggle5">
                  <span class="icon-list">
                    <img src="assets/prev/images/i4-svg.svg" />
                  </span>
                  <button class="modal-togg">Fruitarian <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="item omin-item">
                <div class="inner-item modal-toggle6">
                  <span class="icon-list">
                    <img src="assets/prev/images/i4-svg.svg" />
                  </span>
                  <button class="modal-togg">Omnivore <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>
              <div class="item flexit-item">
                <div class="inner-item modal-toggle7">
                  <span class="icon-list">
                    <img src="assets/prev/images/i3-svg.svg" />
                  </span>
                  <button class="modal-togg">Flexitarian <br> <i class="fa fa-plus-circle responsive_main" aria-hidden="true"></i></button>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>
      <section class="section-text-withimages section4-4 more-text no-print" id="option4" data-scrl="Advanced ways to create a sustainable menu">
        <div class="left-content">
          <h3>Advanced ways to create a sustainable menu.
            Learn all about
            diversifying protein </h3>
            <div class="right-content_mobile">
          <img src="assets/prev/images/div-protein.svg" />
        </div>
          <p>Around the world, we get our protein from different sources including plants, meat, and fish. The problem is that protein from most industrially farmed animal sources is bad for the environment owing to the methane emissions (which are converted to carbon dioxide), the abuse of water, and contamination of soil and water courses. Animal welfare is frequently ignored.<span id="dots"></span>
            <br><br>
            <span id="more1">Farmed fish also has environmental impacts, such as water pollution and the release of diseases to wild fish. In turn, the number of wild fish is steadily decreasing and becoming contaminated with microplastics.
            <br style="display: block;"><br style="display: block;">
              Consumers are ever more aware of the impact that their eating has on the environment. How we eat protein now and the way we will eat protein in the future is frequently a subject of attention in the news and on social media. You can be innovative in this space and show your customers how you really have a handle on a major sustainability topic through your menu. Additionally, customers are increasingly prepared to pay more for responsibly sourced protein.
              <br style="display: block;"><br style="display: block;">
              Fortunately, there are many solutions that you can choose to include conscious proteins into your sustainable menu. When you choose a conscious protein approach you will have a key element of your sustainable menu established and you will create a positive impact on the health of our planet
            </span>
          </p>
          <button class="read-more-btn" id="myBtn1">Read more</button>
        </div>
        <div class="right-content">
          <img src="assets/prev/images/div-protein.svg" />
        </div>
      </section>
      <section class="container w100p no-print">
        <ul class="grid--what">
          <li>
            <div class="grid--content more-text">
              <span class="text-img"><img src="assets/prev/images/grid1.svg" /></span>
              <h5>Why do we need<br>proteins?</h5>
              <p id="more2">Protein is an essential part of our diet and according to a person’s age, health and level of activity needs to be eaten in varying amounts. Protein is needed for the growth and repair of muscles as well as the proper functioning of hormones, enzymes and antibodies. All of this contributes to a healthy body that functions well. Proteins are made up from a mixture of twenty building blocks or amino acids. Different foods contain different amino acids. It is important to eat a variety of foods in order to get the right amino acids. Because of their different amino acid content, proteins can be divided into complete (meat, fish, eggs, milk, cheese) and incomplete (beans, nuts, seeds, tofu etc). Incomplete proteins can provide the right amino acids if they are mixed for example in a dish made with rice and peas.</p>
              <button class="read-more-btn" id="myBtn2">Read more</button>
            </div>
          </li>
          <li>

            <div class="grid--content more-text">
              <span class="text-img"><img src="assets/prev/images/grid2.svg" /></span>
              <h5>Conscious <br> protein</h5>
              <p id="more3">Conscious protein describes an approach which is based on consuming a diverse source of sustainable protein and the awareness of people in their eating habits. Conscious proteins include, for instance conventional, proteins obtained from animals that were raised to high welfare standards as well as alternative protein from plant sources.
                <br>
                <br><b><strong style="font-size: larger;">Animal proteins <strong></strong></strong></b> are from meat and fish raised responsibly. It includes products like eggs and milk.Animal proteins that come from responsibly raised meat or fish means high welfare, fed with sustainable feed and in the case of ruminants grazed on pasture, responsible use of water, assured welfare, responsible use of animal treatments for example antibiotics, a positive impact on biodiversity for example by using heritage breeds, traceable and workers’ rights are assured.
                <br><br>
                <b> <strong style="font-size: larger;">Plant proteins <strong></strong></strong></b> are whole ingredients which include beans, grains, pulses, nuts, chickpeas, ancient grains such as quinoa and minimally processed ingredients such as tofu, tempeh and seitan. Produced responsibly means, for example, that responsible tofu would be from soy beans grown on non-deforested land and responsible nuts would be grown in orchards where water is managed responsibly.
                <br><br>

                <b><strong style="font-size: larger;">Alternative proteins <strong></strong></strong></b> are either not commonly eaten or are completely new, being produced with novel (new) technologies and ingredients. Exciting work is underway around the world to reproduce meat in laboratories. There is some way to go before it can be considered completely sustainable due to for example the energy required to produce the proteins. The cost remains prohibitive and for some people lab meat is a taboo. Meanwhile it is worth keeping a close eye on developments as this field of research is changing rapidly. In East Asia, for example, fish has been successfully reproduced and marketed. Produced responsibly means, for example, responsible pea protein would be from peas grown on non-deforested land.
              </p>
              <button class="read-more-btn" id="myBtn3">Read more</button>
            </div>
          </li>
          <li>
            <div class="grid--content more-text">
              <span class="text-img"><img src="assets/prev/images/grid4.svg" /></span>
              <h5>Foraging from <br> the wild</h5>
              <p id="more4">Discovering local and wild ingredients connects us to the natural environment. A growing movement of chefs have adopted this ancient practice of foraging, where they roam the uncultivated land closest to their restaurants. They dig, clip and pick the freshest ingredients to complement their menus which are usually lead by the seasons.
                In recent history, René Redzepi of Noma in Denmark popularised the concept and since then several chefs around the world have started foraging. While still niche, the foraging chefs have a strong connection to their communities, for example, Aidan Brookes of eleven98 in London. They raise awareness of eating sustainably, slowly building a wave towards a greater respect of the local environment and the need to look after their communities. Be inspired by chefs such as Ana Ros of Hisa Franko in Slovenia, Prateek Sadhu of Masque in India, HisotoNakahigashi of Miyamasou in Japan, Wojciech Modest Amaro of Atelier Amaro in Poland and Ricky Saward of Seven Swans Must Die in Germany.
              </p>
              <button class="read-more-btn" id="myBtn4">Read more</button>
            </div>
          </li>
        </ul>

      </section>

      <section class="section-highlight-withimages  section4-5 no-print mobile_show" id="option5" data-scrl="Highlight your sustainable menu">
        <div class="top-highlight text-center">
          <h3>Highlight your Sustainable Menu </h3>
          <p>It’s crucial that customers understand what you are doing. There are some things you can do to make your philosophy clear:</p>
        </div>
        <div class="mid-highlight container ">
        <div class="circle-setting-mobile">
            
          </div>
          <ul>
            <li>
              <div class="circle-content more-text">
              <span class="text-num">01</span>
                <h5>Explain sustainable <br> ingredients on your menu</h5>
                <p>Show where your ingredients are from and who has produced them. Explain the sustainability labels of your ingredients (check first that the label scheme owner allows this and make sure you have the certificates available). Let your customers know how the ingredient is produced. Explain when it is from a local farmer who follows sustainable principles but has decided not to be certified. It is important to make this clear to your customers. Highlight dishes with vegetables and wholegrains. Generally explain your sustainability philosophy and tell your dishes’ sustainable story wherever possible.
                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
              <span class="text-num">02</span>
                <h5>Highlight your <br> sustainable actions</h5>
                <p>Use your menu as an opportunity to show what you are doing as a restaurant to be more sustainable for example the way you manage food waste, food donations, involvement in your community. Invite customers to take food that they have not eaten home with them. In sustainable packaging of course!
                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
              <span class="text-num">03</span>
                <h5>Note allergies <br> and intolerances</h5>
                <p>Increasingly there are people with allergies and intolerances. The legal requirements to note these on the menu should be applied.

                </p>
              </div>
            </li>

          </ul>

          <div class="circle-setting">
            <img src="assets/prev/images/circle-icon.svg" />

          </div>
          <ul>
            <li>
              <div class="circle-content more-text">
              <span class="text-num">04</span>
                <h5>Describe the dishes <br> in an enticing way</h5>
                <div class="more-text">
                  <p>Consider that many consumers are used to choosing on the basis of taste and price. Sustainable ingredients often come after that. So focus on describing the taste first. Add descriptions depending on what would appeal to the type of customers you want to attract. For example :</p>
                  </p>
                  <div id="more6">
                    <ul>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>
                      <li>“Lemony fish cakes”
                        (house made with certified cod and served with salad and organic mayonnaise. A fresh burst of the ocean!)
                      </li>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>

                    </ul>
                  </div>
                  </p>

                  <button href="#" class="read-text" id="myBtn6">READ MORE</button>

              </div>
            </li>
            <li>
              <div class="circle-content more-text">
              <span class="text-num">05</span>
                <h5>Add information on the <br> origin of your ingredients</h5>
                <p>Consider adding information on the origin of your ingredients to your website and social media pages as well as in print or on your menu display. It will save space in the individual dish descriptions.

                </p>
                </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">06</span>
                <h5>Brief your serving staff </h5>
                <p>Ensure that they can deliver the information in a knowledgeable and convincing way.</p>
              </div>
            </li>

          </ul>

        </div>
      </section>
      <section class="section-highlight-withimages  section4-5 no-print desk_show" id="option5" data-scrl="Highlight your sustainable menu">
        <div class="top-highlight text-center">
          <h3>Highlight your Sustainable Menu </h3>
          <p>It’s crucial that customers understand what you are doing. There are some things you can do to make your philosophy clear:</p>
        </div>
        <div class="mid-highlight container ">
        <div class="circle-setting-mobile">
            <img src="assets/prev/images/circle-icon.svg" />

          </div>
          <ul>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">01</span>
                <h5>Explain sustainable <br> ingredients on your menu</h5>
                <p>Show where your ingredients are from and who has produced them. Explain the sustainability labels of your ingredients (check first that the label scheme owner allows this and make sure you have the certificates available). Let your customers know how the ingredient is produced. Explain when it is from a local farmer who follows sustainable principles but has decided not to be certified. It is important to make this clear to your customers. Highlight dishes with vegetables and wholegrains. Generally explain your sustainability philosophy and tell your dishes’ sustainable story wherever possible.
                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">03</span>
                <h5>Note allergies <br> and intolerances</h5>
                <p>Increasingly there are people with allergies and intolerances. The legal requirements to note these on the menu should be applied.

                </p>
              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">05</span>
                <h5>Add information on the <br> origin of your ingredients</h5>
                <p>Consider adding information on the origin of your ingredients to your website and social media pages as well as in print or on your menu display. It will save space in the individual dish descriptions.

                </p>
              </div>
            </li>

          </ul>

          <div class="circle-setting">
            <img src="assets/prev/images/circle-icon.svg" />

          </div>
          <ul>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">02</span>
                <h5>Highlight your <br> sustainable actions</h5>
                <p>Use your menu as an opportunity to show what you are doing as a restaurant to be more sustainable for example the way you manage food waste, food donations, involvement in your community. Invite customers to take food that they have not eaten home with them. In sustainable packaging of course!
                </p>

              </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">04</span>
                <h5>Describe the dishes <br> in an enticing way</h5>
                <div class="more-text">
                  <p>Consider that many consumers are used to choosing on the basis of taste and price. Sustainable ingredients often come after that. So focus on describing the taste first. Add descriptions depending on what would appeal to the type of customers you want to attract. For example :</p>
                  </p>
                  <div id="more6">
                    <ul>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>
                      <li>“Lemony fish cakes”
                        (house made with certified cod and served with salad and organic mayonnaise. A fresh burst of the ocean!)
                      </li>
                      <li>“Slow roasted smokey bean bowl”
                        (house made casserole with mixed organic beans, organic tomato and smoked pimento. Served with a side of wild rice. A delicious and filling protein fix!)
                      </li>

                    </ul>
                  </div>
                  </p>

                  <button href="#" class="read-text" id="myBtn6">READ MORE</button>
                </div>
            </li>
            <li>
              <div class="circle-content more-text">
                <span class="text-num">06</span>
                <h5>Brief your serving staff </h5>
                <p>Ensure that they can deliver the information in a knowledgeable and convincing way.</p>
              </div>
            </li>

          </ul>

        </div>
      </section>

      



      <section class="section-lena-kitchen container no-print" id="option6" data-scrl="Lena’s kitchen">
        <div class="section-lena text-center">
          <h3>LENA’S KITCHEN </h3>
          <p>Mirror your substainability philosophy on your menu! Here are examples how to do it:</p>
        </div>
        <ul class="section-lena-inner" id="accordion9">
          <li class="accordian1 accor">
            <div class="collapsible__header">OUR FOOD ORIGINS</div>
            <p class="collapsible__content">
              Salads and herbs are grown in our indoor garden. Most of our vegetables are from local farms. When we need to we use sources further away. <br> Beef is from cattle pastured locally at Valley farm. <br>Fish is responsibly sourced via Mr FishMarket. Bread is from Mrs Baker in town. <br> Please tell us if you have an allergy and we will do our best to help you choose a suitable meal!
            </p>
          </li>
          <li class="accordian2 accor">
            <div class="collapsible__header">CERTIFIED SOURCES</div>
            <p class="collapsible__content">
              Milk and cream are certified organic from Mrs Wholesale. <br>Soya ingredients come from certified non-deforested land via Mrs Wholesale. <br> Frying oil is certified sustainable palm from Mrs Wholesale.<br> Spices, chocolate, coffee and tea are ethically traded from Mrs Wholesale. <br> Chicken and eggs are from certified sustainable free-range farms via Mrs Wholesale.
            </p>
          </li>
          <li class="accordian3 accor">
            <div class="collapsible__header">WE DON´T LIKE WASTE</div>
            <p class="collapsible__content">We transform our unused bread into bread crumbs and ingredients for our dishes. <br>
              All our dishes are available in 'hungry’ and 'very hungry’ sizes. Please tell us which one you would prefer. If it turns out you have a little too much on your plate after you’re done, we will give you the rest to take home with you.
            </p>
          </li>
          <li class="accordian4 accor">
            <div class="collapsible__header">TO GO</div>
            <p class="collapsible__content">If you can't make it to Lena's kitchen yourself or are in a rush to go elsewhere, we have a delivery and takeaway service. Our containers are compostable at home. Soon we will offer a container deposit scheme so you can save even more <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">packaging</a> going to the rubbish bin! <br> Watch this space. </p>
          </li>
        </ul>
      </section>







      <section class="section-text-withimages section4-5 no-print" id="option7" data-scrl="Track and talk about your progress">
        <div class="left-content">
          <h3>Track and talk <br>
          
            about your progress</h3><div class="right-content_mobile">
          <img src="assets/prev/images/flag-p-svg.svg" />
        </div>
          <p>When you have implemented sustainable options in your menu, start measuring the impact for example via direct feedback from customers or from rating websites, number of orders or profitability of dishes. You could consider using a digital tool to track your recipes and the impact of being more sustainable. Be aware that “farm-to-table” restaurants continue to appeal to restaurant visitors. Connect your customers to the source of your ingredients by talking with them about your menu. Explain why you made the changes. If you have traceability information on your menu or your website explain how it works. As a business your impact on your community will be so much more when your customers and staff understand what you are doing. Some might copy your practices in their shopping decisions. Your impact could be greater than you imagine!</p>
        </div>
        <div class="right-content">
          <img src="assets/prev/images/flag-p-svg.svg" class="desk_show" />
        </div>
      </section>

      <section class="container section4-6 section-to-print" id="option8" data-scrl="Your action plan">
        <div class="top-content">
          <h3>Your Action Plan</h3>
        </div>
        <div class="mid-content cation-plan-section">
          <ul>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Put sustainable products on your menu and keep in mind that
                individual communities have different ideas of what constitutes a sustainable plate
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Create a menu that is inclusive for your customers meaning different portion sizes and options for different ways of eating
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Use less meat and fish and focus on vegetables or new kinds of proteins
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Highlight your sustainable ingredients on your menu and sustainable actions
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Inform and engage your staff
              </p>
            </li>
            <li>
              <label class="check-wrap">
                <input type="checkbox" checked="checked">
                <span class="checkmark"></span>
              </label>
              <p class="">
                Track and talk to
                your customers about
                your progress
              </p>
            </li>
            <li class="print-li"><button onclick="window.print();" class="no-print">Print</button></li>
          </ul>
        </div>
      </section>


      <div class="row">
        <div class="col-md-12 like-section">
            <h4>
                Was this article helpful?
            </h4>
            <button id="likeBtn" class="ripple">
                <i class="fa fa-thumbs-up"></i>
                <span class="liketxt">Yes!</span>
            </button>
        </div>
        <div class="col-md-12">
            <div class="sharing">
                <h4>
                    Share this page
                </h4>
                <a id="fb-share-button" class="sharebtn" onclick="shareOnFacebook()"><i class="fa fa-facebook"></i></a>
                        <a id="tw-share-button" class="sharebtn" onclick="shareOnTwitter()"><i class="fa fa-twitter"></i></a>
                        <a id="ld-share-button" class="sharebtn" onclick="shareOnLinkedIn()"><i class="fa fa-linkedin"></i></a>
                        <a id="mail-share-button" class="sharebtn" onclick="shareViaEmail()"><i class="fa fa-envelope"></i></a>
            </div>
        </div>
      </div>
      
      

      
    



      <section class="container mt-5 c9">
        <div class="section5">
          <div class="bottom-left">
            <div class="top-content5">
              <h3>METRO Solutions</h3>
              <p>METRO offers the digital tool PROTRACE where you can find out about both the product itself and the supply routes from its origin to the journey to METRO. </p>
              <p><strong>Applications that can support with menu design or communications are:</strong></p>
            </div>
            <div class="bottom-content5">
              <ul>
                <li>
                  <a href="https://www.menukithd.com/" target="_blank"> <img src="assets/prev/images/logo-dish.png" /></a>
                </li>
                <li>
                  <a href="https://www.dish.co/DE/en/" target="_blank"> <img src="assets/prev/images/Dish_Logo-svg.svg" /></a>
                </li>
                <li>
                  <a href="https://dataentry.protrace.metrosystems.net/login" target="_blank"> <img src="assets/prev/images/Protrace_Logo-ai.svg" /></a>
                </li>
              </ul>

            </div>
          </div>
          <div class="bottom-right">
            <div class="top-content5">
              <h3>METRO Offer</h3>
              <p>METRO supports you with a diverse product assortment and services for your sustainability strategy. Please check out the local METRO or makro website in your country. </p>
            </div>

          </div>
        </div>
      </section>

    </div>
  </div>

  <div class="footer-wrap no-print">
    <div class="logo-fooetr">
      <img src="assets/prev/images/footer-logo.svg" />
    </div>
    <div class="fotter-right footer-first-page">
      <div class="fotter-right-top">
        <div class="footer-links content-foo">
          <p>The METRO My Sustainable Restaurant is designed to help food business
            owners adopt a more sustainable future.</p>
        </div>
        <div class="footer-links link2">
          <ul>

            <li> <div class="footer_logo"><img src="assets/prev/images/footer-logo.svg"></div></li>
            <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>

            <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>

            <li><a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>

            <li><a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>

          </ul>

        </div>
        <div class="footer-links link3">
          <ul>
            <li><a href="#" title="">Link 1</a></li>

            <li><a href="#" title="">Link 1</a></li>

            <li><a href="#" title="">Link 1</a></li>

            <li><a href="#" title="">Link 1</a></li>

          </ul>
        </div>
      </div>
      <div class="footer-socials">
        <ul>
          <li><a href="#"> <i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        </ul>

      </div>
    </div>

    <div class="fotter-right page-ani-footer">
      <div class="fotter-right-top">
        <div class="footer-links link2">
          <ul>


            <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>

            <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>

            <li><a href="https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>

            <li><a href="https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>

          </ul>

        </div>
        <div class="footer-socials">
          <ul>
            <li><a href="https://www.facebook.com/HOSPITALITY.digitaI" target="_blank"> <i class="fa fa-facebook"></i></a></li>
            <li><a href="https://www.metroag.de/youtube" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
            <li><a href="https://www.instagram.com/metro_mpulse/" target="_blank"><i class="fa fa-instagram"></i></a></li>
            <li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="https://twitter.com/@METRO_News" target="_blank"><i class="fa fa-twitter"></i></a></li>
          </ul>

        </div>
      </div>

    </div>

  </div>

  <div class=" vegan-modal">
    <div class="modal-overlay1 modal-toggle1"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle1">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 veg-con">
          <h4>Vegan
          </h4>
          <p>No meat, poultry, fish, insects or ingredients that come from these sources. No processing aids for example isinglass used in some wine production, or non-food ingredients of animal origin. Nothing that involves harm or exploitation of animals. Honey is not eaten.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" vegi-modal">
    <div class="modal-overlay1 modal-toggle2"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle2">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 vegi-cont">
          <h4>Vegetarian
          </h4>
          <p>No meat, poultry or fish. Sometimes, no insects. Milk or egg products derived from live animals, such as cheese is allowed. Honey from bees is also allowed.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" paleo-modal">
    <div class="modal-overlay1 modal-toggle3"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle3">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 paleo-cont">
          <h4>Paleo
          </h4>
          <p>This diet is based only on foods that are believed to be found in the stone age. These are mainly meat, eggs, fruit, vegetables, nuts and honey.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" keto-modal">
    <div class="modal-overlay1 modal-toggle4"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle4">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 keto-cont">
          <h4>Keto
          </h4>
          <p>This diet is a very low-carbohydrate and higher-fat diet. It is similar in many ways to other low-carbohydrate diets.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" fruit-modal">
    <div class="modal-overlay1 modal-toggle5"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle5">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 fruit-cont">
          <h4>Fruitarian
          </h4>
          <p>Fruit only. The diet extends the concept of vegans and makes sure that the plants are not damaged through the harvest.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" omni-modal">
    <div class="modal-overlay1 modal-toggle6"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle6">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 omni-cont">
          <h4>Omnivore
          </h4>
          <p>Contains a variety of food of both plant and animal origin.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" flexi-modal">
    <div class="modal-overlay1 modal-toggle7"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle7">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Flexitarian
          </h4>
          <p>Meat, poultry or fish is eaten occasionally to balance a person’s nutritional needs. Some flexitarians also do this to be more considerate of their consumption of animal products and are often more conscious of animal welfare aspects.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="eng-modal">
    <div class="modal-overlay1 modal-toggle8"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle8">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-social-eng.php">Engage
              your staff</a>

          </h4>
          <ul>
            <li>Involve staff at the beginning and explain explain what you want to do and why. </li>
            <li>Your serving staff will be essential in communicating your philosophy and will be more convincing if included in your decisions.</li>
            <li>Examples of sustainable menus can help their understanding and encourage them to contribute ideas. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=" redu-modal">
    <div class="modal-overlay1 modal-toggle9"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle9">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-food-waste-eng.php">Reduce the
              size of
              your menu</a>

          </h4>
          <p>A smaller menu often indicates good quality and well controlled stock. It is the opportunity
            to use more seasonal products and to reduce food waste. Try to keep single ingredients to a minimum while keeping the classics that your customers love. If you make 80% revenue from 20% of your dishes be sure to keep these. Add a dish that changes with the day/month/season.
          </p>
        </div>
      </div>
    </div>
  </div>



  <div class=" set-modal">
    <div class="modal-overlay1 modal-toggle13"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle13">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Go for vegetables</h4>
          <ul>
            <li>Introduce (more) courts where
              vegetables play the leading role.</li>
            <li>Increase the amount of unprocessed
              vegetables on the plate compared to the meat or fish portion.</li>
            <li> Offer more dishes that are completely up
              vegetable based.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class=" ver-modal">
    <div class="modal-overlay1 modal-toggle14"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle14">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Use sustainable fish</h4>
          <ul>
            <li>Introduce uncommon species including those that are usually wasted or "by-catch".</li>
            <li>Feature fish that is caught responsibly i.e. certified, fully traceable.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class=" exp-modal">
    <div class="modal-overlay1 modal-toggle15"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle15">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Experiment with plant proteins</h4>
          <ul>
            <li>Use (more) whole plant proteins, for example, lentils, quinoa, teff, beans and seaweed.</li>
            <li>Use different processed plant proteins, for example, tofu, tempeh.</li>

          </ul>
        </div>
      </div>
    </div>
  </div>


  <div class=" neh-modal">
    <div class="modal-overlay1 modal-toggle16"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle16">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>Avoid highly processed ingredients </h4>
          <p>Be mindful of imitations of traditional ingredients. Often these are highly processed, high in sugar, salt, transfats, and are not particularly healthy.</p>
        </div>
      </div>
    </div>
  </div>



  <div class=" setsie-modal">
    <div class="modal-overlay1 modal-toggle17"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle17">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">
        <div class="modal-content1 flexi-cont">
          <h4>Introduce inclusive dishes</h4>
          <p>Offer dishes that accommodate different dietary preferences such as vegan.
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="introdiv-modal">
    <div class="modal-overlay1 modal-toggle18"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle18">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            Introduce diverse grains
          </h4>
          <p>Use ancient varieties of grains such as teff or those that are common to your region.
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class=" intro-modal">
    <div class="modal-overlay1 modal-toggle10"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle10">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            Introduce smaller portion sizes as an option
          </h4>
          <p>Many consumers are looking to reduce their consumption.This happens for health reasons, but it can also be an attractive element for diners with children. Increasingly restaurateurs recognize that children are best served with the same food as adults, albeit in a smaller portion.</p>
        </div>
      </div>
    </div>
  </div>
  <div class=" source-modal">
    <div class="modal-overlay1 modal-toggle11"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle11">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont">
          <h4>
            <a class="nodeco" href="introduction-to-responsible-sourcing-eng.php">Source locally, regionally and in season
</a>
          </h4>
          <p>Make an impact with responsible sourcing and only use responsibly sourced fish and food that is organic, nutritious, seasonal, ethically traded, local and regional. Moreover, try to buy foods that encourage biodiversity, do not involve waste and do not destroy forests. If you want to find out more, go to the responsible sourcing chapter. </p>
        </div>
      </div>
    </div>
  </div>

  <div class=" use-modal">
    <div class="modal-overlay1 modal-toggle12"></div>
    <div class="modal-wrapper1 modal-transition1">
      <button class="modal-close1 modal-toggle12">
        <svg class="icon-close icon" viewBox="0 0 32 32">
          <use xlink:href="#icon-close">
            <g id="icon-close">
              <path class="path1" d="M31.708 25.708c-0-0-0-0-0-0l-9.708-9.708 9.708-9.708c0-0 0-0 0-0 0.105-0.105 0.18-0.227 0.229-0.357 0.133-0.356 0.057-0.771-0.229-1.057l-4.586-4.586c-0.286-0.286-0.702-0.361-1.057-0.229-0.13 0.048-0.252 0.124-0.357 0.228 0 0-0 0-0 0l-9.708 9.708-9.708-9.708c-0-0-0-0-0-0-0.105-0.104-0.227-0.18-0.357-0.228-0.356-0.133-0.771-0.057-1.057 0.229l-4.586 4.586c-0.286 0.286-0.361 0.702-0.229 1.057 0.049 0.13 0.124 0.252 0.229 0.357 0 0 0 0 0 0l9.708 9.708-9.708 9.708c-0 0-0 0-0 0-0.104 0.105-0.18 0.227-0.229 0.357-0.133 0.355-0.057 0.771 0.229 1.057l4.586 4.586c0.286 0.286 0.702 0.361 1.057 0.229 0.13-0.049 0.252-0.124 0.357-0.229 0-0 0-0 0-0l9.708-9.708 9.708 9.708c0 0 0 0 0 0 0.105 0.105 0.227 0.18 0.357 0.229 0.356 0.133 0.771 0.057 1.057-0.229l4.586-4.586c0.286-0.286 0.362-0.702 0.229-1.057-0.049-0.13-0.124-0.252-0.229-0.357z"></path>
            </g>
          </use>
        </svg>
      </button>
      <div class="modal-body1">

        <div class="modal-content1 flexi-cont more-text">
          <div>
            <h4>
              Use less
              and
              better meat
            </h4>
            <p>If meat is the main feature of most of your dishes, you can reduce the portion of meat, poultry and fish. When you choose meat, poultry, pork and so on, look for sustainably sourced products. You can also include different parts of meat that are usually not used, in other words “nose to tail” eating.

            </p>
            <!-- <div class="listing-use" id="more13">
          </div>
          <button class="read-more-btn" href="#" id="myBtn13"">Read more</button>
                              </div> -->

          </div>
        </div>
      </div>
    </div>

    <script>
      var x, i, j, l, ll, selElmnt, a, b, c;
      /*look for any elements with the class "custom-select":*/
      x = document.getElementsByClassName("custom-select");
      l = x.length;
      for (i = 0; i < l; i++) {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;
        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);
        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");
        for (j = 1; j < ll; j++) {
          /*for each option in the original select element,
          create a new DIV that will act as an option item:*/
          c = document.createElement("DIV");
          c.innerHTML = selElmnt.options[j].innerHTML;
          c.addEventListener("click", function(e) {
            /*when an item is clicked, update the original select box,
            and the selected item:*/
            var y, i, k, s, h, sl, yl;
            s = this.parentNode.parentNode.getElementsByTagName("select")[0];
            sl = s.length;
            h = this.parentNode.previousSibling;
            for (i = 0; i < sl; i++) {
              if (s.options[i].innerHTML == this.innerHTML) {
                s.selectedIndex = i;
                h.innerHTML = this.innerHTML;
                y = this.parentNode.getElementsByClassName("same-as-selected");
                yl = y.length;
                for (k = 0; k < yl; k++) {
                  y[k].removeAttribute("class");
                }
                this.setAttribute("class", "same-as-selected");
                break;
              }
            }
            h.click();
          });
          b.appendChild(c);
        }
        x[i].appendChild(b);
        a.addEventListener("click", function(e) {
          /*when the select box is clicked, close any other select boxes,
          and open/close the current select box:*/
          e.stopPropagation();
          closeAllSelect(this);
          this.nextSibling.classList.toggle("select-hide");
          this.classList.toggle("select-arrow-active");
        });
      }

      function closeAllSelect(elmnt) {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;
        for (i = 0; i < yl; i++) {
          if (elmnt == y[i]) {
            arrNo.push(i)
          } else {
            y[i].classList.remove("select-arrow-active");
          }
        }
        for (i = 0; i < xl; i++) {
          if (arrNo.indexOf(i)) {
            x[i].classList.add("select-hide");
          }
        }
      }
      /*if the user clicks anywhere outside the select box,
      then close all select boxes:*/
      document.addEventListener("click", closeAllSelect);



      $('.slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             {
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });



      var imgs = $('.slider img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });

      $('.slider2').slick({
        slidesToShow: 3,
        arrows: true,
        dots: false,
        centerMode: true,
        variableWidth: true,
        infinite: true,
        focusOnSelect: true,
        cssEase: 'linear',
        touchMove: true,
        prevArrow: '<button class="slick-prev"> < </button>',
        nextArrow: '<button class="slick-next"> > </button>',

        //         responsive: [                        
        //             
        //               breakpoint: 576,
        //               settings: {
        //                 centerMode: false,
        //                 variableWidth: false,
        //               }
        //             },
        //         ]
      });

      var imgs = $('.slider2 img');
      imgs.each(function() {
        var item = $(this).closest('.item');
        item.css({
          'background-image': 'url(' + $(this).attr('src') + ')',
          'background-position': 'center',
          '-webkit-background-size': 'cover',
          'background-size': 'cover',
        });
        $(this).hide();
      });




      let collapsibleHeaders = document.getElementsByClassName('collapsible__header');

      Array.from(collapsibleHeaders).forEach(header => {
        header.addEventListener('click', () => {
          header.parentElement.classList.toggle('collapsible--open');
        });
      });

      // Quick & dirty toggle to demonstrate modal toggle behavior
      $('.modal-toggle1').on('click', function(e) {
        e.preventDefault();
        $('.vegan-modal').toggleClass('is-visible');
      });
      $('.modal-toggle2').on('click', function(e) {
        e.preventDefault();
        $('.vegi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle3').on('click', function(e) {
        e.preventDefault();
        $('.paleo-modal').toggleClass('is-visible');
      });
      $(' .modal-toggle4').on('click', function(e) {
        e.preventDefault();
        $('.keto-modal').toggleClass('is-visible');
      });
      $('.modal-toggle5').on('click', function(e) {
        e.preventDefault();
        $('.fruit-modal').toggleClass('is-visible');
      });
      $('.modal-toggle6').on('click', function(e) {
        e.preventDefault();
        $('.omni-modal').toggleClass('is-visible');
      });
      $('.modal-toggle7').on('click', function(e) {
        e.preventDefault();
        $('.flexi-modal').toggleClass('is-visible');
      });
      $('.modal-toggle8').on('click', function(e) {
        e.preventDefault();
        $('.eng-modal').toggleClass('is-visible');
      });
      $('.modal-toggle9').on('click', function(e) {
        e.preventDefault();
        $('.redu-modal').toggleClass('is-visible');
      });
      $('.modal-toggle10').on('click', function(e) {
        e.preventDefault();
        $('.intro-modal').toggleClass('is-visible');
      });
      $('.modal-toggle11').on('click', function(e) {
        e.preventDefault();
        $('.source-modal').toggleClass('is-visible');
      });
      $('.modal-toggle12').on('click', function(e) {
        e.preventDefault();
        $('.use-modal').toggleClass('is-visible');
      });

      $('.modal-toggle13').on('click', function(e) {
        e.preventDefault();
        $('.set-modal').toggleClass('is-visible');
      });
      $('.modal-toggle14').on('click', function(e) {
        e.preventDefault();
        $('.ver-modal').toggleClass('is-visible');
      });
      $('.modal-toggle15').on('click', function(e) {
        e.preventDefault();
        $('.exp-modal').toggleClass('is-visible');
      });
      $('.modal-toggle16').on('click', function(e) {
        e.preventDefault();
        $('.neh-modal').toggleClass('is-visible');
      });
      $('.modal-toggle17').on('click', function(e) {
        e.preventDefault();
        $('.setsie-modal').toggleClass('is-visible');
      });

      $('.modal-toggle18').on('click', function(e) {
        e.preventDefault();
        $('.introdiv-modal').toggleClass('is-visible');
      });


      $(document).on('click', '.read-more-btn, .read-text', function() {
        var $el = $(this),
          $el_wrap = $el.closest('.more-text'),
          $content = $el_wrap.find('[id^="more"]'),
          target = $el.attr('target');
        if (target != null) {
          $content = $(target);
        }
        if ($content.hasClass('active')) {
          $content.slideUp('fast').removeClass('active');
          $el.html('Read more').removeClass('btn-active');
        } else {
          $content.slideDown('fast').addClass('active');
          $el.html('Read less').addClass('btn-active');
        }
      });
    </script>

    <script src="assets/prev/jquery/page1.js"></script>

    <script type="text/javascript" src="assets/prev/assets/js/common.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", function() {
        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

          // close all inner dropdowns when parent is closed
          document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
            everydropdown.addEventListener('hidden.bs.dropdown', function() {
              // after dropdown is hidden, then find all submenus
              this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                // hide every submenu as well
                everysubmenu.style.display = 'none';
              });
            })
          });
          //hover reference https://stackoverflow.com/questions/8318591/javascript-addeventlistener-using-to-create-a-mouseover-effect
          document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
            element.addEventListener('click', function(e) {
              let nextEl = this.nextElementSibling;
              if (nextEl && nextEl.classList.contains('submenu')) {
                // prevent opening link if link needs to open dropdown
                e.preventDefault();
                if (nextEl.style.display == 'block') {
                  nextEl.style.display = 'none';
                } else {
                  nextEl.style.display = 'block';
                }

              }
            });
          });
        }
        // end if innerWidth
      });
      // DOMContentLoaded  end
    </script>

    <script>
      $(document).ready(function() {
        var cur_page_name = "Sustainable Menu";
        var cur_nav_link_id = "3";
        var eng_page_path = "explore-sustainable-menu-eng.php";
        var deu_page_path = "explore-sustainable-menu-deu.php";
        //manipulation
        pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
        var menuIdVal = "0";
        menumanipulation(menuIdVal, "e");


         //like share stats
        $(document).ready(function(){
            $.ajax({
                url : 'isliked.php?q=SUSTAINABLE MENU',
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
                url : 'isliked.php?q=SUSTAINABLE MENU',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        //dislike
                        $.ajax({
                            url : 'dislike.php?q=SUSTAINABLE MENU',
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
                            url : 'like.php?q=SUSTAINABLE MENU',
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
      });
    </script>

  

    <script src="assets/js/navigation.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/pageparams.js"></script>
    <script src="assets/js/likeshare-eng.js"></script>


    <script>
        function shareOnFacebook() {
  // Get the current page URL
  var currentURL = window.location.href;

  // Construct the Facebook share URL
  var facebookShareURL = 'https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(currentURL);

  // Open the Facebook sharing dialog
  window.open(facebookShareURL, '_blank');
}

function shareOnTwitter() {
  // Get the current page URL
  var currentURL = window.location.href;

  // Construct the Twitter share URL
  var twitterShareURL = 'https://twitter.com/intent/tweet?url=' + encodeURIComponent(currentURL);

  // Open the Twitter sharing dialog
  window.open(twitterShareURL, '_blank');
}


function shareOnLinkedIn() {
  // Get the current page URL
  var currentURL = window.location.href;

  // Construct the share content
  var shareContent = 'Check out this link: ' + currentURL;

  // Encode the share content
  var encodedShareContent = encodeURIComponent(shareContent);

  // Construct the LinkedIn share deeplink URL
  var linkedInDeeplinkURL = 'linkedin://shareArticle?mini=true&url=' + encodedShareContent;

  // Attempt to open the LinkedIn app
  window.location.href = linkedInDeeplinkURL;

  // Fallback for opening the LinkedIn website
  setTimeout(function() {
    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + encodedShareContent, '_blank');
  }, 500);
}



function shareViaEmail() {
  // Get the current page URL
  var currentURL = window.location.href;

  // Construct the email subject
  var emailSubject = 'Check out this link';

  // Construct the email body
  var emailBody = 'I found this interesting link and wanted to share it with you:\n\n' + currentURL;

  // Construct the mailto link
  var mailtoLink = 'mailto:?subject=' + encodeURIComponent(emailSubject) + '&body=' + encodeURIComponent(emailBody);

  // Open the email client
  window.open(mailtoLink, '_blank');
}


    </script>


</body>


</html>