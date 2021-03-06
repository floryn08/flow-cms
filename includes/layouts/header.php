<?php
require_once("../includes/functions.php");
find_selected_page(true);
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"> <!-- set character encoding for the document -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Flow CMS <?php if ($layout_context == "admin") {
            echo "Admin";
        } ?></title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <link href="css/public.css" media="all" rel="stylesheet" type="text/css"/>
    <!--    <link rel="stylesheet" type="text/css" href="css/style.css"/>-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/public.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.js"></script>
</head>
<body class="container-fluid nopadding">

<div id="st-container" class="st-container">

    <?php echo public_navigation($current_subject, $current_page); ?>

    <div class="st-pusher">

        <div class="st-content"><!-- this is the wrapper for the content -->
            <div class="st-content-inner"><!-- extra div for emulating position:fixed of the menu -->

                <?php
                if ($layout_context != "admin") { ?>
                    <header id="header-public" class="container-fluid nopadding parallax-window">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                            <polygon points="0,100 0,0 50,100" style="fill:#f5f5f5;"></polygon>
                            <polygon points="100,0 100,100 50,100" style="fill:#f5f5f5;"></polygon>
                        </svg>

                        <h1 id="main-title">flow-cms</h1>

                        <div class="navbar navbar-inverse">
                            <div id="st-trigger-effects" class="column">
                                <button class="navbar-toggle" data-effect="st-effect-2">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>

                    </header>
                <?php } else { ?>
                    <header id="header-admin">
                        <h1>Widget Corp <?php if ($layout_context == "admin") {
                                echo "Admin";
                            } ?></h1>
                    </header>

                <?php } ?>

