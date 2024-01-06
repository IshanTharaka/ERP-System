<?php
require 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $startDate = $_POST['startDate'];
    $endDate = $_POST['endDate'];

    // Query to fetch invoice item data within the specified date range
    $sql = "SELECT invoice.invoice_no, invoice.date AS invoiced_date, 
                   CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
                   item.item_code, item.item_name, item_category.category AS item_category,
                   item.unit_price
            FROM invoice
            INNER JOIN invoice_master ON invoice.invoice_no = invoice_master.invoice_no
            INNER JOIN item ON invoice_master.item_id = item.id
            INNER JOIN customer ON invoice.customer = customer.id
            INNER JOIN item_category ON item.item_category = item_category.id
            WHERE DATE(invoice.date) BETWEEN '$startDate' AND '$endDate'";
    
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="container mt-4">';
        echo '<h2>Invoice Item Report</h2>';
        echo '<hr>';
        echo '<table class="table table-bordered">';
        echo '<thead>';
        echo '<tr>';
        echo '<th>Invoice Number</th>';
        echo '<th>Invoiced Date</th>';
        echo '<th>Customer Name</th>';
        echo '<th>Item Code</th>';
        echo '<th>Item Name</th>';
        echo '<th>Item Category</th>';
        echo '<th>Item Unit Price</th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>' . $row['invoice_no'] . '</td>';
            echo '<td>' . $row['invoiced_date'] . '</td>';
            echo '<td>' . $row['customer_name'] . '</td>';
            echo '<td>' . $row['item_code'] . '</td>';
            echo '<td>' . $row['item_name'] . '</td>';
            echo '<td>' . $row['item_category'] . '</td>';
            echo '<td>' . $row['unit_price'] . '</td>';
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
