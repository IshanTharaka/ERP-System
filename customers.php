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
                    <h2>Customer Management</h2>
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

                    <!-- Customer Registration Form -->
                    <div class="card">
                        <div class="card-header">
                            Register Customer
                        </div>
                        <div class="card-body">
                            <form id="customerForm" action="db/insertCustomerData.php" method="post">
                                <div class="form-group">
                                    <label for="title">Title:</label>
                                    <select class="form-control" id="title" name="title" required>
                                        <option value="Mr">Mr</option>
                                        <option value="Mrs">Mrs</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Dr">Dr</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">First Name:</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter First Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="firstName">Middle Name:</label>
                                    <input type="text" class="form-control" id="middleName" name="middleName" placeholder="Enter Middle Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="lastName">Last Name:</label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter Last Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="contactNo">Contact Number: [07x xxx xxxx]</label>
                                    <input type="text" class="form-control" id="contactNo" name="contactNo" required pattern="[0-9]{10}" placeholder="Enter Phone Number" required>
                                </div>
                                <div class="form-group">
                                    <label for="district">District:</label>
                                    <select class="form-control" id="district" name="district" required>
                                        <!-- Options to be populated dynamically from the database -->
                                        <?php include('db/readCustomerData.php'); ?>
                                        <?php $districts = getDistricts(); ?>
                                        <?php foreach ($districts as $district) : ?>
                                            <option value="<?php echo $district; ?>"><?php echo $district; ?></option>
                                        <?php endforeach; ?>
                                    </select>
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
            setTimeout(function() {
                $("#autoCloseAlert").alert('close');
            }, 5000);
        });
    </script>
   
    <script src="scripts.js"></script>
</body>

</html>