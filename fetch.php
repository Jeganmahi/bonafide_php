<?php
require 'config.php';
include("session.php");
$condition = $_GET['condition'];
$query = "SELECT * FROM bonafide2 WHERE uid = '$condition'";
$result = mysqli_query($db, $query);


if ($result) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    // Convert the data array to JSON
    $json_data = json_encode($data);

    // Set the response content type to JSON
    header("Content-Type: application/json");

    // Send the JSON response
    echo $json_data;
}
?>
