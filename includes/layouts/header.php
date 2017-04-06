<?php
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8"> <!-- set character encoding for the document -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Widget Corp <?php if ($layout_context == "admin") {
            echo "Admin";
        } ?></title>
    <script src="dist/jquery-3.2.0.min.js" type="text/javascript"></script>
    <script src="dist/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="dist/parallax.js/parallax.min.js" type="text/javascript"></script>
    <script src="javascripts/scripts.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
    <link href="dist/bootstrap/css/bootstrap.min.css" media="all" rel="stylesheet" type="text/css"/>
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body class="container-fluid nopadding">

<?php

if ($layout_context != "admin") { ?>
    <header id="header-public" class="container-fluid nopadding header-img parallax-window" data-parallax="scroll"
            data-image-src="../images/header.png">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <polygon points="0,100 0,0 50,100" style="fill:#f5f5f5;"></polygon>
            <polygon points="100,0 100,100 50,100" style="fill:#f5f5f5;"></polygon>
        </svg>

        <h1 id="main-title">flow-cms</h1>

    </header>
<?php } else { ?>
    <header id="header-admin">
        <h1>Widget Corp <?php if ($layout_context == "admin") {
                echo "Admin";
            } ?></h1>
    </header>

<?php } ?>

