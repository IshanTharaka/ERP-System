<?php
require 'dbConnection.php';

function getItemCategory() {
    global $connect;
    $sql = "SELECT category FROM item_category";
    $result = $connect->query($sql);

    $categories = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $categories[] = $row['category'];
        }
    }

    return $categories;
}

function getItemSubCategory() {
    global $connect;
    $sql = "SELECT sub_category FROM item_subcategory";
    $result = $connect->query($sql);

    $sub_categories = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $sub_categories[] = $row['sub_category'];
        }
    }

    return $sub_categories;
}

function getItems() {
    global $connect;
    $sql = "SELECT item.*, item_category.category AS item_category, item_subcategory.sub_category AS item_subcategory
            FROM item
            LEFT JOIN item_category ON item.item_category = item_category.id
            LEFT JOIN item_subcategory ON item.item_subcategory = item_subcategory.id";
    
    $result = $connect->query($sql);

    $items = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $items[] = $row;
        }
    }

    return $items;
}
?>