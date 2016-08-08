
        <?php
        $link = mysqli_connect('localhost', 'eddy', 'dtycts16');
        if (!$link) {
            $output = 'Unable to connect to the database server.';
            include 'output.html.php';
            exit();
        }
        if (!mysqli_set_charset($link, 'utf8')) {
            $output = 'Unable to set database connection encoding.';
            include 'output.html.php';
            exit();
        }
        if (!mysqli_select_db($link, 'eddy')) {
            $output = 'Unable to locate the Eddy database.';
            include 'output.html.php';
            exit();
        }
        
      
        $output = 'Database connection established.';
        include 'output.html.php';
        ?>
