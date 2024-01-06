<?php
require 'dbConnection.php';

function getCustomers() {
    global $connect;
    $sql = "SELECT * FROM customer";
    $result = $connect->query($sql);

    $customers = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $customers[] = $row;
        }
    }

    return $customers;
}

function getDistricts() {
    global $connect;
    $sql = "SELECT DISTINCT district FROM district";
    $result = $connect->query($sql);

    $districts = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $districts[] = $row['district'];
        }
    }

    return $districts;
}


?>