<?php
require 'dbConnection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];


    // Query to fetch invoice data within the specified date range
    $sql = "SELECT invoice.id, invoice.date, invoice.invoice_no, customer.first_name, customer.last_name, district.district, invoice.item_count, invoice.amount
                FROM invoice
                INNER JOIN customer ON invoice.customer = customer.id
                INNER JOIN district ON customer.district = district.id
                WHERE invoice.date BETWEEN '$startDate' AND '$endDate'";

    $result = $connect->query($sql);

    $reportResults = array();

    if ($result->num_rows > 0) {


        while ($row = $result->fetch_assoc()) {
            $reportResults[] = $row;
        }
    } else {
        echo 'No results found.';
    }

}

header("Location: ../viewReportResults.php");
exit(); 

?>