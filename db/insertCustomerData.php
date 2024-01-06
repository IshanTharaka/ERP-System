<?php
require 'dbConnection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $lastName = $_POST['lastName'];
    $contactNo = $_POST['contactNo'];
    $district = $_POST['district'];

    $district_num_sql = "SELECT id FROM district WHERE district='$district'";
    $result = $connect->query($district_num_sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $district_num = $row['id'];
    } else {
        $district_num = null;
    }

    // Insert customer data into the database
    $sql = "INSERT INTO customer (title, first_name, middle_name, last_name, contact_no, district)
            VALUES ('$title', '$firstName', '$middleName','$lastName', '$contactNo', '$district_num')";

    if ($connect->query($sql) === TRUE) {
        $_SESSION['registration_status'] = 'Customer registered successfully';
    } else {
        $_SESSION['registration_status'] = 'Error: ' . $sql . '<br>' . $connect->error;
    }

    $connect->close();
}

header("Location: ../customers.php");
exit();
?>
