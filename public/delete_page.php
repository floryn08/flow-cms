<?php
/**
 * Created by PhpStorm.
 * User: Flow
 * Date: 24/2/2017
 * Time: 10:53 AM
 */
?>
<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/db_connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<?php

$current_page = find_page_by_id($_GET["page"], false);

if (!$current_page) {
    // subject ID was missing or invalid or
    // subject couldn't be found in DB
    redirect_to("manage_content.php");
}

$id = $current_page["id"];

$query = "DELETE FROM pages WHERE id = {$id} LIMIT 1";
$result = mysqli_query($connection, $query);

if ($result && mysqli_affected_rows($connection) == 1) {
    // Success
    $_SESSION["message"] = "Page deleted.";
    redirect_to("manage_content.php");
} else {
    // Failure
    $_SESSION["message"] = "Page delete failed.";
    redirect_to("manage_content.php?page={$id}");
}
?>