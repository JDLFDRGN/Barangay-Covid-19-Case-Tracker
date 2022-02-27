<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
         include "session.php";
         echo "<style>";
         include "style.css";
         echo "</style>";
    ?>
    <div class="total-container">
        <form action="total.php" method="post">
            <select name="barangay">
                <?php
                    include "session.php"; 
                    $barangay_list = $connect->query("SELECT barangay FROM city");
                    for($i=0;$i<mysqli_num_rows($barangay_list);$i++){
                        $transform = $barangay_list->fetch_assoc();
                        echo "<option value='$transform[barangay]'>$transform[barangay]</option>";
                    }
                ?>
            </select>
            <input id="search-barangay" type="submit" name="submit" value="Search">
        </form>
        <div>
            <label>Covid cases per day:</label>
            <?php   
                if(isset($_POST['submit'])){
                    $choose_barangay = $_POST['barangay'];           
                    $case = $connect->query("SELECT DISTINCT case_per_day FROM city WHERE barangay = '$choose_barangay'");
                    $transform = $case->fetch_assoc();
                    echo "<label>$transform[case_per_day]</label>";
                }
            ?>
        </div>
        <div>
            <label>Total covid cases:</label>
            <?php   
                if(isset($_POST['submit'])){     
                    $case = $connect->query("SELECT covid_positive FROM person");
                    echo "<label>";
                    echo mysqli_num_rows($case);
                    echo "</label>";
                }
            ?>
        </div>
    </div>
</body>
</html>