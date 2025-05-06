<?php

require('./win.php');

if (isset($_POST['signUP_button'])) {
    $Name = $_POST['Name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];

    if (!empty($_POST['Name']) && !empty($_POST['age']) && !empty($_POST['gender'])) {

        $p = crud::conect()->prepare('INSERT INTO  mad(name,age,gender)VALUES(:a,:b,:c)');
        $p->bindValue(':a', $Name);
        $p->bindValue(':b', $age);
        $p->bindValue(':c', $gender);
        $p->execute(); // Added this line to execute the prepared statement

        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
        header('location: y.php');

        exit(); // Added exit() to stop further execution
    } else {
        echo "<script type='text/javascript'> alert('Please fill in all fields')</script>";
    }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="y.php" method="post">
	<input type="text" placeholder="" id="Username" name="Name"required>
                 <label for="" class="floating">Name</label><br>

                 <input type="text" placeholder="" id="Username" name="age"required>
                 <label for="" class="floating">age</label><br>

                 <input type="text" placeholder="" id="Username" name="gender"required>
                 <label for="" class="floating">gender</label><br>
                 	<input type="submit" name="signUP_button" value="Sign UP">

     </form >            
</body>
</html>

















