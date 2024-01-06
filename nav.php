<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">

<nav class="sidebar">
    <div>
        <h1 id="title">ERP System</h1>

        <div id="slide-bar-container" class="sidenav col-sm-2">

            <button class="dropdown-btn">Customers
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="customers.php">Add Customer</a>
                <a href="viewCustomers.php">View Customers</a>
            </div>

            <button class="dropdown-btn">Items
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="items.php">Add Items</a>
                <a href="viewItems.php">View Items</a>
            </div>

            <button class="dropdown-btn">Reports
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="invoiceReport.php">Invoice Report</a>
                <a href="invoiceItemReport.php">Invoice Item Report</a>
                <a href="itemReport.php">Item Report</a>
            </div>

        </div>
    </div>
</nav>


<script src="scripts.js"></script>

<script>
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            } else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>