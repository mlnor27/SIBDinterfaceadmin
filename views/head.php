<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?= WEBROOT ?>img/favicon.png">

    <title>Creative - Bootstrap Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="<?= WEBROOT ?>css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?= WEBROOT ?>css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?= WEBROOT ?>css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?= WEBROOT ?>css/font-awesome.min.css" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="<?= WEBROOT ?>assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
    <link href="<?= WEBROOT ?>assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?= WEBROOT ?>assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>

    <!-- owl carousel -->
    <link rel="stylesheet" href="<?= WEBROOT ?>css/owl.carousel.css" type="text/css">
    <link href="<?= WEBROOT ?>css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="<?= WEBROOT ?>css/fullcalendar.css">
    <link href="<?= WEBROOT ?>css/widgets.css" rel="stylesheet">
    <link href="<?= WEBROOT ?>css/style.css" rel="stylesheet">
    <link href="<?= WEBROOT ?>css/style-responsive.css" rel="stylesheet" />
    <link href="<?= WEBROOT ?>css/xcharts.min.css" rel=" stylesheet">
    <link href="<?= WEBROOT ?>css/jquery-ui-1.10.4.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="<?= WEBROOT ?>js/myfunctions.js"></script>
    <script type="text/javascript" src="<?= WEBROOT ?>js/ajax.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo WEBROOT ?>js/jquery.js"></script>

    <script src="<?= WEBROOT ?>js/html5shiv.js"></script>
    <script src="<?= WEBROOT ?>js/respond.min.js"></script>
    <script src="<?= WEBROOT ?>js/lte-ie7.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo WEBROOT ?>css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="<?php echo WEBROOT ?>js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" language="javascript" src="<?php echo WEBROOT ?>js/tableformations.js"></script>


    <![endif]-->
</head>

<body>
<!-- container section start -->
<section id="container" class="">

    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="<?php echo WEBROOT ?>home/index" class="logo">Nice <span class="lite">Admin</span></a>
        <!--logo end-->


        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">

                <!-- alert notification start-->
                <li id="alert_notificatoin_bar" class="dropdown">
                    <?php
                    if ($_SESSION['id']){
                        echo "<li class='sub-menu'>
                                <a class='' href='".WEBROOT."auth/deconnect'>
                                    <span>Déconnexion</span>
                                </a>
                            </li>";
                    }
                    ?>

                </li>
                <!-- alert notification end-->
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username"><?php echo $_SESSION['name'] ?></span>
                        <b class="caret"></b>
                    </a>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->