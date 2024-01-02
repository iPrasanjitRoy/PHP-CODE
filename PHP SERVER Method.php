<html lang="en">

<head>
    <title>Form Page</title>
</head>

<body>

    <!-- Form : Sends Data To The Current Page Using The Post Method  -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name: <input type="text" name="fname"><br><br>
        Age: <input type="text" name="age"><br><br>
        <input type="submit" name="save">
    </form>

    <?php
    // Check If The "Save" Button Was Clicked In Form 
    if (isset($_POST['save'])) {
        echo $_POST['fname'] . "<br>";
        echo $_POST['age'] . "<br>";
    }
    ?>
</body>

</html> 