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
      session_start();

      echo "<style>";
      include "style.css";
      echo "</style>";

      $_SESSION['first-time'] = true;
    
      $createTable1 = "CREATE TABLE city(
                  barangay varchar(100) NOT NULL PRIMARY KEY,
                  case_per_day int NOT NULL
                );";
      $createTable2 = "CREATE TABLE person(
                  person_ID int AUTO_INCREMENT NOT NULL PRIMARY KEY,
                  firstname varchar(50) NOT NULL,
                  lastname varchar(50) NOT NULL,
                  covid_positive varchar(50) NOT NULL,
                  barangay varchar(100) NOT NULL
                );";

      $connect->query($createTable1);
      $connect->query($createTable2);
  ?>
  <div class="home-container">
      <div id="home-navigation">
            <div id="home-logo">
              <img id="logo" src="covid_tracker.jpg" alt="wala">
              <h1 class="title">Barangay Covid-19 Case Tracker</h1>
            </div>
            <div class="navigation">
                <div id="home-insert"><h2>Insert Data</h2></div>
                <div id="home-table"><h2>Table</h2></div>
                <div id="home-total"><h2>Total Case</h2></div>
            </div>
      </div>
  </div>
</body>
</html>
<?php
  echo "<script>";
  include "navigate.js";
  echo "</script>";
?>
