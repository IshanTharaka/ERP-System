<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>ERP System</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 p-0 position-fixed"><?php include('nav.php'); ?></div>
            <div class="col-sm-10 offset-sm-2">
                <div class="container mt-4">
                    <h2>Items Management</h2>
                    <hr>

                    <?php
                    session_start();

                    if (isset($_SESSION['registration_status'])) {
                    ?>
                        <div id="autoCloseAlert" class="alert alert-success" role="alert">
                            <strong>Hey !</strong> <?php echo $_SESSION['registration_status']; ?>
                            <!-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> -->
                        </div>
                    <?php
                        unset($_SESSION['registration_status']);
                    }
                    ?>

                    <!-- Item Registration Form -->
                    <div class="card">
                        <div class="card-header">
                            Register Item
                        </div>
                        <div class="card-body">
                            <form id="itemForm" action="db/insertItemData.php" method="post">
                                <div class="form-group">
                                    <label for="itemCode">Item Code:</label>
                                    <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Enter the Item Code" required>
                                </div>
                                <div class="form-group">
                                    <label for="itemName">Item Name:</label>
                                    <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter the Item Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="itemCategory">Item Category:</label>
                                    <select class="form-control" id="itemCategory" name="itemCategory" required>
                                        <?php include('db/readItemData.php'); ?>
                                        <?php $categories = getItemCategory(); ?>
                                        <?php foreach ($categories as $categorie) : ?>
                                            <option value="<?php echo $categorie; ?>"><?php echo $categorie; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="itemSubCategory">Item Sub Category:</label>
                                    <select class="form-control" id="itemSubCategory" name="itemSubCategory" required>
                                        <?php $sub_categories = getItemSubCategory(); ?>
                                        <?php foreach ($sub_categories as $sub_categorie) : ?>
                                            <option value="<?php echo $sub_categorie; ?>"><?php echo $sub_categorie; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter The Quantity" min="0" required>
                                </div>
                                <div class="form-group">
                                    <label for="contactNo">Unit Price:</label>
                                    <input type="number" class="form-control" id="unitPrice" name="unitPrice" placeholder="Enter Unit Price" min="0" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>

                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>


    <script>
        // Close the alert after 5 seconds (5000 milliseconds)
        $(document).ready(function() {
            window.setTimeout(function() {
                $("#autoCloseAlert").alert('close');
            }, 5000);
        });
    </script>
   
    <script src="scripts.js"></script>
</body>

</html>