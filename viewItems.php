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
                    <h2>Item List</h2>
                    <hr>

                   
                    <!-- Item List -->
                    <div class="mt-4">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Item Code</th>
                                    <th>Item Name</th>
                                    <th>Item Category</th>
                                    <th>Item Sub Category</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                </tr>
                            </thead>

                            <tbody id="itemList">
                                <?php include('db/readItemData.php'); ?>
                                <?php $items = getItems(); ?>
                                <?php foreach ($items as $item) : ?>
                                    <tr>
                                        <td><?php echo $item['item_code']; ?></td>
                                        <td><?php echo $item['item_name']; ?></td>
                                        <td><?php echo $item['item_category']; ?></td>
                                        <td><?php echo $item['item_subcategory']; ?></td>
                                        <td><?php echo $item['quantity']; ?></td>
                                        <td><?php echo $item['unit_price']; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
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
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="scripts.js"></script>
</body>

</html>