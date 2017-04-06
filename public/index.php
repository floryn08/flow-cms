<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php $layout_context = "public"; ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(true); ?>

<div id="main">
    <!--    <div id="navigation">-->
    <!---->
    <!--        --><?php //echo public_navigation($current_subject, $current_page); ?>
    <!---->
    <!--    </div>-->
    <div id="page" class="container">

        <?php if ($current_page) { ?>

            <h2><?php echo htmlentities($current_page["menu_name"]); ?></h2>
            <?php echo nl2br(htmlentities($current_page["content"])); ?>

        <?php } else { ?>
            <?php
            /**
             * TODO: logica pentru featured post
             * hint: style="background: url(<?php echo 'imagine' ?>);"
             */
            ?>
            <div class="row featured row">
                <div class="col-sm-12 featured-post">
                    <div class="featured-post-wrap" style="background: linear-gradient(to right,
                                                          rgba(255,0,165,0.5),
                                                          rgba(39,0,255,0.5)
                                                        ), url(images/placeholder-image.jpg);">
                        <h2>Titlu</h2>
                        <div class="post-details">
                            <div class="post-excerpt col-md-7">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu...</p>
                            </div>
                            <div class="read-more-btn-wrap text-center col-md-3">
                                <div class="btn btn-default btn-read-more">CITESTE TOT</div>
                            </div>
                            <div class="author-wrap text-center col-md-2">
                                <img src="images/author-placeholder.jpg" alt="" class="author-image">
                                <div class="author-info">
                                    <p>Postat de <span>Xulescu</span></p>
                                    <p>In <span>Categorie</span></p>
                                    <p><span>30 ian 2015</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row post-list">
                <div class="col-md-4 item-post">
                    <div class="item-post-wrap" style="background: linear-gradient(to right,
                                                          rgba(255,0,165,0.5),
                                                          rgba(39,0,255,0.5)
                                                        ), url(images/placeholder-image.jpg);">
                        <h2>Titlu</h2>
                        <div class="post-button-wrap">
                            <button class="btn btn-default btn-read-more">CITESTE TOT</button>
                        </div>
                        <div class="item-post-details">
                            <p>postat de <span>xulescu</span> // in <span>categorie</span> // <span>30 ian 2015</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item-post">
                    <div class="item-post-wrap" style="background: linear-gradient(to right,
                                                          rgba(255,0,165,0.5),
                                                          rgba(39,0,255,0.5)
                                                        ), url(images/placeholder-image.jpg);">
                        <h2>Titlu</h2>
                        <div class="post-button-wrap">
                            <button class="btn btn-default btn-read-more">CITESTE TOT</button>
                        </div>
                        <div class="item-post-details">
                            <p>postat de <span>xulescu</span> // in <span>categorie</span> // <span>30 ian 2015</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 item-post">
                    <div class="item-post-wrap" style="background: linear-gradient(to right,
                                                          rgba(255,0,165,0.5),
                                                          rgba(39,0,255,0.5)
                                                        ), url(images/placeholder-image.jpg);">
                        <h2>Titlu</h2>
                        <div class="post-button-wrap">
                            <button class="btn btn-default btn-read-more">CITESTE TOT</button>
                        </div>
                        <div class="item-post-details">
                            <p>postat de <span>xulescu</span> // in <span>categorie</span> // <span>30 ian 2015</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
