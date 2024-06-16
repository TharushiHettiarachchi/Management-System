<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Management System</title>
</head>

<body>
    <?php include "connection.php"; ?>
   <div class="dashboard-background">
    <div class="dashboard-section1">
        <div class="dashboard-button1"></div>
        <div class="dashboard-button2"></div>
        <div class="dashboard-button3"></div>
        <div class="dashboard-button4"></div>
        <div class="dashboard-button5"></div>
        <div class="dashboard-button6"></div>
        <div class="dashboard-button7"></div>

    </div>
    <div class="dashboard-section2">
        <div class="dashboard-section4">
            <div class="dashboard-chart1">
                <img src="Resources/employee.png" class="chart-img"/>
                <span class="chart-title">No.of Employees</span>
                <span class="chart-count">0</span>
            </div>
            <div class="dashboard-chart1">
                <img src="Resources/customer.png" class="chart-img"/>
                <span class="chart-title">No.of Customers</span>
                <span class="chart-count">0</span>
            </div>
            <div class="dashboard-chart1">
                <img src="Resources/supplier.png" class="chart-img"/>
                <span class="chart-title">No.of Suppliers</span>
                <span class="chart-count">0</span>
            </div>
            <div class="dashboard-chart1">
                <img src="Resources/employee.png" class="chart-img"/>
                <span class="chart-title">No.of Completed Jobs</span>
                <span class="chart-count">0</span>
            </div>
            <div class="dashboard-chart1">
                <img src="Resources/employee.png" class="chart-img"/>
                <span class="chart-title">No.of Pending Jobs</span>
                <span class="chart-count">0</span>
            </div>
           
        </div>
        <div class="dashboard-section5">
            <div class="alert-body">You have 03 items out of stock</div>
        </div>
    </div>

   </div>



    <script src="script.js"></script>
</body>

</html>