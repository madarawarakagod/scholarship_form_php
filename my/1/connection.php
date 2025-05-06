<?php

   $Fullname=$_POST["Fullname"];
   $Contactphone=$_POST["Contactphone"];
   $ContactAddress=$_POST["ContactAddress"];
   $ContactEmail=$_POST["ContactEmail"];
   $country=$_POST["country"];
   $gender=$_POST["gender"];

   $conn=new mysqli('localhost','root','','my');
   if($conn->connect_error){
      die('Connection failed : '.$conn->connect_error);
   }else{
      $stmt=$conn->prepare("insert into practise(Fullname,Contactphone,ContactAddress,ContactEmail,country,gender)values(?,?,?,?,?,?)");

      $stmt->bind_param("sissss",$Fullname,$Contactphone,$ContactAddress,$ContactEmail,$country,$gender);
      $stmt->close();
      $conn->close();
   }
   
   ?>
