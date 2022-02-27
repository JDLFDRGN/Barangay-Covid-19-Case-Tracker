<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data</title>
</head>
<body>
<?php
    include "session.php";
    echo "<style>";
    include "style.css";
    echo "</style>";

    if(isset($_POST["submit"])){
        $first_name = $_POST["first-name"];
        $last_name = $_POST["last-name"];
        $covid_status = $_POST["covid-status-choices"];
        $case_per_day = $_POST["covid-per-day"];
        $barangay = $_POST["barangay"];

        $connect->query("INSERT INTO city(barangay, case_per_day) VALUES('$barangay', '$case_per_day');");
        $connect->query("INSERT INTO person(firstname,lastname,covid_positive,barangay) VALUES('$first_name','$last_name','$covid_status','$barangay');");

    }
?>
<h1 style="text-align: center">Insert Data</h1>
    <div class="insert-container">
        <form id="insert-form" action="insert.php" method="post">
            <div id="insert-first">
                <div id="full-name">
                    <div>
                        <label>First Name:</label><input type="text" name = "first-name" placeholder="Enter the first name" required>
                    </div>
                    <div>
                        <label>Last Name:</label><input type="text" name = "last-name" placeholder="Enter the last name" required>
                    </div>
                </div>
                <div id="covid-status">
                    <label>Covid Positive:</label>
                    <span>
                       <input type="radio" name="covid-status-choices" value="POSITIVE" checked><label>TRUE</label>
                    </span>
                    <span>
                        <input type="radio" name="covid-status-choices" value="NEGATIVE"><label>FALSE</label>
                    </span>        
                </div>
            </div>
            <div id="insert-second">
                <div>
                    <label>Barangay covid case per day:</label><input type="number" name="covid-per-day" min="0" placeholder="Enter number of case" value = 0>
                </div>
                <div>
                    <label>Barangay:</label><textarea name="barangay" cols="30" rows="3" placeholder="Enter the barangay" required></textarea>
                </div>
            </div>
            <div id="insert-third">
                <input type="submit" value="submit" name="submit">
                <input type="reset" value="clear">
            </div> 
        </form>
    </div>
</body>
</html>
