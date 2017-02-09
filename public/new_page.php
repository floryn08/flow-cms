<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php include("../includes/layouts/header.php"); ?>
<?php find_selected_page(); ?>

<?php
if (isset($_POST['submit'])) {
    // Process the form

    $menu_name = mysql_prep($_POST["menu_name"]);
    $position = (int) $_POST["position"];
    $visible = (int) $_POST["visible"];
    $content = mysql_prep($_POST("content"));


    // validations
    $required_fields = array("menu_name", "position", "visible", "content");
    validate_presences($required_fields);

    $fields_with_max_lengths = array("menu_name" => 30);
    validate_max_lengths($fields_with_max_lengths);

    if (!empty($errors)) {
        $_SESSION["errors"] = $errors;
        redirect_to("manage_content.php");
    }

    $query = "INSERT INTO pages (";
    $query .= "  menu_name, position, visible, content";
    $query .= ") VALUES (";
    $query .= "  '{$menu_name}', {$position}, {$visible}, '{$content}'";
    $query .= ")";
    $result = mysqli_query($connection, $query);

    if ($result) {
        // Success
        $_SESSION["message"] = "Page created.";
        redirect_to("manage_content.php" . urlencode($current_subject["id"]));
    } else {
        // Failure
        $_SESSION["message"] = "Page creation failed.";
//        redirect_to("new_subject.php");
    }
} else {
    // This is probably a GET request
    redirect_to("new_subject.php");
}
?>

<div id="main">
    <div id="navigation">
        <?php echo navigation($current_subject, $current_page); ?>
    </div>
    <div id="page">
        <?php echo message(); ?>
        <?php $errors = errors(); ?>
        <?php echo form_errors($errors); ?>

        <h2>Create Subject</h2>
        <form action="create_page.php" method="post">
            <p>Menu name:
                <input type="text" name="menu_name" value="" />
            </p>
            <p>Position:
                <select name="position">
                    <?php
                    $subject_set = find_all_subjects();
                    $subject_count = mysqli_num_rows($subject_set);
                    for ($count = 1; $count <= ($subject_count + 1); $count++) {
                        echo "<option value=\"{$count}\">{$count}</option>";
                    }
                    ?>
                </select>
            </p>
            <p>Visible:
                <input type="radio" name="visible" value="0" /> No
                &nbsp;
                <input type="radio" name="visible" value="1" /> Yes
            </p>
            <input type="submit" name="submit" value="Create Page" />
            <textarea name="content"></textarea>
        </form>
        <br />
        <a href="manage_content.php">Cancel</a>
    </div>
</div>

<?php include("../includes/layouts/footer.php"); ?>
