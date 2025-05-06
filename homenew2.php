<?php
    require('./connection.php');

    if(isset($_POST['login_button'])){
    	$_SESSION['validate']=false;
    $name=$_POST['name'];
   $password=$_POST['password'];
   $p=crud::conect()->prepare('SELECT * FROM signup WHERE name=:n and password=:p');
        $p->bindValue(':n',$name);
        $p->bindValue(':p',$password);
        $p->execute();
        $d=$p->fetchAll(PDO::FETCH_ASSOC);
        if($p->rowCount()>0){
        	$_SESSION['name']=$name;
        	$_SESSION['password']=$password;
        	$_SESSION['validate']=true;
        	$p->execute();
echo "<script type='text/javascript'> alert('Successfully Register')</script>";
header('location:Information.php');
                    exit();           	
        }else{
        	echo "<script type='text/javascript'> alert('Make sure that you are registered')</script>";
        
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login page</title>
	
		<link rel="stylesheet" type="text/css" href="./homenew2.css">
	
</head>
<body>
	<div class="nav">
	<ul>
		<li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Academic</a></li>
        <li><a href="#">Student</a></li>
        <li><a href="#">Administration </a></li>
        <li style="float:right" id="ab"><a href="./signup.php">Sign Up</a></li>
	</ul>
</div>
<div class="img">
	<img src="new.png"  alt="image 01">
	<h1 id="topic">Institute of<br> Technology <br>  Mark</h1>
</div>


<div class="Container">
    	<form action="" method="post">
    		<h1>Login</h1>
    		<div class="input">
                 <input type="text" placeholder="" id="Username" name="name"required>
                 <label for="" class="floating">Username</label>
    		</div>
    		<div class="input">
                 <input type="password" name="password"placeholder="" id="password" required>
                 <label for="" class="floating">Password</label>
    		</div>
    		<div class="remember-forget">
    			<div class="remember-me">
    				<input type="checkbox" id="rememberMe">
    				<label for="rememberMe">Remember me</label>
    			</div>
    			<a href="#" id="pass">Forget Password?</a>
    		</div>
    		
            <input  style="font-weight: bold"  type="submit" value="Login" class="submit-btn" name="login_button">

            
        </form>
    
</div>

<div class="foot">
	<footer>
		Copyright © 2023 Institute of Technology Mark.</footer>
</div>
</body>
</html>
