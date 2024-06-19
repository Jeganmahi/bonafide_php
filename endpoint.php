<?php
require 'config.php';
include("session.php");



if (isset($_POST['reload'])) {

    $query = "select uid , fname ,type, purpose , applydate,rejection_reason , status from bonafide2";
    $result = mysqli_query($db, $query);

    $dataarray = array();

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $dataarray[] = $row;
        }
    }
    echo json_encode($dataarray);
    return;
}
?>