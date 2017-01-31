<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>
<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<div id="main">
    <div id="navigation">
        <br>
        <a href="admin.php">&laquo; Main Menu</a><br>
        <?php echo navigation($current_subject, $current_page); ?>
        <br />
        <a href="new_subject.php">+ Add a subject</a>
    </div>
    <div id="page">
        <?php echo message(); ?>
        <?php if ($current_subject) { ?>
            <h2>Manage Subject</h2>
            Menu name: <?php echo htmlentities($current_subject["menu_name"]); ?><br />
            Position: <?php echo htmlentities($current_subject["position"]); ?><br />
            Visible: <?php echo htmlentities($current_subject["visible"] == 1 ? 'yes' : 'no'); ?><br />
            <br />
            <a href="edit_subject.php?subject=<?php echo urlencode($current_subject["id"]); ?>">Edit subject</a>
            <br /><br />
            <h2>Pages in this subject:</h2> 
            <ul>
                <?php
                $subject_pages = find_pages_for_subject($current_subject["id"]);
                while ($page = mysqli_fetch_assoc($subject_pages)) {
                    echo "<li>";
                    $safe_page_id = urlencode($page["id"]);
                    echo "<a href=\"manage_content.php?page={$safe_page_id}\">";
                    echo htmlentities($page["menu_name"]);
                    echo "</a>";
                    echo "</li>";
                }
                ?>
            </ul>

        <?php } elseif ($current_page) { ?>
            <h2>Manage Page</h2>
            Menu name: <?php echo htmlentities($current_page["menu_name"]); ?><br />
            Position: <?php echo htmlentities($current_page["position"]); ?><br />
            Visible: <?php echo htmlentities($current_page["visible"] == 1 ? 'yes' : 'no'); ?><br />
            Content: <br />
            <div class="view-content">
                <?php echo htmlentities($current_page["content"]); ?>
            </div>
        <?php } else { ?>
            Please select a subject or a page.
        <?php } ?>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
