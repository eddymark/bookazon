<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'Connect.php';

        $email = $_POST('email');
        $pwd = $_POST('pwd');
        echo 'Welcome to the website, ' .
      

        $sql = "INSERT INTO Customer (Email,accountPassword)
                values ('$email','$pwd')";

        if (mysqli_query($link, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($link);
        }
        mysqli_close($link);
        ?>






        </body>
        </html>
