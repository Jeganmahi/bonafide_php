<?php
// Include your database connection code here
require 'config.php';
include("session.php");

$dept = $_GET['dept']; // Get the department parameter from the URL

// Query to count the number of pending bonafide requests
$countQuery = "SELECT COUNT(*) AS pendingCount FROM bonafide2 WHERE dept='$dept' AND status = 0";
$countResult = mysqli_query($db, $countQuery);
$pendingCount = 0; // Initialize the count

if ($countResult) {
    $countData = mysqli_fetch_assoc($countResult);
    $pendingCount = $countData['pendingCount'];
}

echo $pendingCount; // Return the count as a response
?>
