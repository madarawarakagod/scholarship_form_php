<?php

require('./connection.php');

if(isset($_POST['signUP_button'])){
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $Confirmpassword = $_POST['Confirmpassword'];

    if(!empty($_POST['name']) && !empty($_POST['lastName']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        if($password == $Confirmpassword) {
            $existingUser = crud::conect()->prepare('SELECT * FROM signup WHERE email = :e LIMIT 1');
            $existingUser->bindValue(':e', $email);
            $existingUser->execute();
            if($existingUser->rowCount() == 0) {
                $p = crud::conect()->prepare('INSERT INTO signup(name, lastName, email, password) VALUES(:n, :l, :e, :p)');
                $p->bindValue(':n', $name);
                $p->bindValue(':l', $lastName);
                $p->bindValue(':e', $email);
                $p->bindValue(':p', $password);
                $p->execute();
                echo 'Successfully';
                header('location:Information.php');
            } else {
                echo "<script type='text/javascript'> alert('Email already exists')</script>";
            }
        } else {
            echo "<script type='text/javascript'> alert('Password does not match')</script>";
        }  
    }
}

?>









<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign up page</title>
    <style type="text/css">
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

body{
    background-color: rgb(0, 100, 153);

}

.form{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    background: rgb(224, 224, 235);
    width: 350px;
    height: 460px;
    border-radius: 10px;
    margin-left: 350px;
    margin-top: 8px;
}

    .form input{
        border: 1px solid rgb(80,80,80,0.4);
        transform: translateY(50px);
        display: block;
        margin: 15px auto 0px auto;
        height: 30px;
        width: 80%;
        text-align: center;

    }

    input:focus{
        outline: none;

    }

    .form input[type="submit"]{
        margin-top: 20px;
        background: rgb(20, 20, 31);
        width: 77%;
        color: rgb(255, 255, 255);
        border: none;
        font-size: 17px;
        font-family: 'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS';
    }

    ::placeholder{
        position: relative;
        left: 20px;
        text-align: justify;
    }

    .title{
        transform: translate(10px,40px);
    }
    
    img{
        position: fixed;
       height: 700px;
       width: 1400px;
       margin: 0px;
       border-radius: 0px;
    }
    p{
        font-size: 20px;
        margin-left: 25px;
        font-weight: bold;
    }
    </style>
</head>
<body>
	<img src="ab.jpg">

	<div class="form">

		<form action="" method="post">
			<div class="title">
				<p>Sign UP</p>
			</div>
	<input type="text" name="name" placeholder="Name">
			<input type="text" name="lastName" placeholder="Last Name">
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="password">
			<input type="password" name="Confirmpassword" placeholder="Confirm password">
			<input type="submit" name="signUP_button" value="Sign UP">

		</form>
		
	</div>
</body>
</html>