<?php


        // create connection to DB with mysqli_connect

        // $conn = mysqli_connect("hostname", "username", "password", "database name");

        // $conn = mysqli_connect("db:3306", "root", "root", "products");
          $conn = mysqli_connect("127.0.0.1:3308", "2024tbaldwin", "tbaldwin447", "welearnd_gdes261_2024_tbaldwin");


        //Verify connection with mysqli_connect_errno and mysqli_connect_error
        //if statement 
        if(mysqli_connect_errno()) {
            echo "Database error: " . mysqli_connect_error();
            exit();
        }

?>