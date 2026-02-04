<?php 

$conn = new mysqli("localhost", "root", "", "youtube");

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // $new_variable = $_POST['new_variable']; // Example for additional form field

    $stmt = $conn->prepare("INSERT INTO form_submission (email, subject, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $email, $subject,  $message);

    if($stmt->execute()){
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}


?>