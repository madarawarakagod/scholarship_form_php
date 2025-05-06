<?php
$Fullname=$_POST['Fullname'];
$Contactphone=$_POST['Contactphone'];
$ContactAddress=$_POST['ContactAddress'];
$ContactEmail=$_POST['ContactEmail'];
$country=$_POST['country'];
$gender=$_POST['gender'];


if(!empty($Fullname) || !empty($Contactphone) || !empty($ContactAddress) || !empty($ContactEmail) || !empty($country) || !empty($gender)){

$host="localhost";
$dbname="application";
$username="root";
$password="";


//create connection
$conn=new mysqli($host,$dbname);

if(mysqli_connect_error()){
	die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect_error());

}else{
	$SELECT="SELECT ContactEmail From information Where ContactEmail=? Limit 1";
	$INSERT="INSERR Into information(Fullname,Contactphone,ContactAddress,ContactEmail,country,gender) values(?,?,?,?,?,?)";

	//prepare statement
    $stmt=$conn->prepare($SELECT);
    $stmt->bind_param("s",$ContactEmail);
    $stmt->execute();
    $stmt->bind_result($ContactEmail);
    $stmt->store_result();
    $rnum=$stmt->stmt->num_rows;

   if($rnum==0){
   	$stmt->close();

   	$stmt=$conn->prepare($INSERT);
   	$stmt->bind_param("ssssii",$Fullname,$Contactphone,$ContactAddress,$ContactEmail,$country,$gender);
   	$stmt->execute();
   	echo "New record inserted successfully";
   }else{
   	echo "someone already register using this email";
   }
   $stmt->close();
   $conn->close();

}


}else{
	echo "All fiels are required";
	die();
}

?>