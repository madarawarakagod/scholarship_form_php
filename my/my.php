<?php

require 'connection.php';

if(isset($_POST["submit"])){
	$Fullname=$_POST["Fullname"];
   $Contactphone=$_POST["Contactphone"];
   $ContactAddress=$_POST["ContactAddress"];
   $ContactEmail=$_POST["ContactEmail"];
   $country=$_POST["country"];
   $gender=$_POST["gender"];


$query="INSERT INTO practise VALUES('','$Fullname','$Contactphone','$ContactAddress','$ContactEmail','$country','$gender')";

mysqli_query($conn,$query);
echo 

<script>alert('Data inserted successfully')</script>

}









?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Applicant Information</title>
		<style type="text/css">
			*
			{
				padding: 10px 0 10px 0;
				margin: 0;
				font-family: sans-serif;
				box-sizing: border-box;

			}
			body
			{
				display: flex;
				justify-content: center;
				align-items: center;
			
				background-image: url(51.jpg)
				/*background-color:  #005580;*/

			}
			.Container
			{
				max-width: 800;
				padding: 28px;
				margin: 0 28px;
				border-radius: 10px;
				overflow: hidden;
				background:   #005580;

				box-shadow: 0 15px 20px rgba(0,0,0,0.6);
				background: transparent;

			}
			h2
			{
				font-size: 26px;
				font-weight: bold;
				text-align: left;
				color: #005580;
				border-bottom: 2px solid  black;
				padding-bottom: 8px;
			}
            .content
            {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 20px 0;

            }
            .input-box:nth-child(2n)
            {
               justify-content: end;

            }

            .intput-box label,gender-title{
            	width: 95%;
            	color: #fff;
            	font-weight: bold;
            	margin: 5px 0;

            }
            .gender-title
            {
            	font-size: 16px;
            }
            .input-box input
            {
                height: 30px;
                width: 95%;
                padding-left: 5px;
                border-radius: 5px;
                border:1px solid #CCC;
                outline: none;
                margin: 10px 10px 10px 0px;
            }
            .input-box input:is(:focus,:valid)
            {
            	box-shadow: 0 3px 6px;

            }
            .gender-category label
            {
            	padding: 0 20px 0 5px;
            	font-size: 14px;
            }
            .gender-category
            {
            	color: black;
            }
            .gender-category label,.gender-category input-box
            {
            	cursor: pointer;
            }

            .button-container
            {
            	margin: 15px 0;
            }
            
            .button-container button
            {
               width: 100%;
               margin-top: 10px;
               padding: 10px;
               display: block;
               font-size: 20px;
               color: #fff;
               border:none;
               border-radius: 5px;
               background-image: linear-gradient(to right,#aa076b,#61045f);
               cursor: pointer;
               transition: 0.3s;
            }

             .button-container button:hover
             {
             	background-image: linear-gradient(to right,#61045f,#aa076b);
             }
            
            #country
            {
            	height: 30px;
                width: 740px;
                padding: 0 0px;
                border-radius: 5px;
                border:1px solid #CCC;
                outline: none;
                margin-top: 16px;
            }
          
            
            input[type=radio]
             {
                margin:10px 10px 30px 10px;  
             } 

            input[type=reset]
            {
            	width: 100px;
            	height: 43px;
               margin-top: 35px;
               margin-left: 20px;
               padding: 10px;
               display: block;
               font-size: 20px;
               color: #fff;
               border:none;
               border-radius: 5px;
               background-image: linear-gradient(to right,#aa076b,#61045f);
               cursor: pointer;
               transition: 0.3s;


            }

            


             @media(max-width:600px){
             	.Container{
             		min-width: 280px;
             	}
             	.content{
             		max-height: 380px;
             		overflow: auto;

             	}
             	.input-box{
             		margin-bottom: 12px;
             		width: 100%;
             	}
             	input-box:nth-child(2n){
             		justify-content: space-between;
             	}
             	.gender-category{
             		display: flex;
             		justify-content: space-between;
             		width: 60%;
             	}
             	.content::webkit-scrolbar
             	{
             		width:0;
             	}
             }





		</style>
</head>
<body>
		

	<div class="Container">
		
		<form action="insert.php" method="POST">
		<h2>Applicant Information</h2>
		<div class="content">
			<div class="input-box">
				<label for="name" >Full Name</label>
				<input type="text" placeholder="Enter full name" id="full" name="Fullname" required >
			</div>           
			<div class="input-box">
				<label for="phone">Contact phone</label>
				<input type="text" placeholder="Enter phone"  name="Contactphone" required>
			</div>
			<div class="input-box">
				<label for="Address">Contact Address</label>
				<input type="text" placeholder="Enter Address"  name="ContactAddress" required>
			</div>
			
			<div class="input-box">
				<label for="Email">Contact Email</label>
				<input type="text" placeholder="Enter Email"  name="ContactEmail" required>
			</div>



			<div class="input-box">
             <label for="country" id="country-title">Country </label>
              <select name="country" id="country">
              <option value="United States">United States</option>
              <option value="Sri Lanka">Sri Lanka</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="Germany">Germany</option>
              <option value="France">France</option>
              <option value="Italy">Italy</option>
              <option value="Spain">Spain</option>
              <option value="Russia">Russia</option>
              <option value="China">China</option>
              <option value="Japan">Japan</option>
              <option value="India">India</option>
              <option value="Australia">Australia</option>
              <option value="Brazil">Brazil</option>
              <option value="Mexico">Mexico</option>
             </select>
           </div>
           
            
		</div>
	
		
	    <span class="gender-title">Gender</span>
            <div class="gender-category">
            <input type="radio" name="gender" id="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>		
		    </div>	   


         <!-- <div class="input-box">
				<label for="dob">Date of Birth</label>
				<input type="date" name="dob" required>
			</div>

 
	 <span class="gender-title">Marital Status</span>
            <div class="gender-category">
            <input type="radio" name="Status" id="male">
            <label for="Married">Married</label>
            <input type="radio" name="Status" id="female">
            <label for="Unmarried">Unmarried</label>		
		    </div>	    
	 
       
       
		<h2>Academic Information</h2>
		<div class="content">
			<div class="input-box">
				<label for="High School Name" >High School Name</label>
				<input type="text" placeholder="Enter High School Name"  name="High School Name" required >
			</div>  
			<div class="input-box">
				<label for="name">Extracurricular Activities</label>
				<input type="text" placeholder="Enter Extracurricular Activities"  name="Extracurricular Activities" required>
			</div>         
			<div class="input-box">
				<label for="name">Degree Program</label>
				<input type="text" placeholder="Enter Degree Program"  name="Degree Program" required>
			</div>
			<div class="input-box">
				<label for="name">Graduation Year</label>
				<input type="text" placeholder="Enter Graduation Year"  name="Graduation Year" required>
			</div>
			
			
            
		</div>	
	    <span class="gender-title">Award of Class</span>
            <div class="gender-category">
            <input type="radio" name="Award" id="First Class">
            <label for="male">First Class</label>

            <input type="radio" name="Award" id="Second Class (Upper)">
            <label for="Second Class (Upper)">Second (Upper)</label>

            
            <input type="radio" name="Award" id="Second Class (Lower)">
            <label for="Second Class (Lower)">Second (Lower)</label>

            <input type="radio" name="Award" id="Pass">
            <label for="male">Pass</label>

            	
		    </div>
		    







        
		<h2>Financial Information</h2>
		<div class="content">
			<div class="input-box">
				<label for="Annual Family Income" >Annual Family Income</label>
				<input type="text" placeholder="Enter Annual Family Income"  name="Annual Family Income" required >
			</div>           
			<div class="input-box">
				<label for="No Of dependents in Households">Dependents in Households</label>
				<input type="text" placeholder="Enter no of dependents in Households"  name="No Of dependents in Households" required>
			</div>
			<div class="input-box">
				<label for="Expected Financial Aid ">Expected Financial Aid </label>
				<input type="text" placeholder="Enter Graduation Year"  name="Graduation Year" required>
			</div>
		</div>	          
	
	  





       
		<h2>Reference Information</h2>
		<div class="content">
			<div class="input-box">
				<label for="Name Of Reference" >Name Of Referenceme</label>
				<input type="text" placeholder="Enter Name Of Referencee"  name="Name Of Reference" required >
			</div>           
			<div class="input-box">
				<label for="Reference Contact Email">Reference Contact Email</label>
				<input type="text" placeholder=" Enter Reference Contact Email"  name="Reference Contact Email" required>
			</div>
			<div class="input-box">
				<label for="Reference Contact Phonel Aid ">Reference Contact Phone</label>
				<input type="text" placeholder="Enter Reference Contact Phone"  name="Reference Contact Phone" required>
			</div>
			<div class="input-box">
				<label for="Relationship to Applicant ">Relationship to Applicant</label>
				<input type="text" placeholder="Relationship to Applicant"  name="Relationship to Applicant" required>
			</div>-->
			
		      <input type="reset" value="Reset">
		      <div class="button-container">
	         <button type="submit" name="submit">Submit</button>
	     </div>
		</div>	          
		</div>	
		
	    		    
	</form>



	</div> 
	
</body>
</html>