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
        body {
            overflow: auto;
        }

        .w100p1 {
            width: 100%;
            max-width: 100%;
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

        .section-lena-inner {
            padding-left: 0;
        }

        .navbar-expand-lg .navbar-nav .dropdown-menu {
            width: unset;
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
                        <li class="nav-item"><a class="nav-link header-brand-link header-brand-link1" href="home.php">Home </a> </li>
                        <li class="nav-item"><a class="nav-link header-brand-link header-brand-link2" href="my-sustainable-restaurant-deu.php">Mein Nachhaltiges Restaurant</a></li>
                        <li class="nav-item dropdown" id="myDropdown">
                            <a class="nav-link header-brand-link dropdown-toggle header-brand-link3" href="the-msr-chapter-guide-deu.php" data-bs-toggle="dropdown">Kapitelübersicht <span class="i1"><i class="fa fa-chevron-down"></i></span> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item hov-item" href="the-msr-chapter-guide-deu.php">Kapitelübersicht </a></li>
                                <li> <a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php">Nachhaltige Speisekarte <i class="fa fa-chevron-right"></i></a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php">Übersicht <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option1">Warum es wichtig ist, ein nachhaltiges Menü anzubieten</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-sustainable-menu-deu.php#option6">Mit einfachen Schritten zur nachhaltigen Speisekarte</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option1">So wird Ihre Speisekarte nachhaltiger</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option2">Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option3">Gut zu wissen – Unterschiedliche Ernährungsformen</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option4">Erfahren Sie alles über die Diversifizierung von Proteinen</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option5">Heben Sie nachhaltige Gerichte hervor</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option6">Lenas Küche</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option7">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-sustainable-menu-deu.php#option8">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php">Verantwortungsbewusstes Einkaufen <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option1">Wie man Produkte für Restaurants verantwortungsbewusst einkauft</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-responsible-sourcing-deu.php#option6">ERSTE SCHRITTE WIE SIE VERANTWORTUNGSBEWUSST EINKAUFEN</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option1">Wie Sie verantwortungsbewusst Einkaufen</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option2">Die Bedeutung eines verantwortungsbewussten Einkaufs</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option3">Gut zu Wissen – Siegel und Zertifizierungen können Ihnen Helfen, Ihren Weg zu findenGood to know</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option4">Nicht-zertifizierte nachhaltige Produkte</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option5">Der umfassende Leitfaden für nachhaltige Produkte</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option6">Tipps für Einsteiger, um verantwortungsbewusst Einzukaufen</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option7">Tipps für Fortgeschrittene, um verantwortungsbewusst Einzukaufen</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option8">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-responsible-sourcing-deu.php#option9">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-food-waste-deu.php">Lebensmittelverluste <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option1">Warum wir die Menge an Lebensmittelabfällen reduzieren müssen</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-food-waste-deu.php#option6">Erste Schritte, wie Sie die Menge an Lebensmittelabfällen verringern</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-food-waste-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option1">Wie Sie Lebensmittelabfälle reduzieren</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option2">Mülldeponien sollten der letzte Ort sein, <br>auf dem nicht benötigte Lebensmittel landen</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option3">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option4">Tipps für Einsteiger, um Lebensmittelabfälle zu reduzieren</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option5">Tipps für Fortgeschrittene, um die Menge an Lebensmittelabfällen zu reduzieren</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option6">Kompostieren Sie Lebensmittelabfälle</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option7">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-food-waste-deu.php#option8">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-plastic-waste-deu.php">Plastikmüll <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option1">Die Bedeutung von Plastik in der Gastronomie</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-plastic-waste-deu.php#option6">Erste Schritte, wie Sie Plastikmüll reduzieren</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-plastic-waste-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option1">Wie Sie Plastikmülll vermeiden</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option2">Wie Sie Plastikmülll vermeiden</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option3">Wie Sie Plastikmüll vermeiden</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option4">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option5">Tipps für Einsteiger, um Plastikmüll zu vermeiden</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option6">Tipps für Fortgeschrittene, um Plastikmüll zu vermeiden</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option7">Überprüfen Sie ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-plastic-waste-deu.php#option8">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-safe-food-deu.php">Lebensmittelsicherheit <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option1">Warum wir über Lebensmittelsicherheit sprechen müssen</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-safe-food-deu.php#option6">Erste Schritte, wie Sie Lebensmittelsicherheit sicherstellen</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-safe-food-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-safe-food-deu.php#option1">Lebensmittelsicherheit ist die Basis</a></li>
                                                <li><a class="dropdown-item" href="explore-safe-food-deu.php#option2">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-safe-food-deu.php#option3">Drei Schritte für mehr Lebensmittelsicherheit</a></li>
                                                <li><a class="dropdown-item" href="explore-safe-food-deu.php#option4">Überprüfen Sie Ihre Fortschritte und reden Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-safe-food-deu.php#option5">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-energy-deu.php">Energie <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-energy-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option1">Wie Sie in Ihrem Restaurant weniger Energie verbrauchen und damit Kosten sparen</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-energy-deu.php#option6">Erste Schritte, wie Sie den Energieverbrauch senken</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-energy-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option1">Wie man Energie effizient nutzt</a></li>
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option2">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option3">Tipps für Einsteiger, um Energie zu sparen</a></li>
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option4">Tipps für Fortgeschrittene, um Energie zu sparen</a></li>
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option5">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-energy-deu.php#option5">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-water-deu.php">Wasser <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-water-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option1">Wie Sie in Ihrem Restaurant Wasser sparen können</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-water-deu.php#option6">Erste Schritte, wie Sie Wasser sparen</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-water-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option1">Wie man Wasser verantwortungsvoll nutzt</a></li>
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option2">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option3">Tipps für Einsteiger, um Wasser zu sparen</a></li>
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option4">Tipps für Fortgeschrittene, um Wasser zu sparen</a></li>
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option5">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-water-deu.php#option6">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-waste-deu.php">Abfälle <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-waste-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option1">Das Problem mit dem Abfall</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-waste-deu.php#option6">Erste Schritte, wie Sie Abfall vermeiden</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-waste-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option1">Wie man Abfall reduziert</a></li>
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option2">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option3">Tipps für Einsteiger, um weniger Abfall zu produzieren</a></li>
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option4">Wie Sie das Beste aus Ihrem Abfall herausholen</a></li>
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option5">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-waste-deu.php#option6">Ihr Aktionsplan</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="dropdown-item" href="introduction-to-social-deu.php">Gemeinschaft <i class="fa fa-chevron-right"></i> </a>
                                    <ul class="submenu dropdown-menu">
                                        <li><a class="dropdown-item" href="introduction-to-social-deu.php">Übersicht <i class="fa fa-chevron-right"></i> </a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option1">Warum sich das Gastgewerbe sozial engagieren muss</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option2">Wussten Sie, dass…</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option3">Ein wichtiges Thema</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option4">Vorteile</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option5">Ein gesellschaftlicher Trend</a></li>
                                                <li><a class="dropdown-item" href="introduction-to-social-deu.php#option6">Erste Schritte, wie Sie sozial handeln</a></li>
                                            </ul>
                                        </li>
                                        <li><a class="dropdown-item" href="explore-social-deu.php">Gewusst wie <i class="fa fa-chevron-right"></i></a>
                                            <ul class="submenu dropdown-menu">
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option1">How to engage socially as a restaurateur</a></li>
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option2">Gut zu wissen</a></li>
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option3">Die 7 Grundrechte</a></li>
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option4">Wege, um sich als Gastronomin oder Gastronom sozial zu engagieren</a></li>
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option5">Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber</a></li>
                                                <li><a class="dropdown-item" href="explore-social-deu.php#option6">Ihr Aktionsplan</a></li>
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
                            <a class="nav-link header-brand-link dropdown-toggle d-li2" href="#" data-bs-toggle="dropdown">Übersicht <span class="i1"><i class="fa fa-chevron-down"></i></span></a>
                            <ul class="dropdown-menu" id="l3ddn">
                            </ul>
                        </li>
                        <li class="nav-item dropdown dynamic-li1" id="myDropdown">
                            <a class="nav-link header-brand-link dropdown-toggle d-li3" href="#" data-bs-toggle="dropdown">Gewusst wie <span class="i1"><i class="fa fa-chevron-down"></i></span></a>
                            <ul class="dropdown-menu" id="l4ddn">
                            </ul>
                        </li>
                        <li class="nav-item dynamic-li2"><a class="nav-link header-brand-link d-li4 active-link dynamic9" href="#"></a></li>
                    </ul>
                </div>
                <div class="d-flex">
                    <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
                    <button class="btn search-btn" type="submit" id="searchq2">
                        <i class="fa fa-2x fa-search text-theme-yellow"></i>
                    </button>
                    <div class="custom__select top-mar-less">
                        <select>
                            <option id="lange" value="explore-sustainable-menu-eng.php">ENG</option>
                            <option id="langd" value="explore-sustainable-menu-deu.php" selected>DEU</option>
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
                                    <a href="my-sustainable-restaurant-deu.php">Mein Nachhaltiges Restaurant</a>
                                </li>
                                <li>
                                    <a href="the-msr-chapter-guide-deu.php">Kapitelübersicht</a>
                                </li>
                                <div class="sub_menuUi">
                                    <li>
                                        <a href="introduction-to-sustainable-menu-deu.php">Nachhaltige Speisekarte</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-responsible-sourcing-deu.php">Verantwortungsbewusstes Einkaufen</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-food-waste-deu.php">Lebensmittelverluste</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-plastic-waste-deu.php">Plastikmüll</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-safe-food-deu.php">Lebensmittelsicherheit</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-energy-deu.php">Energie</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-water-deu.php">Wasser</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-waste-deu.php">Abfälle</a>
                                    </li>
                                    <li>
                                        <a href="introduction-to-social-deu.php">Gemeinschaft</a>
                                    </li>
                                </div>
                                <li>
                                    <a href="https://www.metro.de/blog" target="_blank">METRO Blog</a>
                                </li>
                                <li>
                                    <a href="https://www.metroag.de/en/contact" target="_blank">Kontakt</a>
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
                                <a href="https://www.metro-go.de/de-DE/home" target="_blank">
                                    <img src="assets/images/Eitiketten.png">
                                </a>
                            </div>
                            <div class="social">
                                <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                                    <img src="assets/images/Logo_METRO-Regio_weiss.png">
                                </a>
                                <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&amp;_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank">
                                    <img src="assets//images/safe_food/foot_nav2.PNG">
                                </a>
                                <a style="width: 9rem;" class="bottom-right" href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank"><img src="assets/images/safe_food/foot_nav.PNG"></a>
                            </div>
                            <div class="footer-socials side_nav mt2r">
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
            <input id="sq2" type="text" class="form-control" value="" placeholder="" aria-label="" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-x"></i></button>
        </div>
    </div>
    <?php include "includes/loader.php"; ?>

    <div class="container-full" style="margin-top: 2rem;">
        <div class="page-3_stage page-4_stage">

            <section class="section1 no-print" id="option1" data-scrl="So wird Ihre Speisekarte nachhaltiger">
                <div class="left-content">
                    <h3 style="text-transform: none;">So wird Ihre Speisekarte nachhaltiger</h3>
                    <div class="right-content_mobile">
          <img src="assets/prev/images/page3banner.svg">
        </div>
                    <h4>Die nachhaltige Speisekarte </h4>
                    <p>Bringen Sie mehr Nachhaltigkeit in Ihre Speisekarte und zeigen Sie Ihr Engagement für die Gesundheit des Planeten und der Menschen. Mit bewussten Entscheidungen werden Sie sowohl Gäste wie auch Mitarbeitende für sich gewinnen. Nutzen Sie zum Beispiel mehr Bio- und regionale Produkte und weniger Zucker und Salz.<span id="dots"></span>

                    </p>
                    <!-- <button class="read-more-btn" href="#" id="myBtn" ="()">WEITERLESEN</button> -->
                    <button class="read-more-btn" href="#" id="myBtn" target="#more">WEITERLESEN</button>
                </div>
                <div class="right-content">
                    <img src="assets/prev/images/page3banner.svg" />
                </div>
            </section>
            <section class="section-text container no-print" id="more">
                <div class="section-text-inner">
                    <p>Vor allem jüngere Generationen sorgen sich um die Umwelt und einen fairen Umgang mit Menschen. Daher wissen sie nachhaltige Konzepte in der Gastronomie zu schätzen. Mehr Nachhaltigkeit in Ihrem Betrieb bietet zudem die Gelegenheit, sich vom Wettbewerb abzuheben und wirkt sich positiv auf die Umwelt und ihre Gemeinde aus. Eine intakte Umwelt und die Verfügbarkeit von Ressourcen sind die Grundlage für Ihren Geschäftsbetrieb. Indem Sie sich für nachhaltig beschaffte und produzierte Lebensmittel entscheiden, sichern Sie sich Ihre eigene Zukunft und können einen stabilen und profitablen Betrieb aufbauen. </p>
                </div>

            </section>
            <section class="section-simple no-print" id="option2" data-scrl="Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen">
                <div class="section-simple-way text-center">
                    <h3>
                        Einfache Schritte, um eine nachhaltige Speisekarte zu erstellen</h3>
                    <p>Als Gastronomin und Gastronom haben Sie zahlreiche Möglichkeiten, Ihre Speisekarte nachhaltig zu gestalten. Da es aber unterschiedliche Vorstellungen davon gibt, was ein nachhaltiges Gericht kennzeichnet, gibt es mehrere Möglichkeiten:</p>
                </div>
            </section>
            <section class="section-slider1 section-slider2 no-print">
                <div class="section-slider-center text-center">
                    <div class="wrap" style="z-index: 0;">
                        <div class="slider2">
                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle11">
                                        Beziehen Sie Ihre Produkte lokal, regional und saisonal
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle9">
                                        Reduzieren Sie den Umfang Ihrer Speisekarte
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle8">
                                        Leiten Sie Ihre Mitarbeitenden im Service entsprechend an
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle10">
                                        Führen Sie kleinere Portionsgrößen als Option ein 
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle12">
                                        Verwenden Sie weniger und dafür besseres Fleisch 
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i>
                                    </button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle13">
                                        Setzen Sie auf Gemüse
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle14">
                                        Verwenden Sie nachhaltigen Fisch
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle15">
                                        Experimentieren Sie mit pflanzlichen
                                        Proteinen
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle16">
                                        Nehmen Sie Abstand von
                                        stark verarbeiteten Zutaten
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <button class="modal-toggle17">
                                        Setzen Sie Speisen auf die Karte,
                                        die allen gerecht werden
                                        <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>



                        </div>
                    </div>

                </div>
            </section>

            <section class="section-slider1 no-print spacerx" id="option3" data-scrl="Gut zu wissen – Unterschiedliche Ernährungsformen">
                <div class="section-slider-center text-center">
                    <div class="wrap" style="z-index: 0;">
                        <h3>Gut zu wissen – Unterschiedliche Ernährungsformen </h3>

                        <div class="slider">

                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i1-svg.svg" />
                                    </span>
                                    <button class="modal-toggle1" tabindex="0">Vegan<br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>

                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i5-svg.svg" />
                                    </span>
                                    <button href="https://www.metro.de/produktwelten/fleischloser-genuss" class="modal-toggle2" target="_blank">Vegetarisch<br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i> </button>
                                </div>
                            </div>

                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i7-svg.svg" />
                                    </span>
                                    <button class="modal-toggle3" tabindex="0">Paleo <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i8-svg.svg" />
                                    </span>
                                    <button class="modal-toggle4" tabindex="0">Keto <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i4-svg.svg" />
                                    </span>
                                    <button class="modal-toggle5" tabindex="0">Fruitarian <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i3-svg.svg" />
                                    </span>
                                    <button class="modal-toggle6" tabindex="0">Omnivore <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <span class="icon-list">
                                        <img src="assets/prev/images/i2-svg.svg" />
                                    </span>
                                    <button class="modal-toggle7" tabindex="0">Flexitarian <br> <i class="fa fa-plus-circle responsive_main"  aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-text-withimages section4-4 more-text no-print" id="option4" data-scrl="Tipps für Fortgeschrittene, um eine nachhaltige Speisekarte zu erstellen">
                <div class="left-content">
                    <h3 style="text-transform:none ;">Tipps für Fortgeschrittene, um eine nachhaltige Speisekarte zu erstellen – Erfahren Sie alles über die Diversifizierung von Proteinen</h3>
                    <div class="right-content_mobile">
          <img src="assets/prev/images/div-protein.svg">
        </div>
                    <p>Überall auf der Welt beziehen wir unseren Eiweißbedarf aus Pflanzen, Fleisch und Fisch. Das Problem ist, dass Eiweiß aus industrieller Landwirtschaft oftmals schlecht für die Umwelt ist und durch Methanemissionen (die in Kohlenstoffdioxid umgewandelt werden) Wasser und Böden belastet. Das Tierwohl wird häufig missachtet. <span id="dots"></span>
                        <br><br>
                        <span id="more1">Auch die Fischzucht hat Auswirkungen auf die Umwelt, z. B. durch Wasserverschmutzung und die Übertragung von Krankheiten auf Wildfische. Gleichzeitig nehmen die Wildfischbestände stetig ab und die Tiere sind schädlichem Mikroplastik ausgesetzt.
                        <br style="display: block;"><br style="display: block;">
                            Verbraucherinnen und Verbraucher sind sich immer mehr dieser Auswirkungen bewusst. Wie wir uns heute und in Zukunft ernähren, ist häufig ein Thema in den Nachrichten und sozialen Medien. Sie können in diesem Bereich innovativ sein und Ihren Gästen durch Ihr Speisenangebot zeigen, wie Sie ein großes Nachhaltigkeitsthema wirklich im Griff haben. Darüber hinaus sind Verbraucherinnen und Verbraucher zunehmend bereit, mehr für eine verantwortungsbewusste Ernährung zu bezahlen.
                            <br style="display: block;"><br style="display: block;">
                            Glücklicherweise gibt es viele Lösungen, wie Sie Ihre Speisekarte nachhaltiger gestalten können. Wenn Sie sich für ökologisch produzierte Proteine entscheiden, haben Sie ein wesentliches Merkmal Ihres nachhaltigen Speisenangebots festgelegt, was sich positiv auf die Gesundheit Ihrer Gäste und unseres Planeten auswirkt.
                        </span>
                    </p>
                    <button class="read-more-btn" id="myBtn1">WEITERLESEN</button>
                </div>
                <div class="right-content">
                    <img src="assets/prev/images/div-protein.svg" />
                </div>
            </section>
            <section class="container no-print w100p1">
                <ul class="grid--what">
                    <li>
                        <div class="grid--content more-text">
                            <span class="text-img"><img src="assets/prev/images/grid1.svg" /></span>
                            <h5> Wofür brauchen <br> wir Protein?</h5>
                            <p id="more2">Protein ist ein wesentlicher Bestandteil unserer Ernährung und muss je nach Alter, Gesundheitszustand und Aktivitätsniveau in unterschiedlichen Mengen aufgenommen werden. Proteine werden für das Wachstum und die Regenerierung von Muskeln sowie für die gesunde Entwicklung von Hormonen, Enzymen und Antikörpern benötigt. All dies trägt zu mehr Gesundheit und Leistungsfähigkeit bei.
                                Proteine bestehen aus etwa zwanzig Aminosäuren und je nachdem wie wir uns ernähren, nehmen wir eine unterschiedliche Menge von Aminosäuren durch unsere Ernährung auf. Deshalb ist es wichtig, eine Vielzahl von unterschiedlichen Lebensmitteln zu sich zu nehmen, um die richtige Auswahl an Aminosäuren zu erhalten. Grundsätzlich können Proteine aufgrund ihres Aminosäuregehalts in vollständige (Fleisch, Fisch, Eier, Milch, Käse) und unvollständige (Bohnen, Nüsse, Samen, Tofu usw.) Eiweiße unterschieden werden. Unvollständiges Eiweiß kann wertvolle Aminosäuren liefern, wenn es z. B. in einem Gericht mit Reis und Erbsen gemischt wird.
                            </p>
                            <button class="read-more-btn" id="myBtn2">WEITERLESEN</button>
                        </div>
                    </li>
                    <li>

                        <div class="grid--content more-text">
                            <span class="text-img"><img src="assets/prev/images/grid2.svg" /></span>
                            <h5>Bewusster Konsum <br> von Proteinen</h5>
                            <p id="more3">Der bewusste Konsum von Proteinen umfasst einen Ansatz, der auf dem Verzehr vielfältiger nachhaltiger Proteinquellen beruht. Der Verzehr von unterschiedlichen Proteinarten beinhaltet beispielsweise konventionelles Eiweiß aus artgerechter Tierhaltung wie auch alternatives Eiweiß aus pflanzlichen Quellen.
                                <br>
                                <br><b><strong style="font-size: larger;">Tierische Proteine <strong></strong></strong> </b> sollten von Fleisch und Fisch aus nachhaltiger Haltung stammen. Dazu gehören auch Produkte wie Eier und Milch. Tierische Proteine, die aus verantwortungsvoller Tierhaltung stammen, sind gekennzeichnet durch hohes Tierwohl, nachhaltiges Futter und im Falle von Wiederkäuern, offener Weidehaltung. Weitere Kriterien für den bewussten Konsum von Proteinen sind: Verantwortungsvolle Wassernutzung, gesicherte artgerechte Haltung der Tiere, verantwortungsvoller Einsatz von Medikamenten (z. B. Antibiotika), Wahrung der biologischen Vielfalt (z. B. durch die Haltung traditioneller Rassen), Rückverfolgbarkeit der Lebensmittel und die Gewährleistung von Arbeitnehmerrechten.
                                <br><br>
                                <b><strong style="font-size: larger;">Pflanzliche Proteine <strong></strong></strong>  </b> sind nährstoffreiche Lebensmittel wie Bohnen, Getreide, Hülsenfrüchte, Nüsse, Kichererbsen, traditionelle Pseudogetreidesorten wie Quinoa und gering verarbeitete Zutaten wie Tofu, Tempeh und Seitan. Eine nachhaltige Lebensmittelproduktion zeichnet sich dadurch aus, dass Tofu aus Sojabohnen produziert wird, die auf Flächen angebaut werden, die nicht abgeholzt wurden und dass Nüsse in Obstplantagen geerntet werden, in denen verantwortungsvoll mit Wasser umgegangen wird.
                                <br><br>

                                <b><strong style="font-size: larger;">Alternative Proteine <strong></strong></strong> </b> werden entweder nur selten verzehrt oder sind völlig neu und werden mit neuartigen Technologien und Zutaten hergestellt. Weltweit wird beispielsweise an spannenden Fleischersatzprodukten geforscht. Allerdings ist es noch ein weiter Weg, bis die Produktion alternativer Proteine als hinreichend nachhaltig angesehen werden kann, z. B. wegen des für die Proteinherstellung erforderlichen Energieverbrauchs. Die Kosten dafür sind nach wie vor sehr hoch und für manche Menschen ist Laborfleisch ein Tabu. Es lohnt sich, diese Entwicklungen genau zu verfolgen, da sich das Forschungsgebiet schnell verändert. In Ostasien zum Beispiel werden Fischersatzprodukte bereits erfolgreich produziert und vermarktet.
                            </p>
                            <button class="read-more-btn" id="myBtn3">WEITERLESEN</button>
                        </div>
                    </li>
                    <li>
                        <div class="grid--content more-text">
                            <span class="text-img"><img src="assets/prev/images/grid4.svg" /></span>
                            <h5> Natürliche <br> Lebensmittel </h5>
                            <p id="more4">Die Nutzung von lokalen und in der Natur vorkommenden Lebensmitteln verbindet uns mit der natürlichen Umwelt. Eine wachsende Zahl von Köchen hat sich daher die uralte Praxis der Lebensmittelsuche, bei der sie das naturbelassene Land in der Nähe ihrer Restaurants erkunden, neu zu eigen gemacht. Sie graben, schneiden und pflücken frische Zutaten, um ihre Speisekarten zu ergänzen, die sich in der Regel an den Jahreszeiten orientieren. René Redzepi vom Noma in Dänemark hat vor wenigen Jahren dieses Konzept der Lebensmittelsuche populär gemacht und seither haben mehrere Köchinnen und Köche auf der ganzen Welt mit der Suche nach Lebensmitteln in ihrer eigenen, naturnahen Umgebung begonnen. Die Köchinnen und Köche, die ihre Lebensmittel persönlich und direkt aus ihrer eigenen Umgebung sammeln, befinden sich immer noch in der Minderheit, zeichnen sich aber durch ein starkes regionales Netzwerk aus. Sie haben ein starkes Bewusstsein für nachhaltige Ernährung und stehen für eine Bewegung, die die lokale Umwelt respektiert sowie die Notwendigkeit erkannt hat, sich um ihre Region zu kümmern. Lassen Sie sich von Köchen wie Aidan Brookes von eleven98 in London, Ana Ros von Hisa Franko in Slowenien, Prateek Sadhu von Masque in Indien, Hisoto Nakahigashi von Miyamasou in Japan, Wojciech Modest Amaro von Atelier Amaro in Polen und Ricky Saward von Seven Swans Must Die in Deutschland inspirieren.
                            </p>
                            <button class="read-more-btn" id="myBtn4">WEITERLESEN</button>
                        </div>
                    </li>
                </ul>

            </section>


                            
            <section class="section-highlight-withimages  section4-5 no-print mobile_show" id="option5" data-scrl="Heben Sie nachhaltige Gerichte hervor">
                <div class="top-highlight text-center">
                    <h3>Heben Sie nachhaltige Gerichte hervor </h3>
                    <p>Es ist wichtig, dass Ihre Gäste verstehen, was Sie zu einer nachhaltigen Ernährung beitragen. Es gibt einige Wege, um Ihr Engagement hervorzuheben: </p>
                </div>
                <div class="mid-highlight container">
                <div class="circle-setting">
                        <img src="assets/prev/images/circle-icon.svg" />
                    </div>
                    <ul>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">01</span>
                                <h5>Erklären Sie nachhaltige <br> Zutaten auf Ihrer Speisekarte</h5>
                                <p>Zeigen Sie, wo Ihre Zutaten herkommen und wer sie produziert hat. Erklären Sie die Nachhaltigkeitslabels Ihrer Zutaten (Überprüfen Sie zuerst, ob der Eigentümer des Label-Programms dies zulässt und stellen Sie sicher, dass die Zertifikate zur Verfügung stehen). Informieren Sie Ihre Kundinnen und Kunden darüber, wie die Zutat hergestellt wird. Erklären Sie, wenn es von einem lokalen Bauern stammt, der nachhaltige Prinzipien befolgt, sich aber gegen eine Zertifizierung entschieden hat. Es ist wichtig, dies Ihren Kundinnen und Kunden deutlich zu machen. Heben Sie Gerichte mit Gemüse und Vollkorn hervor. Erklären Sie allgemein Ihre Nachhaltigkeitsphilosophie und erzählen Sie, wo immer möglich die nachhaltige Geschichte Ihrer Gerichte.

                                </p>

                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">02</span>
                                <h5>Heben Sie Ihr nachhaltiges <br> Engagement hervor</h5>
                                <div>
                                    <p>Nutzen Sie Ihre Speisekarte als Möglichkeit, um zu zeigen, was Sie als Gastronomin und Gastronom unternehmen, um nachhaltiger zu sein.
                                    <div id="more5" style="color: black;font-size: 16px;font-family: 'gothambook';">
                                        Informieren Sie Ihre Gäste über die Art und Weise, wie Sie mit Lebensmittelabfällen umgehen, über Lebensmittelspenden oder über Ihr lokales Engagement. Laden Sie Ihre Gäste ein, Lebensmittel, die sie nicht aufgegessen haben, mit nach Hause zu nehmen. <a href="https://prospekte.metro.de/plastikverbot/page/1?_ga=2.100060056.786427769.1650543436-715601530.1600076213" target="_blank">Natürlich in einer nachhaltigen Verpackung! </a></div>
                                    </p>
                                </div>
                                <button href="#" class="read-text" id="myBtn5">WEITERLESEN</button>
                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                            <span class="text-num">03</span>
                                <h5> Weisen Sie auf Allergien und <br> Unverträglichkeiten hin </h5>
                                <p>Die Zahl von Menschen mit Allergien und Lebensmittelunverträglichkeiten steigt. Halten Sie die gesetzlichen Bestimmungen ein, entsprechende Hinweise in der Speisekarte zu integrieren.

                                </p>
                                </div>
                        </li>

                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">04</span>
                                <h5> Beschreiben Sie Ihre Gerichte auf <br>eine anregende und spannende Weise </h5>
                                <div class="more-text">
                                    <p>Bedenken Sie, dass viele Gäste daran gewöhnt sind, nach dem Geschmack und dem Preis zu entscheiden. Über nachhaltige Zutaten wird sich meist erst danach Gedanken gemacht. Konzentrieren Sie sich also zunächst auf die Geschmacksbeschreibung. Fügen Sie entsprechend Ihrer Zielgruppe Beschreibungen hinzu, die diese ansprechen. Zum Beispiel:</p>
                                    <div id="more6">
                                        <ul>
                                            <li>“Bohnenauflauf mit frischen Kräutern”
                                                (Hausgemachter Auflauf mit gemischten Bio-Bohnen, Bio-Tomaten und geräuchertem Pfeffer. Serviert mit einer Beilage aus Wildreis. Eine köstliche und sättigende Mahlzeit aus gesunden Proteinen!)
                                            </li>
                                            <li>“Fisch im Teigmantel mit frischer Zitrone”
                                                (Hausgemacht mit zertifiziertem Kabeljau aus nachhaltigem Fischfang, serviert mit knackigem Salat und Bio-Mayonnaise. Ein frischer Hauch von Meer!)
                                            </li>


                                        </ul>
                                    </div>
                                    </p>

                                    <button href="#" class="read-text" id="myBtn6">WEITERLESEN</button>
                            </div>
                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                            <span class="text-num">05</span>
                                <h5>Fügen Sie Informationen zur <br> Herkunft Ihrer Zutaten hinzu</h5>
                                <div>
                                    <p>Erwägen Sie, Ihrer Website und Ihren Social-Media-Seiten Informationen über die <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit"> Herkunft </a> Ihrer Zutaten hinzuzufügen sowie in gedruckter Form oder auf Ihrem Menüdisplay. Dies spart Platz in den einzelnen Gerichtbeschreibungen.
                                    </p>
                                </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">06</span>
                                <h5> Informieren Sie Ihr Servicepersonal</h5>
                                <p>Stellen Sie sicher, dass Ihre Mitarbeitenden die Informationen sachkundig und überzeugend vermitteln können.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>








            <section class="section-highlight-withimages  section4-5 no-print desk_show" id="option5" data-scrl="Heben Sie nachhaltige Gerichte hervor">
                <div class="top-highlight text-center">
                    <h3>Heben Sie nachhaltige Gerichte hervor </h3>
                    <p>Es ist wichtig, dass Ihre Gäste verstehen, was Sie zu einer nachhaltigen Ernährung beitragen. Es gibt einige Wege, um Ihr Engagement hervorzuheben: </p>
                </div>
                <div class="mid-highlight container">
                    <ul>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">01</span>
                                <h5>Erklären Sie nachhaltige <br> Zutaten auf Ihrer Speisekarte</h5>
                                <p>Zeigen Sie, wo Ihre Zutaten herkommen und wer sie produziert hat. Erklären Sie die Nachhaltigkeitslabels Ihrer Zutaten (Überprüfen Sie zuerst, ob der Eigentümer des Label-Programms dies zulässt und stellen Sie sicher, dass die Zertifikate zur Verfügung stehen). Informieren Sie Ihre Kundinnen und Kunden darüber, wie die Zutat hergestellt wird. Erklären Sie, wenn es von einem lokalen Bauern stammt, der nachhaltige Prinzipien befolgt, sich aber gegen eine Zertifizierung entschieden hat. Es ist wichtig, dies Ihren Kundinnen und Kunden deutlich zu machen. Heben Sie Gerichte mit Gemüse und Vollkorn hervor. Erklären Sie allgemein Ihre Nachhaltigkeitsphilosophie und erzählen Sie, wo immer möglich die nachhaltige Geschichte Ihrer Gerichte.

                                </p>

                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">03</span>
                                <h5> Weisen Sie auf Allergien und <br> Unverträglichkeiten hin </h5>
                                <p>Die Zahl von Menschen mit Allergien und Lebensmittelunverträglichkeiten steigt. Halten Sie die gesetzlichen Bestimmungen ein, entsprechende Hinweise in der Speisekarte zu integrieren.

                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">05</span>
                                <h5>Fügen Sie Informationen zur <br> Herkunft Ihrer Zutaten hinzu</h5>
                                <div>
                                    <p>Erwägen Sie, Ihrer Website und Ihren Social-Media-Seiten Informationen über die <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit"> Herkunft </a> Ihrer Zutaten hinzuzufügen sowie in gedruckter Form oder auf Ihrem Menüdisplay. Dies spart Platz in den einzelnen Gerichtbeschreibungen.
                                    </p>
                                </div>
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
                                <h5>Heben Sie Ihr nachhaltiges <br> Engagement hervor</h5>
                                <div>
                                    <p>Nutzen Sie Ihre Speisekarte als Möglichkeit, um zu zeigen, was Sie als Gastronomin und Gastronom unternehmen, um nachhaltiger zu sein.
                                    <div id="more5" style="color: black;font-size: 16px;font-family: 'gothambook';">
                                        Informieren Sie Ihre Gäste über die Art und Weise, wie Sie mit Lebensmittelabfällen umgehen, über Lebensmittelspenden oder über Ihr lokales Engagement. Laden Sie Ihre Gäste ein, Lebensmittel, die sie nicht aufgegessen haben, mit nach Hause zu nehmen. <a href="https://prospekte.metro.de/plastikverbot/page/1?_ga=2.100060056.786427769.1650543436-715601530.1600076213" target="_blank">Natürlich in einer nachhaltigen Verpackung! </a></div>
                                    </p>
                                </div>
                                <button href="#" class="read-text" id="myBtn5">WEITERLESEN</button>
                            </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">04</span>
                                <h5> Beschreiben Sie Ihre Gerichte auf <br>eine anregende und spannende Weise </h5>
                                <div class="more-text">
                                    <p>Bedenken Sie, dass viele Gäste daran gewöhnt sind, nach dem Geschmack und dem Preis zu entscheiden. Über nachhaltige Zutaten wird sich meist erst danach Gedanken gemacht. Konzentrieren Sie sich also zunächst auf die Geschmacksbeschreibung. Fügen Sie entsprechend Ihrer Zielgruppe Beschreibungen hinzu, die diese ansprechen. Zum Beispiel:</p>
                                    <div id="more6">
                                        <ul>
                                            <li>“Bohnenauflauf mit frischen Kräutern”
                                                (Hausgemachter Auflauf mit gemischten Bio-Bohnen, Bio-Tomaten und geräuchertem Pfeffer. Serviert mit einer Beilage aus Wildreis. Eine köstliche und sättigende Mahlzeit aus gesunden Proteinen!)
                                            </li>
                                            <li>“Fisch im Teigmantel mit frischer Zitrone”
                                                (Hausgemacht mit zertifiziertem Kabeljau aus nachhaltigem Fischfang, serviert mit knackigem Salat und Bio-Mayonnaise. Ein frischer Hauch von Meer!)
                                            </li>


                                        </ul>
                                    </div>
                                    </p>

                                    <button href="#" class="read-text" id="myBtn6">WEITERLESEN</button>
                                </div>
                        </li>
                        <li>
                            <div class="circle-content more-text">
                                <span class="text-num">06</span>
                                <h5> Informieren Sie Ihr Servicepersonal</h5>
                                <p>Stellen Sie sicher, dass Ihre Mitarbeitenden die Informationen sachkundig und überzeugend vermitteln können.</p>
                            </div>
                        </li>

                    </ul>
                </div>
            </section>
            <section class="section-lena-kitchen container no-print" id="option6" data-scrl="Lenas Küche">
                <div class="section-lena text-center">
                    <h3>LENAS KÜCHE</h3>
                    <p>Spiegeln Sie Ihre Nachhaltigkeitsphilosophie auf Ihrer Speisekarte wider! Hier sind Beispiele, wie es geht:</p>
                </div>
                <ul class="section-lena-inner">
                    <li class="accordian1">
                        <div class="collapsible__header">UNSERE LEBENSMITTELHERKUNFT</div>
                        <p class="collapsible__content">Die meisten unserer Gemüsesorten stammen von regionalen Bauernhöfen. Wenn nötig, verwenden wir weiterentfernte Quellen. Das Rindfleisch stammt von Rindern aus Weidehaltung. Der Fisch ist verantwortungsvoll über den lokalen Fischmarkt bezogen. Brot stammt von der lokalen Stadtbäckerei. Bitte teilen Sie uns mit, ob Sie eine Allergie haben und wir werden Ihnen helfen das passende Gericht zu wählen!</p>
                    </li>
                    <li class="accordian2">
                        <div class="collapsible__header">ZERTIFIZIERTE QUELLEN</div>
                        <p class="collapsible__content">Milch und Sahne sind über den Großhändler zertifiziert. Das Soja stammt aus zertifizierten Quellen, die sicherstellen, dass dafür kein Regenwald abgeholzt wurde. Auch das Frittieröl stammt aus zertifizierten Quellen. Gewürze, Schokolade, Kaffee und Tee wurden fair gehandelt. Hähnchen und Eier stammen aus zertifizierter, nachhaltiger Freilandhaltung.</p>
                    </li>
                    <li class="accordian3">
                        <div class="collapsible__header">WIR MÖGEN KEINEN MÜLL</div>
                        <p class="collapsible__content">Wir verwandeln unser ungenutztes Brot in Semmelbrösel und Zutaten für unsere Gerichte. <br>
                            Alle unsere Gerichte sind in den Größen „hungrig“ und „sehr hungrig“ erhältlich. Bitte teilen Sie uns mit, welche Sie bevorzugen.
                            <br>
                            Wenn sich herausstellt, dass sie etwas zu viel auf Ihrem Teller haben, geben wir Ihnen den Rest mit nach Hause.
                        </p>
                    </li>
                    <li class="accordian4">
                        <div class="collapsible__header">TO GO</div>
                        <p class="collapsible__content">Wenn Sie es nicht selbst zu Lenas Küche schaffen oder es eilig haben, woanders hinzugehen, haben wir einen Liefer- und Abholservice. Unsere Behälter sind zu Hause kompostierbar. In Kürze bieten wir ein Containerpfandsystem an, damit Sie noch mehr <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank"> Verpackungen</a> für die Mülltonne sparen können!</p>
                    </li>
                </ul>
            </section>
            <section class="section-text-withimages  section4-5 no-print" id="option7" data-scrl="Überprüfen Sie Ihre Fortschritte und sprechen Sie darüber">
                <div class="left-content">
                    <h3 style="text-transform: none;">Überprüfen Sie Ihre Fortschritte<br>
                        und sprechen Sie darüber</h3>
                        <div class="right-content_mobile">
          <img src="assets/prev/images/flag-p-svg.svg">
        </div>
                    <p>Wenn Sie nachhaltige Speiseoptionen in Ihre Speisekarte aufgenommen haben, sollten Sie damit beginnen, die Auswirkungen von diesen Veränderungen zu messen. Dies können Sie z. B. durch direktes Feedback von Gästen oder über Bewertungen im Internet, durch die Anzahl der Bestellungen oder die Rentabilität der Gerichte tun. Mit der entsprechenden Software können Sie diese Veränderungen auch direkt digital nachverfolgen.
                        Denken Sie daran: Farm-to-Table-Restaurants sind bei Restaurantbesuchern sehr beliebt. Bringen Sie Ihre Gäste mit dem Ursprung von Lebensmitteln in Kontakt, indem Sie mit ihnen über Ihre Speisekarte sprechen. Erklären Sie, warum Sie die Änderungen vorgenommen haben. Wenn Sie Informationen zur Rückverfolgbarkeit auf Ihrer Speisekarte oder Ihrer Website angeben, erklären Sie, wie das funktioniert. Als Betrieb haben Sie einen viel größeren Einfluss auf Ihre Region, wenn Ihre Gäste und Mitarbeitenden verstehen, was Sie tun. Eventuell lassen sich einige von Ihren Gästen bei der nächsten Einkaufsentscheidung von Ihnen inspirieren. Ihr Einfluss könnte größer sein, als Sie denken!
                    </p>
                </div>
                <div class="right-content">
                    <img src="assets/prev/images/flag-p-svg.svg" />
                </div>
            </section>
            <section class="container section4-6 section-to-print" id="option8" data-scrl="Ihr Aktionsplan">
                <div class="top-content">
                    <h3>Ihr Aktionsplan </h3>
                </div>
                <div class="mid-content cation-plan-section">
                    <ul>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Bieten Sie nachhaltige Gerichte auf Ihrer Speisekarte an. Denken Sie daran, dass es regionale Unterschiede bei der Vorstellung davon gibt, was ein nachhaltiges Gericht auszeichnet
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Entwickeln Sie eine Speisekarte, die die Wünsche all Ihrer Gäste berücksichtigt, d.h. verschiedene Portionsgrößen und Wahlmöglichkeiten für verschiedene Ernährungsstile
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Verwenden Sie weniger Fleisch und Fisch und konzentrieren Sie sich auf Gemüse oder neuartige Proteinquellen
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Heben Sie Ihre nachhaltigen Zutaten und Maßnahmen auf Ihrer Speisekarte hervor
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Informieren und beziehen Sie Ihre Mitarbeitenden mit ein
                            </p>
                        </li>
                        <li>
                            <label class="check-wrap">
                                <input type="checkbox" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <p>
                                Verfolgen Sie Ihre Fortschritte und sprechen Sie mit Ihren Gästen darüber
                            </p>
                        </li>
                        <li class="print-li"><button onclick="window.print();" class="no-print">DRUCKEN</button></li>
                    </ul>
                </div>
            </section>

            <style>
                .like-section {
                    margin-top: 2rem;
                    text-align: center;
                }

                #like {
                    background: #fff;
                    border: 1px solid #003b7e;
                    outline: 0;
                    font-size: 18px;
                    cursor: pointer;
                    color: #003b7e;
                    padding: 5px 15px 10px 15px;
                    margin-top: 1rem;
                    font-family: "Gothambold";
                }

                .ripple {
                    background-position: center;
                    transition: 0.8s;
                }

                .ripple:hover {
                    background: #47a7f5 radial-gradient(circle, transparent 1%, #47a7f5 1%) center/15000%;
                }

                .ripple:active {
                    background-color: #6eb9f7;
                    background-size: 100%;
                    transition: 0.5s;
                }

                #like:hover {
                    color: black;
                }

                #like>i {
                    font-size: 28px;
                }


                .liked {
                    color: white !important;
                    background-color: #003b7e !important;
                }

                .liked i {
                    animation: anim 0.5s ease-in-out;
                    -webkit-animation: anim 0.5s ease-in-out;
                }

                @keyframes anim {
                    100% {
                        transform: rotate(-15deg) scale(1.3);
                        -webkit-transform: rotate(-15deg) scale(1.3);
                        -moz-transform: rotate(-15deg) scale(1.3);
                        -ms-transform: rotate(-15deg) scale(1.3);
                        -o-transform: rotate(-15deg) scale(1.3);
                        filter: blur(0.5px);
                        -webkit-filter: blur(0.5px);
                    }
                }

                .sharing {
                    margin-top: 2rem;
                    margin-bottom: 2rem;
                    text-align: center;
                }

                .sharebtn {
                    transition: all 0.3s;
                    border: 0;
                    border-radius: 0;
                    background-color: #003b7e;
                    color: #fff;
                    text-transform: uppercase;
                    font-family: "GothamBold";
                    text-transform: uppercase;
                    display: inline-block;
                    padding: 10px 20px;
                    margin: 15px 0 0;
                    font-size: 18px;
                    text-decoration: none;
                }

                .sharebtn:hover {
                    background-color: #ffe500;
                    color: #003b7e;

                }
            </style>

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
                        <a id="fb-share-button" class="sharebtn" onclick="shareOnFacebook()"><i class="fa fa-facebook"></i></a>
                        <a id="tw-share-button" class="sharebtn" onclick="shareOnTwitter()"><i class="fa fa-twitter"></i></a>
                        <a id="ld-share-button" class="sharebtn" onclick="shareOnLinkedIn()"><i class="fa fa-linkedin"></i></a>
                        <a id="mail-share-button" class="sharebtn" onclick="shareViaEmail()"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>

            <script>
                function liked() {
                    var element = document.getElementById("like");
                    element.classList.toggle("liked");
                }

                // facebok share
                var fbButton = document.getElementById('fb-share-button');
                var url = window.location.href;
                fbButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.open('https://www.facebook.com/sharer/sharer.php?u=' + url,
                        'facebook-share-dialog',
                        'width=800,height=600'
                    )
                    return false;
                });
                // twitter share
                var twButton = document.getElementById('tw-share-button');
                var url = window.location.href;
                twButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.open('https://twitter.com/share?' + url,
                        'twitter-share-dialog',
                        'width=800,height=600'
                    )
                    return false;
                });
                //linked share
                var ldButton = document.getElementById('ld-share-button');
                var url = window.location.href;
                ldButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.open('https://www.linkedin.com/sharing/share-offsite/?url=' + url,
                        'linkedin-share-dialog',
                        'width=800,height=600'
                    )
                    return false;
                });
                //mailthis
                var mailButton = document.getElementById('mail-share-button');
                var url = window.location.href;
                mailButton.addEventListener('click', function(e) {
                    e.preventDefault();
                    window.open('mailto:?subject=Hey, diese Seite hat einen tollen Inhalt!&body=' + url,
                        'email-share-dialog',
                        'width=800,height=600'
                    )
                    return false;
                });
            </script>

            <section class="section5 no-print">
                <div class="bottom-left">
                    <div class="top-content5">
                        <h3>METRO Lösungen</h3>
                        <p>METRO bietet das digitale Tool PROTRACE an, mit dem Sie sich sowohl über das Produkt selbst als auch über die Lieferwege von der Herkunft bis zur Anlieferung bei METRO informieren können.</p>
                        <p><strong>Anwendungen, die bei der Menükartengestaltung oder der Kommunikation helfen können, sind z. B. Menukit oder Dish.</strong></p>
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
                                <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank"> <img src="images/Protrace_Logo-ai.svg" /></a>
                            </li>
                            <li>
                                <a href="https://www.metro-go.de/de-DE/home" target="_blank"> <img src="assets/prev/images/Eitiketten.png" /></a>
                            </li>

                        </ul>

                    </div>
                </div>
                <div class="bottom-right">
                    <div class="top-content5">
                        <h3>METRO Angebote</h3>
                        <p>METRO unterstützt Sie mit vielen nachhaltigen Produkten bei Ihrer Nachhaltigkeitsstrategie:</p>
                    </div>
                    <div class="bottom-content5">
                        <ul>
                            <li>
                                <a href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional?_ga=2.225037658.1761958552.1650435342-1052212916.1650435342&_gac=1.8192646.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank"> <img src="assets/prev/images/Logo_METRO-Regio_weiss.png" /></a>
                            </li>
                            <li>
                                <a href="https://www.metro.de/produktwelten/bio-produkte?_ga=2.119671752.1761958552.1650435342-1052212916.1650435342&_gac=1.41209622.1650435348.EAIaIQobChMI-ICk3v6h9wIV9oxoCR0VHgDbEAAYASAAEgJ0ovD_BwE" target="_blank"> <svg xmlns="http://www.w3.org/2000/svg" version="1.2" viewBox="0 0 373 192" width="373" height="192">
                                        <title>METRO_Bio-ai</title>
                                        <style>
                                            .sf {
                                                fill: #fff
                                            }
                                        </style>
                                        <g id="Ebene 1">
                                            <g id="&lt;Group&gt;">
                                                <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m104.1 0.8h6.4q1.2 0.4 2.3 1.1 1.2 0.6 2.6 1.9 2.4 1.7 5.5 2.3 3 0.5 6.1 0.5 1.9 0 3.5-0.3 1.7-0.3 2.8-0.3 2.6 0 4.4 0.3 1.8 0.3 3.7 0.3 1.8 0.4 3.1 1.1 1.3 0.6 3.2 1.1 0.5 0 1.5 0.3 1.1 0.3 1.6 0.3 2.3 0 4.3 0.5 2 0.6 4.4 1 1.9 1.1 4.1 1.7 2.2 0.7 4.8 1.8 2.9 1.3 5.7 2.9 2.8 1.6 5.2 3.7 2.6 2.2 4 4.9 1.4 2.7 3 5.3 0.8 1.1 0.9 2.1 0.1 1.1 0.1 2.2 0 1.7 0.1 2.9 0.1 1.2 0.6 2.3 0 1.7-0.1 3.2-0.1 1.5-0.6 3.2-0.7 2.2-1.2 4-0.5 1.9-0.5 4-0.4 2.2-1.1 4.2-0.7 2.1-2.6 3.6-1.4 1.7-2.6 3-1.2 1.3-1.7 2.4-2.3 4.3-5.4 7.6-3.1 3.4-7.3 6-1.9 1-3.5 2.6-1.7 1.5-4.3 3.2-3 2.4-6.4 4.1-3.5 1.7-7 3.9-3.1 1-5.5 2.5-2.5 1.6-5.6 3.3-0.7 0-0.7 1.5 0.5 1.7 1.3 3.1 0.8 1.4 3.4 1.9 1.7 1 3.3 2.2 1.7 1.2 2.4 2.9 1.9 2.2 3.1 3.9 1.1 1.7 3 3.9 0.7 0.9 0.7 3.7v0.8q0.7 1.7 1.2 3.7 0.5 1.9 0.5 4.1 0.4 2.4 1 4.5 0.6 2.2 0.6 4.3-0.7 1.1-0.9 2.2-0.3 1.1-0.7 2.1-0.5 0.5-0.6 1.4-0.1 1-0.1 1.4 0.4 1.8 0.1 3.4-0.4 1.6-1.1 3.3-0.5 1.8-1.2 3.7-0.7 1.9-2.5 3.7-1.2 1.7-2.4 3.3-1.2 1.6-2.6 3.8-0.5 0.4-1.2 0.9-0.7 0.6-1.1 1.2-1.9 1.8-3.1 3.6-1.2 1.8-3.1 2.3-0.9 0-0.9 0.6-2.8 3-8 5-2.4 1-5 2.7-2.6 1.6-5.2 2.7h-1.6q-2.4 0-4.6 0.4-2.2 0.4-4.8 0.8-1.2 0.5-2.5 0.6-1.3 0.1-3.2 0.1-1.9 0-3.4-0.2-1.5-0.2-3.4 0.2-1.9 1.1-3.3 0.9-1.4-0.3-3.3-0.9-1.9-0.4-3.4-0.7-1.6-0.2-2.7-0.6h-5l-0.5-0.2h-0.2v0.2q-0.7 0.4-1.3 0.2-0.6-0.2-1-0.2-2.4-1.7-4.9-2.4-2.4-0.6-5.5-1.5-2.4-0.8-4.7-2.1-1.2-0.5-2.4-1-1.2-0.5-2.3-1-4.7-2.1-8-5.2-1.2-1-2.3-1.7-1-0.6-2.2-1.9-0.7-0.4-1.5-1.5-0.9-1.1-0.2-2.2v-0.6q-0.7-2.2-0.1-4.2 0.6-2.1 1.8-4.5 0.5-2.3 1-3.9 0.6-1.7 1.1-3.2 0.2 0 0.2-0.4-0.2-0.2-0.2-0.4v-1.3q1.2-0.7 1.9-1.6 0.7-1 1.4-1.7 1.9-3.6 3.1-8.4 0.4-1.7 1.3-3.3 0.8-1.6 2.7-2.7v-1.3q0.7-1.1 1.3-2.2 0.5-1 1-2.8 0-0.4 0.5-1 0.5-0.7 0.5-1.3 2.1-2.2 2.1-4.4l0.9-0.6q0.5-2.2 1.6-4 1-1.8 2.2-4.2 0.5-1.1 0.6-2.2 0.1-1 0.1-2.8v-10.1l0.9-0.6q1.9-1.8 3.8-3.3 1.9-1.5 4.3-3.2 1.4-1.7 1.4-3 1.1-1.7 1.9-2.8 0.7-1.1 1.4-2.8 1.1-3.5 2.4-6.7 1.3-3.3 3.2-6.5 0.7-0.6 0.7-2.8 0.5-1.3 1.2-2.4 0.7-1 1.2-2.1 0.5-1.7 1.5-2.8 1.1-1.1 1.5-2.8 3.3-5.6 5.2-11.3 1.9-5.8 3.6-11.2 0-1-0.2-2.1-0.1-1.1-0.5-1.5v-0.7q-1.2 0-2.4 0.1-1.2 0.2-2.4 0.6-5.4 2.8-10.6 5.8-5.1 3-9.8 6.5-1 0-1.7 0.8-3.5 3.1-7.2 6-3.6 2.9-6.9 6.3-1.2 1.1-2 1.8-0.9 0.6-2 1.7-1.9 2.8-4.2 5.5-2.2 2.7-4.6 5.5l-0.4 0.4q-0.5 0.4-0.5 0.9-2.4 2.1-4.6 4.8-2.2 2.7-3.4 6.2-1.7 2.6-3 5.2-1.2 2.7-2.4 5.6-0.5 1-0.8 2.1-0.4 1.1 0.1 2.2v0.6q0.4 2.2-0.4 4.8-0.8 2.5-2 4.7v1.5q1.2 2.6 2.4 4.9 1.2 2.2 2.3 4.6 0 0.6-0.7 1.3-0.7 0.4-1.6 1.1-1 0.6-1.4 1h-1q-2.6-2.1-5.4-3.8-2.8-1.8-5.7-4.1v-2q0-0.2-0.2-0.3-0.2-0.1-0.5-0.5-1.1-1.1-1.9-2.3-0.7-1.2-1.6-2.7 0-1.7-0.5-3-0.4-1.3-0.9-3-1.2-3.5-4.7-3.5v-18.1q0.4 0 1.5-0.4 1.1-0.5 1.5-0.5l1-0.8q0.5-3.7 2.5-6.5 2-2.8 3.8-5.8 2.4-2.6 4.6-5.6 2.3-3 4.9-5.8-0.3-0.3 0-0.5 0-0.4 0.9-0.4 0.5-1.1 1.5-1.7 1.1-0.7 2.3-1.8 1.2-1 2.4-2.4 1.3-1.4 3-2.5 1.9-1.7 3.8-3 1.8-1.3 4.2-3.1 1.9-1 3.5-2.4 1.7-1.4 3.6-2.5 3.5-1.7 7.3-4.5l1.4-1.3q5.4-2.2 10.8-4.7 5.4-2.5 10.9-4.6 1.1-1.3 2.3-1.5 1.2-0.2 3.1-0.2v-0.3q0-0.4 0.7-0.4 0.5 0 0.7-0.4 0.2-0.4 0.7-1.1 2.6-0.4 4.9-1 2.4-0.5 4.8-0.9 3-1.1 4.9-2.6 1.9-1.5 3.8-3.3 0.7-1 1.3-2.1 0.6-1.1 1-1.5zm57.7 43.5v-2.1q-0.4-1.7-0.5-3-0.2-1.3-0.2-3.1-0.7-0.6-0.7-1.2-0.7-1.1-0.9-2.2-0.3-1.1-0.7-2.2-1.2-1.7-2.1-3.6-1-2-2.9-3-1.9-1.8-3.5-3.2-1.7-1.4-3.5-3.1-0.3 0.2-0.5 0-0.2 0-0.2-0.9-2.4 0-5.2-0.4-2.9-0.4-5.2-0.9-1.2-0.8-2.4-0.3-1.1 0.6-2.3 1-1.7 1.1-2.3 2.3-0.5 1.1 0.2 3.3 0 0.6-0.5 1.2-0.5 0.5-0.5 1 0 0.6-0.4 1.1-0.5 0.6-0.5 1 0 0.4-0.1 1.2-0.2 0.8-0.6 1.2-1 0.6-1 2.8-0.4 1.1-0.9 2.1-0.5 1.1-0.5 2.2-0.7 1.1-0.8 2.3-0.1 1.1-0.1 2.9l-2.1 6.4q-0.8 0.5-1.3 1.4-0.6 1-1.1 2.1-1.2 1.3-1.5 2.4-0.4 1-0.9 2.1 0 1.7-0.2 2.8-0.2 1.1-1.4 2.2-0.7 1.1-0.9 2.1-0.3 1.1-0.8 2.4-0.7 1.7-1.4 3.2-0.7 1.6-1.9 3.3l-0.7 0.6q-0.4 1.8-1.1 3.4-0.7 1.6-1.2 4-1.2 2.1-2.3 4.6-1 2.5-1.5 4.6-0.7 1.8-0.2 2.5 0.4 0.8 1.6 1.2 0.7 0.6 1.3 0.9 0.6 0.2 1.1 0.6h2.3q0.5 0 1.2-0.3 0.7-0.3 1.2-0.3 2.6-0.7 4.4-1.2 1.7-0.6 3.6-1.6 1.2 0 2.4-0.5 1.1-0.4 2.3-0.4 1.4 0 1.4-0.9 0.7 0 1.3-0.3 0.6-0.3 1.3-0.3 0.7-0.7 1.6-0.9 0.8-0.2 0.8-0.6 4-2.6 8.6-5.7 4.6-3.2 7.9-6.6 2.6-2.8 5.2-5.5 2.5-2.7 4.4-6.2 1.9-3.6 2.7-7.4 0.9-3.8 2-7.7 0.5-0.4 0.6-1.4 0.1-0.9 0.1-1.4zm-53-26.7q0.5 1.1 1.3 1.2 0.9 0.1 2.7 0.1-1.1-0.4-2-1.2-0.8-0.7-2-0.1zm-1.6 15.7h1.6v-0.6h-0.4q-0.3 0-0.5 0.2-0.2 0.2-0.7 0.4zm1.6-0.6q-0.4-1.1-0.5-1.8-0.2-0.8-0.2-1.9-0.7 0.7-0.9 1.1-0.2 0.4-0.7 0.4zm-1.7 15.1v-2.1q-1.1 0.6-1.3 0.8-0.1 0.3-0.1 1.3zm-3.7-17.2q0.4 0.4 1.1 0.6 0.7 0.2 1.2 0.9v-2.2q-0.7 0.7-2.3 0.7zm2.3-4.5h0.7v1.7q0.5 0 1.2 0.3 0.7 0.3 1.2 0.3h0.7q0.7-0.4 0.9-1.1 0.3-0.6 0.7-0.6-1.2-0.4-0.9-1 0.1-0.1 0.1-0.3h-1.5q-0.5 0-0.5-0.8 0-0.7-1.2-0.7v1.5q0 0.7-0.4 0.7h-0.3q0-0.5-0.2-1.3-0.3-0.9 0.9-0.9 0-0.4-0.3-0.7-0.4-0.2-0.4-0.6h1.7q0-0.9-1-0.9h-3q-1 2.2 0.9 2.2l0.7 0.9v1.3h-1.6l-0.5 0.4q-0.2 0.2-0.2 1.3-0.8 0 0 0.6h0.7q1.6 0 1.6-2.3zm4.6-0.7h0.1q0-0.3 0-0.6 0 0 0 0 0 0.3-0.1 0.6zm0.8 0.7v0.6q0.5 0 0.6 0.6 0.1 0.7 0.1 1.1 1.9 0 1-2.3-1.4-2 0-4.4v-0.6q-0.7 0.4-1.7-0.1-0.9-0.6-1.6-0.6v2.2h1.6q-0.6 0.5-0.7 2.2 0.7 0 0.7 1.3zm1.7-5.7q0.4 0 1.2 0.3 0.7 0.2 1.4-0.9-1.9 0-2.6 0.6zm-9.4 14.5h-1.7v0.6q1.7 0 1.7-0.6zm-2.4 25.2q0.7-0.6 2.4-0.6-1.5-1.3-2.4 0.6zm-3.3 7.4q0-1.1-0.1-1.2-0.1-0.1-0.6-0.1 0 1.3 0.7 1.3zm-1.7 7.7h1.7v-0.6h-1.7zm-1.4 6h1.4l-0.7-0.6zm0 10.7q0 0.7-0.5 1.3-0.6 0.7-1.1 1.8 0.7-0.9 2.3-0.9 0-0.4-0.3-1-0.4-0.5-0.4-1.2zm-5.4 5h3.8q-1.4-1.3-2.4-1.9-1.4 1.3-1.4 1.9zm0-9.3q1.4-1.7 1.4-2.1h1v-0.9q-0.3 0-0.3-0.2-0.4-0.4-0.7-0.4h-0.7q-0.4 0.4-1.1 1-0.8 0.7-1.5 1.1 0.7 0.5 1 0.7 0.2 0.2 0.9 0.8zm3.8 3.1q0-0.7 0.2-0.7h0.5q0.5-0.4 0.4-0.5-0.2-0.1-0.2-0.6-0.2-0.2-0.2-0.6-1.4 0-1.4 0.8-0.5 0.7-0.7 1.2-0.3 0.6-1 1 0-0.4-0.3-1-0.4-0.5-0.4-1.2-0.4 1.1-1.3 1.1-0.8 0-2 0.5 0.7 0 1.7 0.6 1.6 0 1.6 0.6l0.7 0.9h2.4zm-6.4 9.3q0-0.7 0.7-0.9 0.7-0.2 0-1.3h-1.6q0.7-0.6 0.2-1.2-0.5-0.5-0.9-0.9 0-0.5-0.4-1.1-0.3-0.7-0.3-1.1h4q1.6 0 1.6-0.6h-2.6q0-1.5-1.6 0-1.9 0-2.1 0.2-0.3 0.2-0.3 1.9 0 2.8 2.4 2.8v2.2q-0.7-0.9-3.1-0.9 0 0.7 0.4 1.2 0.3 0.5 0.3 1.2-0.4 0-1-0.4-0.6-0.5-1.1-0.5-0.9 0.9-0.9 2.4-0.3 0-0.3 0.4 0 0.2 0.3 0.2h1.6q-0.2 0.3-0.5 0.3-0.2 0.2-0.2 0.6v1.3h0.5q0.2 0 0.9-0.6l0.7-0.7q0-0.6-0.3-1.2-0.4-0.5-0.4-0.9 0.5 0 1.4 0.1 1 0.1 1 1.1 0.5 0.7 0.8 0.7 0.4 0 1.5-0.7-0.7-0.6-0.7-2.1h1.7q-0.7-0.7-1-1.4-0.2-0.8-0.7-0.1zm0-9.9q0-0.7-0.6-0.9-0.5-0.2-1-0.9v1.8zm-2.4-2.4q2.6-1.7 1.4-3.7-0.7 0-2.3 1.5 1.2 0.5 0.7 1-0.5 0.5 0.2 1.2zm-0.9 20.9q1.4-0.9 2.3-2.1h-3q0 1.5 0.7 2.1zm2.3-8.6h1v1.5h-1zm15.4 8.6q-4.3-0.4-7.8 2.2-3.6 2.6-4 6-0.7 1.5-1.6 3-0.8 1.5-2 3.3-0.4 1.7-1 3.3-0.6 1.6-1.3 3.4-1.2 2.5-2.4 5.2-1.2 2.7-3 5.5-1.4 1.8-1.4 2.2-1.2 3.7-2.5 7.2-1.3 3.6-3.2 7.2-0.7 1.1-1.2 2.3-0.5 1.2-0.5 2.9 0 1.5-0.7 1.5-0.7 0-0.7 1.5v5.6q1.2 1.1 2.3 1.8 1 0.6 2.2 1-0.2 0.5 0 0.7 0 0.4 1 0.4 1.1 0 2.8-0.5 1.6-0.6 3.5-0.6 2.4-0.8 4.7 0h1.4q4.5-1 8.6-2.4 4.2-1.4 8.4-2.5 1.9-1.1 3.4-1.7 1.5-0.7 3.4-1.8 0.7-0.6 1.4-1.2 0.7-0.5 1.9-0.9 2.4-3.5 6.4-6.1 2.3-1.7 4.7-4.9 0.5 0 0.9-0.8 0.5-0.7 0.5-1.4 0.7-2.8 1.9-4.8 1.2-2.1 2.4-3.8 0.2-0.4 0.4-0.6 0.3-0.3 0.3-0.5v-0.4q0-2.4 0.3-4.1 0.4-1.7 0.4-3.9v-5q-1-7.5-7.1-13.1-3.1-2.8-6.5-4.2-3.4-1.4-7.9-1zm-21.4 3.7h-0.7q0.7 0 0.7 0.4zm0-2.8q0-0.6-0.2-1-0.3-0.3-1.5 0.1 0 0.9 1.7 0.9zm-2.4-2.1q1-1.3 3.1-2.2-1.9 0-2.2 0.2-0.4 0.2-0.9 2zm1.7-8.2l-0.5 0.4q-0.5 0.4-0.5 1.1h3.3q-0.7-0.5-0.9-1-0.2-0.5-0.7-0.5l0.7-0.7q-0.7 0-1.4 0.7v-1.3l-0.5-0.5q-0.5-0.4-0.5-1-0.4 0.4-1 1-0.6 0.7-1.1 1.1 2.1 0 3.1 0.7zm-1-2.8q1.2 0 2.4 0.1 1.2 0.1 2.4 0.5 0-1.5-0.2-2.7-0.1-1.2-0.5-2.3h1.4v-2.8q-1.2 0-1.3 0.3-0.2 0.2-0.1 1.3v1.2q-0.5-0.2-0.8-0.4-0.2-0.2-0.4-0.2h-0.5q-0.7 0.6-1.4 1.5 1.4 0 2.3 0.7-0.9 0-0.9 0.4-0.2 0.2 0 0.2l0.9-0.6q0 0.4 0.4 0.6 0.4 0.2 0.4 0.9-1.2 0.4-2.1 0.2-0.8-0.2-2-0.2c0 0 0 1.3 0 1.3zm0-2.8q-0.7 0-1.4 0.6h1.4zm-0.7 9.5v1.5l0.7 0.6v-0.6q1 0 1-1.5h-1.7v-1.5q-0.4 0-0.9 0.4l-0.5 0.4q-0.7-0.6-0.8-1.3-0.1-0.6-0.1-1v3zm-3.3 22.4v-1.5l-1.7 1.5v0.9q1 0 1.7-0.9zm-1.7 2.2q0-0.5-0.4-0.9-0.3-0.2-0.3-0.4l-0.7 0.6v0.7zm-1.4-13q-0.7 0.5-0.3 1.1 0.3 0.7 0.3 1.7 0.5-0.4 0.5-1.4 0-0.9-0.5-1.4zm-1.6 5q0.4 1.1 0.7 1.7 0.2 0.7 0.9 1.1v-2.8zm-1.4 11.6h0.7v-1.5h-0.7zm12.5-20.5h1.6v-1.3h-2.3q0 0.5 0.3 0.7 0.4 0.2 0.4 0.6zm-13.4 14.7q0 0 0 0zm0.4 0.4q0.5 0.5 1.2 0.5v-1.8q-0.9 0.9-1.2 0.9-0.2 0.2-0.4 0zm-5.9 26.3q0.4-1.1 0.7-1.8 0.2-0.8 0.9-1.8-0.7 0.6-1.2 0.6h-0.4l-1 0.9q-0.9 0.8 0 1.5zm-3.3 12.3v0.8q0.5 0 0.7-0.4 0.3-0.4 0.7-0.4zm-2.3-17.5q1.2 0.4 2.2 0.7 1.1 0.2 1.6 0.8 0-1.1-0.4-1.8-0.3-0.8-0.3-1.9-2.2 1.3-3.1 2.2zm-0.7 11.6v2.2q0.7 0 0.9-0.2l0.5-0.4q0-0.7-0.5-0.9-0.4-0.2-0.9-0.7zm-1-0.6q-0.4-0.6-0.7-1.1-0.2-0.4-0.7-0.4v1.5zm-1.4-3h-3q0 0.6 0.4 1 0.5 0.3 1-0.2 0.7-0.6 0.9-0.7 0.2-0.1 0.7-0.1zm-4 8.2v1.3l1 0.8q0-1.5-1-2.1zm1.7-0.9v-0.9q-1.7 0.1-2.4 0.9zm62.4-128.9q0-0.7 1.7-2.2h-2.6q0 1.5 0.9 2.2zm-25.4 48.5h-0.7-1z" />
                                                <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m232.8 30.3q0.7 0.7 1.7 1.1 1.1 0.4 1.8 1.1 1.4 1.1 2.6 2.6 1.2 1.5 1.6 3.2 1 1.1 1.1 1.8 0.1 0.8 0.1 1.9 0 1.9-0.1 4.6-0.1 2.7-1.1 4.6-0.4 0.7-0.9 1.7-0.5 0.9-0.5 1.6-1.2 1.9-2.7 3.7-1.5 1.9-2.7 3.8-2.6 3-5.5 4.7-3 1.6-7 2.9-5.6 0.6-11.3 0l-0.9-0.9q-1.9-1.1-3.2-2-1.3-1-3.2-2.5-1.9-1.1-3.2-2.3-1.3-1.2-1.3-3.5v-0.5q0-1.3-0.4-1.8-0.5-0.5-0.5-1.6-0.7 0-0.7-0.5 0-0.4 0.7-0.4 0.7-1.1 1-2.1 0.4-1.1 0.4-1.6 1.2-1.7 2-3.3 0.8-1.6 2-3.3 1.9-1.8 3.8-3.4 1.8-1.6 4.4-2.9 1.2-1.3 3-1.8 1.8-0.6 3.9-1.2 0.7-0.9 1.2-1 0.4-0.1 1.1-0.5 1.9-0.7 3.8-1.4 1.9-0.8 3.8-0.8zm-13.7 21.8v-2.2q-0.5 0.5-0.5 2.2zm1-3.4q0.9 1 1.4 0.7 0.5-0.3 1.2-0.3-0.7-1.1-2.3-1.6-1.5-0.6-2.7-0.6 0.7 0.7 0.8 1.2 0.2 0.6 0.6 1 1 0 1-0.4zm1.6 3.8h1.9v-0.4h-1.9zm-63.8 121.8q0.5-1 0.5-1.9v-1.9q0-1.3 0.4-2.4 0.5-1.1 0.5-2.2 1.4-1.9 1.4-5.4 0-1.2 0.5-2.4 0.5-1.2 0.5-2.3 0-0.9 0.2-1.1 0-0.2 0.2-0.4 1.4-1.7 2.5-3.4 1.1-1.6 1.1-3.3 0.7-1.1 1.1-2 0.5-1 1.2-2.3 4.3-8.6 7.8-17.5 1.2-2.8 2.6-5.3 1.4-2.4 2.8-4.6v-0.9q0-3.4 2.4-7.1 1.8-3.4 3.6-6.8 1.8-3.3 3.7-7 1.1-1.1 1.4-2.6 0.2-1.5 0.2-3.2-0.5-1.1 0.5-2 0.9-1 2.8-1h8.7q3.3 2.4 6.4 5 3 2.7 6.3 6l0.5 0.4q-0.5 2.4-0.6 4.5-0.1 2.2-0.8 4.6v1.3q-1.6 3.6-3.5 5.8-0.5 1.1-0.5 2.4v3l-0.5 0.4q-0.4 0.4-0.4 0.9-0.5 0.4-1.1 0.9-0.6 0.6-1.3 1.7 0 1.5-0.4 2-0.3 0.5-1 1.6v1.7q0 1.1-0.6 2.1-0.6 1-1.1 2-1.1 3.5-2.7 6.7-1.5 3.3-2.9 6.7-0.5 1.1-1.1 2.6-0.6 1.5-1 3.2 0 3.5-2.4 7.2-0.7 1-1.3 1.9-0.6 0.9-1 1.5-1.2 2.4-2.4 5-1.2 2.6-1.2 4.5v1.3q-0.4 1.3 0.3 2.4 0.7 1 0.7 2.1 0 0.9 0.4 0.9 0.3 0.2 0.5 0 1.2-0.7 2.2-0.8 1.1-0.1 2.3-0.1 1.9-0.4 3.2-1.5 1.3-1.1 2.7-2.2 2.1-2.5 4.6-5.2 2.4-2.7 4.6-5.3 1.1-1.5 2.8-2.8 1.6-1.3 3-3 0.5-0.7 1-1.3 0.5-0.7 0.9-1.1 1.7-1.7 3.3-3.4 1.7-1.6 3.1-3.3 0.2 0 0.5-0.2 0.4-0.4 0.4-1.1-0.7-0.6-0.3-0.7 0.3-0.2 0.3-0.6 2.6-1.7 4.3-3.9 1.6-2.1 3.5-4.1 1.9-2.1 4.1-5 2.3-2.9 4.6-6 2.4-3 4.4-5.9 2-2.9 3.4-5.3 0-0.6 0.6-0.7 0.6-0.1 1.1-0.1h2.3v7.9q0 0.5-0.1 0.6-0.1 0.1-0.8 0.7-0.5 1.3-1.7 3.1-1.2 1.7-2.6 3.6-1.4 2-2.7 3.9-1.3 1.9-2.2 3.2-0.5 0.5-1.3 1.4-0.8 1-1.5 2.1-1.9 1.7-3.2 3.7-1.3 1.9-3.2 4.3-2.8 2.6-5 5.8-1.1 0.4-2 1.5-0.8 1.1-2 2.2-1.1 1.7-2.2 3.3-1.1 1.6-2.5 3.3-1.2 1.1-2 2.1-0.8 1-2 2-0.5 0.7-1.2 1.5-0.7 0.9-2.5 1.6v0.4q-0.5 0.4-0.8 0.7-0.2 0.4-0.4 0.6-0.3 0.4-0.5 0.4-2.8 2.8-5.5 5-2.7 2.1-5.6 4.5-1.9 1.1-3.1 2-1.3 1-3.2 2.5-1.2 0.5-2.3 0.6-1 0.1-1.7 0.7-1.9 0-3.2 0.3-1.3 0.4-3.2 1h-1.4q-1.9-0.6-3.7-1.1-1.7-0.4-3.6-1-2.1 0-5-0.6-2.8-0.5-4.2-2.2-0.7-0.7-1.8-1.2-1-0.6-1.7-1-1.9-1.1-3.3-2.7-1.4-1.6-1.9-4zm33-48.9q1.1 0.4 1.7 0.4 0.6 0-0.1-0.4zm1 12.9q0-0.9 0.7-0.9h-2.6q1.9 0 1.9 0.9zm-10.6 8q0 0.6 0.4 1.1 0.5 0.4 0.5 1v-2.1zm0 15.1q-0.5 1.1-0.5 1.4v0.9h0.5zm-1.4 0h2.3v-0.8h-1.4q-0.9 0-0.9 0.8zm0 10.4q0.7-1.7 0.7-1.9 0-0.3-1.2-0.3 0.5 0.9 0.5 2.2zm-3.1-6.7h1.4q1-1.1 1.1-1.6 0.1-0.5 0.1-1-1.9 0.7-2.6 2.6zm-0.9-6.2v1.7h4q0-0.4-0.5-0.4-0.9-0.7-1.6-0.8-0.7-0.1-1.9-0.5zm0-4.1q-0.7 0-0.7 0.2 0 0.2 0.7 1.7zm0 8.2q-1 0.9-1.4 0.9h1.4zm15.1-35.4q0 0.4 0.7 0.9 0.7 0.4 1.8 0.4 0-1.1-0.9-1.2-0.9-0.1-1.6-0.1z" />
                                                <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m232 161.9v-2.4q0-1.1 0.5-1.5 0.5-0.4 0.5-1.5-0.7-2.8 0.3-5.5 1.1-2.7 2.7-5.5 1.9-1.7 3.1-3.6 1.2-1.8 1.9-3.8 1.2-1.7 1.9-3 0.7-1.3 1.2-3 1.1-1.3 2.7-3 1.5-1.7 2.2-3.5 1.2-1 1.8-2.4 0.6-1.4 1.3-2.5 0.7-1.1 0.8-2.1 0.1-0.9 0.6-2 2.3-4.5 5-9.1 2.8-4.5 6.1-8.4 1.8-2.4 3.3-4.3 1.4-1.9 3.7-3 0.7-1.1 1.8-1.9 1-0.7 2.2-1.8 3.1-2.8 6.7-4.5 3.7-1.7 7.7-2.8 1.2-0.4 2-0.9 0.8-0.4 2-0.4h0.5q1.1 0.6 2.8 0.7 1.6 0.2 2.8 0.2h8q1 0 1.5 0.4 1.8 1.1 3.7 2.4 1.9 1.2 3.8 2.3 7.8 5.4 11.1 15.1v0.5q0.4 1.2 0.6 1.9 0.1 0.6 0.8 1.7v3.3q0 1.5 0.4 2.5 0.8 2.8 0.4 5.5-0.4 2.7-0.4 5.5-0.4 2.8-1.2 5.4-0.9 2.6-3.2 4.8-1.4 1.9-1.4 4.9 0 1.1-0.3 2.6-0.2 1.5-1.4 2.6-0.7 1.1-1.3 1.8-0.6 0.8-1 1.9-1.2 1.7-1.5 3.1-0.2 1.4-0.2 3.1 0 2.4 2.1 2.4h4l1.4-1.3q0.7-0.9 1.8-1.4 1.1-0.5 1.8-1 1.9-1 3.2-2.1 1.2-1.1 2.7-2.8h1.1q1.9-0.9 3.1-2.1 1.2-1.2 2.4-2.7 1.1-1.3 2.3-2.6 1.2-1.2 2.6-2.3 1.7-1.1 3-2.5 1.2-1.4 3.1-2.5 1.2-1.5 4-4.7 2.9-3.3 4.7-5 0.5-1.1 1.6-2 1-1 1.5-2.1 0.7-0.8 1.2-1.6 0.5-0.8 1.4-1.2 1.2-1.5 1.7-1.5 0.4 0 2.3 1.5 1.2 0.4 1.3 0.5 0.1 0.2 0.1 1.2-0.7 0.9-0.8 1.4-0.1 0.6-0.1 1-0.5 1.1-1.1 2.1-0.6 0.9-1 1.6-0.7 1.7-1.8 2.8-1.1 1.1-2.2 2.1-0.8 0.9-2.3 2.5-1.5 1.6-1.5 2.3-1.9 1.7-3.1 3.6-1.2 2-2.3 3.7-0.5 0-0.7 0.1-0.3 0.1-0.7 0.1-0.5 0.2-0.8 0.2-3 2.2-5.4 5-0.4 1.7-1.5 2.8-1.1 1.1-2.5 1.9-1.6 1.3-3.4 3-1.8 1.6-3.6 3.3-1.2 0.9-2.3 1.6-1 0.8-1.7 1.2-1.5 1.1-3.1 2.2-1.7 1-2.8 1.5-2.6 1-4.6 2.2-2 1.2-4.6 2.3-2.1 0-4.5 1.5-0.9 0.4-3.5 0.4-1.2 0.7-2.3 0.9-1 0.2-2.2 0.9-1.9 1-3.7 2-1.7 1-3.1 2.1-1.2 0.8-2.4 1.7-1.2 0.8-1.6 1.9-1 1.1-1.9 2.1-1 0.9-2.2 2-2.3 1.5-4.2 2.6-1.9 1.1-3.8 2.2-2.3 1-4.3 1.9-2 0.9-4.1 1.7h-1.2q-1.2 0.5-2.3 0.5h-2.2q-4.9 1.3-9.4 0-4-0.5-8.1-2.3-4.2-1.8-7.9-4.6-3.1-2.8-5.2-5.6-2.1-2.8-2.9-6.3-0.4-1.1-0.5-2-0.2-1-0.9-1.7-0.4-1-1-2-0.6-1-0.6-2.1 0-0.8-0.5-1.3-0.5-0.4-0.5-1zm34-21.2v2.4h1.1q0-0.4-0.1-1-0.1-0.5-1-1.4zm0-4.1h2.1v-0.8h-2.1zm0-8.7h2.1v-0.8q-0.7 0-1-0.2-0.2-0.2-1.1-0.2zm1.1 1.2q-0.9 0.1-1.4 0.6-0.4 0.5-1.6 0.5h3zm-5.1 17.5q1.6 0 1.9-0.1 0.2-0.1 0.7-1.2-1 0-2.6 1.3zm-1.4-7.3q0.7 0.6 1.7 0.9 1.1 0.4 1.8 0.4-0.7-1.1-1.2-1.2-0.5-0.1-2.3-0.1zm-0.5 3.2h-1.4q-2.6 0-2.6 1.7 0 0.5 0.2 0.7 0.5 0.4 1.2 0.4 0 1.1-0.1 1.2-0.1 0.1-1.3 0.1h-3.1v1.3q-2.3 0-2.3 1.1v0.8q0 0.5 0.4 0.5 0.7-0.7 1-0.8 0.2-0.1 0.9-0.5h1.7v2.6q0 0.8 0.2 1 0 0.3 0.2 0.5l1.4 1.3q0.8 0 1-0.3 0.2-0.2 1.2-0.2v-1.3h-1.2q-0.7 0-1.2 0.2-0.5 0.3-1.2 0.3 0-0.5 0.4-1.1 0.3-0.7-0.4-1.3 0-0.4 0.5-0.9 0.5-0.4 0.9-0.4 0-0.4 0.6-0.5 0.6-0.1 1.6-1 0-0.4 0.2-1.3 0.2-0.9 0.2-1.3h-1.6q0-0.9 0.6-1 0.6-0.1 1-0.5h0.5q0.5 0 1 0.4-0.5-0.4-0.5-0.8v-0.9h1.9l-0.5-0.9q0 0.7-0.5 0.8-0.5 0.1-0.9 0.1zm1.4-14.7q-1.4 1.3-2.4 1.3h2.4zm5.6 33.5h-4q-2.6 1.9-2.5 4.1-0.5 2.1-1.3 4.4-0.9 2.2-1.8 4.2v1.1q0.9 0.4 1.4 0.8 0.5 0.5 1.2 0.9 0 0.6 0.7 1.3 0.2 0.4 0.7 0.6 4.2-1.5 7.7-3 3.4-1.5 6.4-4.3 0-0.9 0.5-1.4 0.5-0.6 0.5-1.8v-2q0-0.8-1-1.3-1.2-0.6-2.2-1.3-1.1-0.6-1.8-1.1-1.2-1-2.2-1.5-1.1-0.4-2.3 0.3zm-5.6-10.6q-1.2-0.4-2-0.6-0.8-0.1-2-0.7v1.3zm0-14.2q0-1.3-1-2.2-1.1-0.4-1.6 0.2-0.5 0.7-1.4 0.7 1.2 0.4 2 0.5 0.8 0.1 2 0.8zm-5 2.8q-0.4 0.6-0.9 0.7-0.5 0.1-0.5 0.6v1h1q0.4 0 0.9-0.4 0.2-0.2 0.5-0.6 1.9 0 2.2-0.2 0.4-0.1 0.8-1.1v-2.4h-1.4v-0.4l-0.2 0.4h0.2q0 1.1-0.4 1.1h-1.2q0.2 0.2 0.5 0.2 0.2 0.2 0.4 0.2 0.3 0 0.3 0.4-1.2 0-1.2 1.3zm-1.4-2.4v-1.2h-0.5q0 0.8 0.2 1 0 0.2 0.3 0.2zm0.9 18.4q-0.7 0-1.2 0.5-0.4 0.6-1.4 1 1 0.6 1.1 0.7 0.1 0.2 0.6 0.1 0-0.6 0.4-1 0.5-0.5 0.5-1.3zm-5.4-11q0 1.1 2.3 1.1v-2.8q-0.7 0.4-0.9 0.8-0.2 0.4-0.9 0.4l-0.3 0.5zm9.7 3.4q-0.3 0.5 0.2 1.3 0 0.5 1 0.5h0.2q0.2-0.3 0.2-0.5v-0.4q0-0.7-0.4-0.7-0.3 0-0.3-0.2-0.2-0.2-0.2-0.4 0-0.2-0.5-0.6 0 0.6-0.2 1zm-10.9 9.9q-0.4-0.8-1.4-1.2v1.2zm59.6-63.6q-1.8-1.5-3.3-2.9-1.4-1.4-3.3-3.1h-5.4q-1.9-0.7-3.5-0.1-1.7 0.5-3.5 1.6-1.2 0.7-2.8 1.4-1.5 0.8-2.7 1.2-1.8 1.7-4.1 3.3-2.2 1.7-4.8 2.7l-0.3 0.2q-0.2 0.3-0.2 0.7-0.9 0.4-1.4 1.1-0.5 0.6-1.2 1.7-0.7 0.6-1.2 0.8-0.4 0.1-1.4 0.5v6q1.2 0.5 2.6 0.9 1.4 0.4 2.6 0.4 5.4 0 9.4 4.1 1.2 1.5 1.8 2.6 0.6 1.1 2.2 2.2 0.5 0.8 0.5 1.3-0.5 0.6-0.5 1.6v2q-0.7 1.1-0.9 2.2-0.2 1.1-1.2 2.4-2.6 3.8-5.9 7.9-3.3 4.1-5.4 9.1 0 0.6-0.6 1.2-0.6 0.5-0.6 0.9 0 0.9 0.6 1.3 0.6 0.5 1.1 1.1 2.6 2.2 4.8 3.7 2.3 1.5 4.6 2.4h1.4q1.7-1.6 3.1-2.7 1.4-1.2 3-3l0.5-0.4q0-1.1 0.5-2.5 0.5-1.4 0.9-2.4 1.2-1.8 2.6-3.7 1.4-1.9 2.6-3.7 1.4-3.9 2.7-7.1 1.3-3.2 1.8-6.7 1.2-2.8 2.3-5.5 1.2-2.7 1.2-5.5 0-1.3 0.3-3 0.2-1.7 0.2-3.9 0.7-2.3 0.3-4.2-0.3-1.8-0.3-4-0.9-2.3 0.9-4.1z" />
                                                <path id="&lt;Path&gt;" class="sf" d="m331.9 44.6v1.8c0 0.3-0.1 0.7-0.7 0.7h-6v-3.3h6c0.7 0 0.7 0.5 0.7 0.8z" />
                                                <path id="&lt;Path&gt;" class="sf" d="m351.1 44.4v9c0 0.2-0.1 0.7-0.8 0.8h-5.6c-0.6-0.1-0.7-0.6-0.7-0.8v-9c0-0.2 0.1-0.6 0.7-0.6h5.6c0.7 0 0.8 0.4 0.8 0.6z" />
                                                <path id="&lt;Compound Path&gt;" fill-rule="evenodd" class="sf" d="m257.8 33.4h105.1v31.2h-105.1zm78.7 10.2c-0.1-1.9-1.5-3-3.2-3.1h-13.3v17.1h5.2v-7.1h1.8l3.6 7.1h5.9l-4-7.1h0.8c1.6-0.1 3.2-1.2 3.2-3.1zm-18.5-3.1h-14.8v3.4h4.9v13.7h5.1v-13.7h4.8zm-16.8 0h-13.5v17.1h13.5v-3.4h-8.4v-3.6h8.4v-3.3h-8.4v-3.4h8.4zm-16.1 0h-6.9l-3.3 8.4-3.3-8.4h-6.9v17.1h5.1v-10.8l3.4 10.8h3.4l3.4-10.8v10.8h5.1zm71.1 2.9c-0.1-1.9-1.5-2.8-3.2-2.9h-11c-1.6 0.1-3 1-3.2 2.9v11.1c0.2 2 1.6 3 3.2 3.1h11c1.7-0.1 3.1-1.1 3.2-3.1z" />
                                            </g>
                                        </g>
                                    </svg></a>
                            </li>

                            <li>
                                <a href="https://www.metro.de/service/marktservices/serviceverpackungen" target="_blank">METRO <br> Serviceverpackungen </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

        </div>
    </div>

    <div class="footer-wrap">
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


                        <li><a href="https://www.metroag.de/en/imprint" title="" target="_blank">Imprint</a></li>

                        <li><a href="https://www.metroag.de/en/data-privacy" title="" target="_blank">Data Privacy</a></li>

                        <li><a href="use-https://www.metroag.de/en/terms-of-use" title="" target="_blank">Terms of Use</a></li>

                        <li><a href="contact-https://www.metroag.de/en/contact" title="" target="_blank">Contact</a></li>

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
                        <li><a href="https://www.metro.de/unternehmen/impressum" title="" target="_blank">Impressum</a></li>
                        <li><a href="https://www.metro.de/unternehmen/datenschutzallgemein" title="" target="_blank">Datenschutz</a></li>
                        <li><a href="https://www.metro.de/unternehmen/agb_allgemein" title="" target="_blank">Nutzungsbedingungen</a></li>
                        <li><a href="https://www.metro.de/kontakt" title="" target="_blank">Kontakt</a></li>
                    </ul>
                </div>
                <div class="footer-socials">
                    <ul>
                        <li><a href="https://www.facebook.com/metro.deutschland" target="_blank"> <i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/user/MetroGrossmarkt" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                        <li><a href="https://www.instagram.com/metro_deutschland/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/metro-ag" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="https://twitter.com/@METRO_News" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    </ul>

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
                        <h4>Vegan</h4>
                        <p>Kein Fleisch, Geflügel, Fisch, Insekten oder Zutaten, die aus einer dieser Quellen stammen. Keine Verarbeitungsstoffe, wie z. B. Hausenblase, die bei der Weinherstellung verwendet wird, oder Non-Food-Zutaten tierischen Ursprungs. Keine Produkte, die die Verletzung oder Ausbeutung von Tieren beinhalten. Dies schließt Honig mit ein. </p>
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
                        <h4>Vegetarisch
                        </h4>
                        <p>Kein Fleisch, Geflügel, Fisch, Insekten oder Zutaten, die aus einer dieser Quellen stammen. Keine Verarbeitungsstoffe, wie z. B. Hausenblase, die bei der Weinherstellung verwendet wird, oder Non-Food-Zutaten tierischen Ursprungs. Keine Produkte, die die Verletzung oder Ausbeutung von Tieren beinhalten. Dies schließt Honig mit ein. </p>
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
                        <p>Diese Ernährungsform basiert ausschließlich auf Lebensmitteln, von denen man annimmt, dass sie in der Steinzeit zu finden waren. Dazu gehören vor allem Fleisch, Eier, Obst, Gemüse, Nüsse und Honig. </p>
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
                        <p>Diese Ernährungsweise ist sehr kohlenhydratarm und fettreich. Sie ähnelt in vielerlei Hinsicht anderen kohlenhydratarmen Ernährungsformen. </p>
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
                        <p>Nur Obst. Diese Ernährungsform erweitert das Konzept der Veganer und achtet darauf, dass Pflanzen durch die Ernte nicht geschädigt werden. </p>
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
                        <p>Beinhaltet nahezu alle Lebensmittel pflanzlichen oder tierischen Ursprungs. </p>
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
                        <p>Fleisch, Geflügel oder Fisch werden gelegentlich verzehrt, um den Nährstoffbedarf einer Person zu decken. Manche Flexitarier wählen diesen Ernährungsstil, weil ihnen das Tierwohl wichtig ist und sie einen maßvolleren Konsum tierischer Produkte erzielen möchten.</p>
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
                            Leiten Sie Ihre Mitarbeitenden im Service entsprechend an
                        </h4>
                        <ul>
                            <li>Binden Sie die Mitarbeitenden von Anfang an ein und erklären Sie, was Sie tun möchten und warum. </li>
                            <li>Ihr Servicepersonal wird bei der Vermittlung Ihrer Philosophie von entscheidender Bedeutung sein und überzeugender sein, wenn es in Ihre Entscheidungen einbezogen wird.</li>
                            <li>Beispiele für nachhaltige Menüs können ihr Verständnis fördern und sie ermutigen, Ideen einzubringen. </li>
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
                            Reduzieren Sie den Umfang Ihrer Speisekarte
                        </h4>
                        <p>Eine kleinere Speisekarte wird häufig mit hoher Qualität gleichgesetzt. Zudem bietet sich die Gelegenheit, mehr saisonale Produkte zu verwenden und weniger Lebensmittel zu verschwenden. Versuchen Sie, ausgewählte Zutaten auf ein Minimum zu beschränken, während Sie die Klassiker, die Ihre Gäste besonders schätzen, beibehalten. Konzentrieren Sie sich auf die 20 Prozent der Gerichte, die 80 ProzentIhres Umsatzes erzielen. Bieten Sie ein Gericht an, das sich täglich, monatlich oder saisonabhängig ändert.</p>
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
                        <h4>Setzen Sie auf Gemüse</h4>
                        <ul>
                            <li>Führen Sie (mehr) Gerichte ein, bei denen
                                Gemüse die Hauptrolle spielt.</li>
                            <li>Erhöhen Sie die Menge von unverarbeitetem
                                Gemüse auf dem Teller im Vergleich zur Fleisch- oder Fischportion
                                Bieten Sie mehr Speisen an, die komplett auf
                                Gemüse basieren.</li>

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
                        <h4>Verwenden Sie nachhaltigen Fisch</h4>
                        <ul>
                            <li>Machen Sie Ihre Gäste mit weniger üblichen
                                Fischarten bekannt, darunter auch solche, die
                                normalerweise weggeworfen werden oder als
                                Beifang gelten. </li>
                            <li>Bieten Sie Fisch an, der aus
                                verantwortungsbewusster Fischerei stammt,
                                das heißt, der zertifiziert ist und <a href="https://www.metro.de/nachhaltigkeit/lieferkette-rueckverfolgbarkeit/pro-trace" target="_blank" style="color: white!important;">vollständig rückverfolgt</a> werden kann.</li>
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
                        <h4 class="nodeco12">
                            <a href="https://www.metro.de/produktwelten/fleischloser-genuss" target="_blank" style="color: white !important;">
                                Experimentieren Sie mit pflanzlichen
                                Proteinen
                            </a>
                        </h4>
                        <ul>
                            <li>Nutzen Sie (mehr) unverarbeitete
                                pflanzliche Lebensmittel als
                                Proteinlieferanten, etwa Linsen, Quinoa,
                                Teff, Bohnen oder Algen. </li>
                            <li>Verwenden Sie verschiedene Produkte auf
                                pflanzlicher Basis als Proteinlieferanten,
                                etwa Tofu oder Tempeh.</li>
                            <li>Bieten Sie eine Vielfalt von Getreidesorten
                                an.</li>
                            <li>Nutzen Sie alte Getreidesorten wie Teff oder
                                alte Sorten, die mit Ihrer Region verbunden
                                sind.</li>

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
                        <h4>Nehmen Sie Abstand von
                            stark verarbeiteten Zutaten</h4>
                        <p>Seien Sie vorsichtig bei Zutaten, die in
                            Anlehnung an traditionelle Lebensmittel
                            hergestellt wurden. Diese sind oft stark
                            verarbeitet, enthalten viel Zucker, Salz
                            und Transfette und sind nicht besonders gesund</p>
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
                        <h4>Setzen Sie Speisen auf die Karte,
                            die allen gerecht werden</h4>
                        <p>Bieten Sie Speisen an, die auf unterschiedliche
                            Ernährungsvorlieben eingehen, etwa auch
                            vegane Gerichte</p>
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
                            Führen Sie kleinere Portionsgrößen als Option ein
                        </h4>
                        <p>Viele Gäste bemühen sich, weniger zu essen. Dies geschieht oftmals aus gesundheitlichen Gründen, kann aber auch eine attraktive Option für Gäste mit Kindern sein. Immer mehr Gastronominnen und Gastronomen stellen fest, dass Kinder am besten die gleichen Gerichte wie Erwachsene erhalten sollten, wenn auch in kleineren Portionen. </p>
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
                            <a target="_blank" href="https://www.metro.de/nachhaltigkeit/nachhaltiges-sortiment/regional" style="color: white!important;">Beziehen Sie Ihre Produkte lokal, regional und saisonal</a>
                        </h4>
                        <p>Setzen Sie ein Zeichen mit einem verantwortungsbewussten Einkauf und verwenden Sie nur nachhaltigen Fisch und Lebensmittel, die biologisch, nährstoffreich, saisonal, fair hergestellt, lokal und regional sind. Achten Sie außerdem darauf, Lebensmittel einzukaufen, die die Artenvielfalt fördern und Abfälle vermeiden. Wenn Sie mehr darüber erfahren möchten, lesen Sie das Kapitel über einen <a href="introduction-to-responsible-sourcing-deu.php" style="color: white!important;">verantwortungsbewussten Einkauf</a>.</p>
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

                    <div class="modal-content1 flexi-cont">
                        <div>
                            <h4>
                                Verwenden Sie weniger und dafür besseres Fleisch
                            </h4>
                            <p>Wenn die meisten Ihrer Gerichte Fleisch beinhalten, können Sie die Portionsgröße an Fleisch, Geflügel und Fisch reduzieren. Achten Sie zusätzlich beim Einkauf von tierischen Produkten auf eine nachhaltige Erzeugung. Sie können auch verschiedene, normalerweise nicht verwendete Fleischteile zu sogenannten <a href="https://www.mpulse.de/de/warenbewegen/nose-to-tail-vergessene-delikatessen-erobern-die-restaurants" target="_blank" style="color: white!important;">Nose-to-Tail-Gerichten</a> verarbeiten. </p>
                            <div class="listing-use" id="more13">
                                <ul>
                                    <li>
                                        <h5> Verwenden Sie nachhaltigen Fisch</h5>
                                        <p>
                                            Bieten Sie Fisch aus nachhaltiger Fischerei an. Achten Sie auf entsprechende Zertifizierungen und volle Rückverfolgbarkeit. Bieten Sie auch unbekannte Arten an, einschließlich solcher, die normalerweise entsorgt werden oder Beifang sind.
                                        </p>
                                    </li>
                                    <li>
                                        <h5> Feiern Sie den Geschmack von frischem Gemüse </h5>
                                        <p>
                                            Führen Sie (mehr) Gerichte ein, bei denen Gemüse die Hauptzutat oder die einzige Zutat ist und erhöhen Sie den Anteil von vollwertigem Gemüse eines Gerichts im Vergleich zum Fleisch- oder Fischanteil.
                                        </p>
                                    </li>
                                    <li>
                                        <h5>
                                            Experimentieren Sie mit pflanzlichen Proteinen
                                        </h5>
                                        <p>
                                            Verwenden Sie (mehr) vollwertige pflanzliche Proteine, die in besonders hoher Konzentration in Linsen, Quinoa oder Bohnen vorkommen. Sie können auch verschiedene Arten von verarbeiteten pflanzlichen Proteinen einführen, z. B. Tofu und Tempeh.
                                        </p>
                                    </li>
                                    <li>
                                        <h5> Verwenden Sie unterschiedliche Getreidesorten</h5>
                                        <p>
                                            ProbierenSietraditionelle Getreidesorten beim Kochen und Backen aus oder solche, die in Ihrer Region besonders typisch sind.
                                        </p>
                                    </li>
                                    <li>
                                        <h5> Vermeiden Sie stark verarbeitete Zutaten </h5>
                                        <p>
                                            Achten Sie auf Nachahmungen traditioneller Zutaten. Diese sind oft stark verarbeitet, enthalten viel Zucker, Salz und Transfette und sind nicht besonders gesundheitsfördernd.
                                        </p>
                                    </li>
                                    <li>
                                        <h5> Führen Sie Gerichte ein, die für alle Ernährungsstile geeignet sind</h5>
                                        <p>
                                            Bieten Sie Gerichte an, die unterschiedlichen Ernährungsformen gerecht werden, wie z. B. auch vegane Optionen.
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>

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


            /*readmorejs */

            // function () {
            //   var dots = document.getElementById("dots");
            //   var moreText = document.getElementById("more");
            //   var btnText = document.getElementById("myBtn");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText.innerHTML = "WEITERLESEN "; 
            //     moreText.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText.innerHTML = "WENIGER"; 
            //     moreText.style.display = "block";
            //   }
            // }

            // function 13() {
            //   var dots = document.getElementById("dots");
            //   var moreText13 = document.getElementById("more13");
            //   var btnText13 = document.getElementById("myBtn13");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText13.innerHTML = "WEITERLESEN"; 
            //     moreText13.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText13.innerHTML = "WENIGER"; 
            //     moreText13.style.display = "block";
            //   }
            // }

            // function 14() {
            //   var dots14 = document.getElementById("dots14");
            //   var moreText14 = document.getElementById("more14");
            //   var btnText14 = document.getElementById("myBtn14");

            //   if (dots14.style.display === "none") {
            //     dots14.style.display = "block";
            //     btnText14.innerHTML = "WEITERLESEN"; 
            //     moreText14.style.display = "none";
            //   } else {
            //     dots14.style.display = "none";
            //     btnText14.innerHTML = "LESE WENIGER"; 
            //     moreText14.style.display = "block";
            //   }
            // }
            // function 1() {
            //   var dots = document.getElementById("dots");
            //   var moreText1 = document.getElementById("more1");
            //   var btnText1 = document.getElementById("myBtn1");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText1.innerHTML = "WEITERLESEN"; 
            //     moreText1.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText1.innerHTML = "LESE WENIGER"; 
            //     moreText1.style.display = "block";
            //   }
            // }
            // function 2() {
            //   var dots = document.getElementById("dots");
            //   var moreText2 = document.getElementById("more2");
            //   var btnText2 = document.getElementById("myBtn2");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText2.innerHTML = "WEITERLESEN"; 
            //     moreText2.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText2.innerHTML = "LESE WENIGER"; 
            //     moreText2.style.display = "block";
            //   }
            // }
            // function 3() {
            //   var dots = document.getElementById("dots");
            //   var moreText3 = document.getElementById("more3");
            //   var btnText3 = document.getElementById("myBtn3");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText3.innerHTML = "WEITERLESEN"; 
            //     moreText3.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText3.innerHTML = "LESE WENIGER"; 
            //     moreText3.style.display = "block";
            //   }
            // }
            // function 4() {
            //   var dots = document.getElementById("dots");
            //   var moreText4 = document.getElementById("more4");
            //   var btnText4 = document.getElementById("myBtn4");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText4.innerHTML = "WEITERLESEN"; 
            //     moreText4.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText4.innerHTML = "LESE WENIGER"; 
            //     moreText4.style.display = "block";
            //   }
            // }

            // function 5() {
            //   var dots = document.getElementById("dots");
            //   var moreText5 = document.getElementById("more5");
            //   var btnText5 = document.getElementById("myBtn5");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText5.innerHTML = "WEITERLESEN"; 
            //     moreText5.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText5.innerHTML = "LESE WENIGER"; 
            //     moreText5.style.display = "inline";
            //   }
            // }
            // function 6() {
            //   var dots = document.getElementById("dots");
            //   var moreText6 = document.getElementById("more6");
            //   var btnText6 = document.getElementById("myBtn6");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "block";
            //     btnText6.innerHTML = "WEITERLESEN"; 
            //     moreText6.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText6.innerHTML = "LESE WENIGER"; 
            //     moreText6.style.display = "block";
            //   }
            // }
            // function 7() {
            //   var dots = document.getElementById("dots");
            //   var moreText7 = document.getElementById("more7");
            //   var btnText7 = document.getElementById("myBtn7");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText7.innerHTML = "WEITERLESEN"; 
            //     moreText7.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText7.innerHTML = "LESE WENIGER"; 
            //     moreText7.style.display = "inline";
            //   }
            // }
            // function 8() {
            //   var dots = document.getElementById("dots");
            //   var moreText8 = document.getElementById("more8");
            //   var btnText8 = document.getElementById("myBtn8");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText8.innerHTML = "WEITERLESEN"; 
            //     moreText8.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText8.innerHTML = "LESE WENIGER"; 
            //     moreText8.style.display = "inline";
            //   }
            // }
            // function 9() {
            //   var dots = document.getElementById("dots");
            //   var moreText9 = document.getElementById("more9");
            //   var btnText9 = document.getElementById("myBtn9");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText9.innerHTML = "WEITERLESEN"; 
            //     moreText9.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText9.innerHTML = "LESE WENIGER"; 
            //     moreText9.style.display = "inline";
            //   }
            // }
            // function 10() {
            //   var dots = document.getElementById("dots");
            //   var moreText10 = document.getElementById("more10");
            //   var btnText10 = document.getElementById("myBtn10");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText10.innerHTML = "WEITERLESEN"; 
            //     moreText10.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText10.innerHTML = "LESE WENIGER"; 
            //     moreText10.style.display = "inline";
            //   }
            // }
            // function 11() {
            //   var dots = document.getElementById("dots");
            //   var moreText11 = document.getElementById("more11");
            //   var btnText11 = document.getElementById("myBtn11");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText11.innerHTML = "WEITERLESEN"; 
            //     moreText11.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText11.innerHTML = "LESE WENIGER"; 
            //     moreText11.style.display = "inline";
            //   }
            // }
            // function 12() {
            //   var dots = document.getElementById("dots");
            //   var moreText12 = document.getElementById("more12");
            //   var btnText12 = document.getElementById("myBtn12");

            //   if (dots.style.display === "none") {
            //     dots.style.display = "inline";
            //     btnText12.innerHTML = "WEITERLESEN"; 
            //     moreText12.style.display = "none";
            //   } else {
            //     dots.style.display = "none";
            //     btnText12.innerHTML = "LESE WENIGER"; 
            //     moreText12.style.display = "inline";
            //   }
            // }

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


            $(document).on('click', '.read-more-btn, .read-text', function() {
                var $el = $(this),
                    $el_wrap = $el.closest('.more-text'),
                    $content = $el_wrap.find('[id^="more"]'),
                    target = $el.attr('target');
                if (target != null) {
                    $content = $(target);
                }
                if ($content.hasClass('active')) {
                    $content.slideUp().removeClass('active');
                    $el.html('WEITERLESEN').removeClass('btn-active');
                } else {
                    $content.slideDown().addClass('active');
                    $el.html('Weniger').addClass('btn-active');
                }
            });
        </script>

        <div class="modal1">
            <div class="modal-overlay1 modal-toggle1"></div>
            <div class="modal-wrapper1 modal-transition1">
                <div class="modal-header1">
                    <button class="modal-close1 modal-toggle1"><svg class="icon-close icon" viewBox="0 0 32 32">
                            <use xlink:href="#icon-close"></use>
                        </svg></button>
                    <h2 class="modal-heading1">Dies ist ein Modal</h2>
                </div>

                <div class="modal-body1">
                    <div class="modal-content1">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eum delectus, libero, accusantium dolores Inventore obcaecati placeat cum sapiente vel laboriosam similique totam id ducimus aperiam, ratione fuga blanditiis maiores.</p>
                        <button class="modal-toggle1">Aktualisieren</button>
                    </div>
                </div>
            </div>
        </div>
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
                var cur_page_name = "Nachhaltige Speisekarte ";
                var cur_nav_link_id = "3";
                var eng_page_path = "explore-sustainable-menu-eng.php";
                var deu_page_path = "explore-sustainable-menu-deu.php";
                //manipulation
                pagemanipulation(cur_page_name, cur_nav_link_id, eng_page_path, deu_page_path);
                var menuIdVal = "0";
                menumanipulation(menuIdVal, "d");

                 //like share stats
        $(document).ready(function(){
            $.ajax({
                url : 'isliked.php?q=Nachhaltige Speisekarte ',
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
                url : 'isliked.php?q=Nachhaltige Speisekarte ',
                type : 'POST',
                success : function (result) {
                    var retVal=parseInt(result);
                    if(retVal>0){
                        //dislike
                        $.ajax({
                            url : 'dislike.php?q=Nachhaltige Speisekarte ',
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
                            url : 'like.php?q=Nachhaltige Speisekarte ',
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