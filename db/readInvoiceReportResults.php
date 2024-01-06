<?php
require 'dbConnection.php';

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

    if ($result->num_rows > 0) {
        echo '<div class="container mt-4">';
        echo '<h2 class="mb-4">Invoice Report</h2>';
        echo '<hr>';
        echo '<div class="table-responsive">';
        echo '<table class="table table-bordered table-striped">';
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th>Invoice Number</th>';
        echo '<th>Date</th>';
        echo '<th>Customer</th>';
        echo '<th>Customer District</th>';
        echo '<th>Item Count</th>';
        echo '<th>Invoice Amount</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['invoice_no'] . '</td>';
            echo '<td>' . $row['date'] . '</td>';
            echo '<td>' . $row['first_name'] . ' ' . $row['last_name'] . '</td>';
            echo '<td>' . $row['district'] . '</td>';
            echo '<td>' . $row['item_count'] . '</td>';
            echo '<td>' . $row['amount'] . '</td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo 'No results found.';
    }

    $connect->close();
}
?>
