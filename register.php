<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>bokazon registration</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'Connect.php';?>

       

        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Bookazon</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">null</a></li>
                    <li><a href="#">null</a></li> 
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </nav>
        

        <h1>Register</h1>

        <!-- this is the register section -->
        <div class="container">
            <h2>Register</h2>
            <form action="conformation.php" method="POST">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email"  class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" name="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <label for="pwd2">comfirm Password:</label>
                    <input type="password" class="form-control" name="pwd2" placeholder="Enter password">
                </div>
              
                

                <input class ="button" type="submit" value="submit"></input>
            </form>
        </div>
        
      

    </body>
</html>
