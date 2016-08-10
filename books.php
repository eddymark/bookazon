<html>
    <head>
        <meta charset="UTF-8">
        <title>bookazon main</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>

        <?php include 'Connect.php'; ?>

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

        <?php
        $sql = INSERT INTO `eddy`.`book` (`quantity`, `bookIBSM`, `bookTitle`, `bookGenre`, `bookPrice`)
        VALUES ('12', '9118716', 'how to hunt', 'Wild', '20.00')
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<br> quantitiy: " . $quantitiy["id"] . " - bookibsm: " . $row["bookibsm"] . " " . $booktitle["booktitle"] . "<br>";
            }
        } else {
            echo "0 results";
        }

        $conn->close();
        ?>  



    </body>
</html>


