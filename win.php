<?php

class crud{
	public static function conect()
	{
		try{
		$con=new PDO('mysql:localhost=host;dbname=we','root','');
		return $con;
	    }catch(PDOException $error1){
	    	echo 'Something went wrong,it was not possible to connect you to database!'.$error1->getMessage();
	    }catch(Exception $error2){
	    	echo 'Generic error!'.$error2->getMessage();
	    }
	}
}



?>