<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Emplyee Sample Data</title>
</head>
<body>
    <main><h2 class="subject">Employee</h2>
    <div id="sum"> 
    the sum of the annual salary :
    </div>
    <div id="average">
    the average of the age :
    </div>
    <div class="filterByDep">
        <div> Filter by Department : </div>
        <div>
        <select class="dep-filter" onchange="filterTable()">
        <option value="All">All</option>
            <option value="Accounting">Accounting</option>
            <option value="Engineering">Engineering</option>
            <option value="Finance">Finance</option>
            <option value="Human Resources">Human Resources</option>
            <option value="IT">IT</option>
            <option value="Marketing">Marketing</option>
            <option value="Sales">Sales</option>
        </select>            
        </div>
    </div>
    </main>

    <?php
      include("info.php");
    ?>
    
<script src="filter.js"></script>

</body>
</html>