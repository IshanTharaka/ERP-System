<?php
require 'dbConnection.php';

function getItemReportResults()
{
    global $connect;
    // Query to fetch item data without repetition
    $sql = "SELECT DISTINCT item.id, item.item_name, item_category.category AS item_category,
            item_subcategory.sub_category AS item_subcategory, item.quantity
            FROM item
            INNER JOIN item_category ON item.item_category = item_category.id
            INNER JOIN item_subcategory ON item.item_subcategory = item_subcategory.id";

    $result = $connect->query($sql);

    $itemReportResults = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $itemReportResults[] = $row;
        }
    }

    return $itemReportResults;
}
