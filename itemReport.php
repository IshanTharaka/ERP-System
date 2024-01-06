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
                    <h2>Item Report</h2>
                    <hr>

                    <!-- Display Report Table -->
                    <div class="container mt-4">

                        <div class="mt-4">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Item Category</th>
                                        <th>Item Sub Category</th>
                                        <th>Item Quantity</th>
                                    </tr>
                                </thead>
                                <tbody id="customerList">

                                    <!-- Report data to be populated dynamically from the database -->
                                    <?php include('db/readItemReportResults.php'); ?>
                                    <?php $reportDetails = getItemReportResults(); ?>
                                    <?php foreach ($reportDetails as $reportDetail) : ?>
                                        <tr>
                                            <td><?php echo $reportDetail['item_name']; ?></td>
                                            <td><?php echo $reportDetail['item_category']; ?></td>
                                            <td><?php echo $reportDetail['item_subcategory']; ?></td>
                                            <td><?php echo $reportDetail['quantity']; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <script src="scripts.js"></script>
</body>

</html>