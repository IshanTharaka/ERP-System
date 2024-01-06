<?php
require 'dbConnection.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemCode = $_POST['itemCode'];
    $itemName = $_POST['itemName'];
    $itemCategory = $_POST['itemCategory'];
    $itemSubcategory = $_POST['itemSubCategory'];
    $quantity = $_POST['quantity'];
    $unitPrice = $_POST['unitPrice'];

    $sql = "INSERT INTO item (item_code, item_name, item_category, item_subcategory, quantity, unit_price)
            VALUES ('$itemCode', '$itemName',
                    (SELECT id FROM item_category WHERE category='$itemCategory'),
                    (SELECT id FROM item_subcategory WHERE sub_category='$itemSubcategory'),
                    '$quantity', '$unitPrice')";

    if ($connect->query($sql) === TRUE) {
        $_SESSION['registration_status'] = 'Item registered successfully';
    } else {
        $_SESSION['registration_status'] = 'Error: ' . $sql . '<br>' . $connect->error;
    }

    $connect->close();
}

header("Location: ../items.php");
exit();
?>
