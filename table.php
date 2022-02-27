<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="table-container">
        <form id="table-search" action="table.php" method="post">
            <input type="search" name="search-bar" placeholder="Tip: Type all to show entire data">
            <input type="submit" value="Enter" name="submit">
        </form>
        <table>
            <tr>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Covid Status</th>
                <th>Barangay</th>
            </tr>
        <?php
            session_start();

            include "session.php";
            echo "<style>";
            include "style.css";
            echo "</style>";

           
            if(isset($_POST['submit'])){
                $search = $_POST['search-bar'];
                $_SESSION['first-time'] = false;

                if($search != ''){
                    $data = $connect->query("SELECT * FROM person WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR covid_positive LIKE '%$search%' OR barangay LIKE '%$search%';");
                    
                    for($i = 0; $i<mysqli_num_rows($data); $i++){
                        $transform = $data->fetch_assoc();

                        echo "<tr>";
                        echo "<td>$transform[lastname]</td> <td>$transform[firstname]</td> <td>$transform[covid_positive]</td> <td>$transform[barangay]</td>";
                        echo "</tr>";
                    }
                }
                if($search == "ALL" || $search == "all"){
                    $data = $connect->query("SELECT * FROM person");
                    
                    for($i = 0; $i<mysqli_num_rows($data); $i++){
                        $transform = $data->fetch_assoc();
    
                        echo "<tr>";
                        echo "<td>$transform[lastname]</td> <td>$transform[firstname]</td> <td>$transform[covid_positive]</td> <td>$transform[barangay]</td>";
                        echo "</tr>";
                    }
                }
            }
          
            echo "<script> 
                    let submit = document.querySelector('#search');
                    let tableRows = document.querySelectorAll('tr');

                    submit.addEventListener('submit',()=>{
                        
                        for(let i=1;i<tableRows.length;i++){
                            tableRows[i].remove();
                        }
                    });
                  </script>";

            if($_SESSION['first-time'] == true){
                    $data = $connect->query("SELECT * FROM person");
                    
                    for($i = 0; $i<mysqli_num_rows($data); $i++){
                        $transform = $data->fetch_assoc();
    
                        echo "<tr>";
                        echo "<td>$transform[lastname]</td> <td>$transform[firstname]</td> <td>$transform[covid_positive]</td> <td>$transform[barangay]</td>";
                        echo "</tr>";
                    }
                }
        ?>
        </table>
    </div>
   
</body>
</html>


