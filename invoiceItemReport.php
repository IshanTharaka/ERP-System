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
                    <h2>Invoice Item Report</h2>
                    <hr>

                    <!-- Invoice Item Report Form -->
                    <div class="card">
                        <div class="card-header">
                            Select Date Range
                        </div>
                        <div class="card-body">
                            <form action="db/readInvoiceItemReportResults.php" method="post">
                                <div class="form-group">
                                    <label for="startDate">Start Date:</label>
                                    <input type="date" name="startDate" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="endDate">End Date:</label>
                                    <input type="date" name="endDate" class="form-control" required>
                                </div>
                                <button type="submit" id="generateReportBtn" class="btn btn-primary">Generate Report</button>
                            </form>
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