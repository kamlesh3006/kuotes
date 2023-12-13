<?php
session_start();
include("connect.php");

if (!isset($_SESSION["userid"])) {
    echo "not_logged_in";
    exit();
}

$user_id = $_SESSION["userid"];
$quote_id = $_POST["quote_id"];

// Check if the quote is already saved
$checkQuery = "SELECT * FROM saved_quotes WHERE userid = $user_id AND quote_id = $quote_id";
$checkResult = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($checkResult) > 0) {
    // Quote is already saved, so unsave it
    $unsaveQuery = "DELETE FROM saved_quotes WHERE userid = $user_id AND quote_id = $quote_id";
    mysqli_query($conn, $unsaveQuery);
    echo "unsaved";
} else {
    // Quote is not saved, so save it
    $saveQuery = "INSERT INTO saved_quotes (userid, quote_id) VALUES ($user_id, $quote_id)";
    mysqli_query($conn, $saveQuery);
    echo "saved";
}

mysqli_close($conn);
?>
