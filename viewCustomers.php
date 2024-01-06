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
                    <h2>Customer List</h2>
                    <hr>

                    <!-- Customer List -->
                    <div class="mt-4">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Contact Number</th>
                                    <th>District</th>
                                </tr>
                            </thead>

                            <tbody id="customerList">

                                <!-- Customer data to be populated dynamically from the database -->
                                <?php include('db/readCustomerData.php'); ?>
                                <?php $customers = getCustomers(); ?>
                                <?php foreach ($customers as $customer) : ?>
                                    <tr>
                                        <td><?php echo $customer['title']; ?></td>
                                        <td><?php echo $customer['first_name']; ?></td>
                                        <td><?php echo $customer['middle_name']; ?></td>
                                        <td><?php echo $customer['last_name']; ?></td>
                                        <td><?php echo $customer['contact_no']; ?></td>
                                        <td><?php echo $customer['district']; ?></td>
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