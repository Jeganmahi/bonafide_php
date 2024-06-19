<?php
require 'config.php';
include("session.php");
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $certificateType = $_POST["certificateType"];

    $fname = $_POST["fname"];
    $type = $_POST["type"];
    $lname = $_POST["lname"];
    $refno = $_POST["refno"];
    $regno = $_POST["regno"];
    $id = $_POST["id"];
    $applydate = $_POST["applydate"];
    $aadhar = $_POST["aadhar"];
    $gender = $_POST["gender"];
    $fathername = $_POST["fathername"];
    $syear = $_POST["syear"];
    $ayear = $_POST["ayear"];
    $degree = $_POST["degree"];
    $dept = $_POST["dept"];
    $dob = $_POST["dob"];
    $boarding = $_POST["boarding"];
    $photo = $_POST["photo"];
  
    // Update the database (modify this query as per your database structure)
    $query = "INSERT INTO bonafide2 (purpose,fname,lname,type,refno,regno,id,applydate,aadhar,gender,fathername,syear,ayear,degree,dept,dob,boarding,photo) VALUES('$certificateType','$fname','$lname','$type','$refno','$regno','$id',CURRENT_DATE,'$aadhar','$gender','$fathername','$syear','$ayear','$degree','$dept','$dob','$boarding','$photo')";
    $query_run = mysqli_query($db, $query);
    if($query_run)
    {
        $res = [
            'status' => 200,
            'message' => 'Bonafide applied successfully'
        ];
        echo json_encode($res);
        return;
    }
    else
    {
        $res = [
            'status' => 500,
            'message' => 'Something went wrong'
        ];
        echo json_encode($res);
        return;
    }
}

?>
