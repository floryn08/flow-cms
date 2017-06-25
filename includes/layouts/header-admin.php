<?php
if (!isset($layout_context)) {
    $layout_context = "public";
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Widget Corp <?php if ($layout_context == "admin") {
            echo "Admin";
        } ?></title>
    <link href="stylesheets/public.css" media="all" rel="stylesheet" type="text/css"/>
</head>
<body>
<header id="header">
    <?php
    /**    aa
     * incearca si cu png, poate merge mai bine
     */
    if ($layout_context != "admin") { ?>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
            <defs>
                <pattern id='image' width="1" height="1" viewBox="0 0 100 100" preserveAspectRatio="none">
                    <image xlink:href='images/header.jpg' width="100" height="100" preserveAspectRatio="none"></image>
                </pattern>
            </defs>
            <polygon class="svg--lg" points="0 0,100 0,100 70,50 100, 0 70">

            </polygon>

        </svg>
    <?php } else { ?>

        <h1>Flow CMS <?php if ($layout_context == "admin") {
                echo "Admin";
            } ?></h1>
    <?php } ?>
</header>