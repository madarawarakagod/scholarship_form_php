<?php

    require('./connection.php');

    if(isset($_POST['sub'])){
    $Fullname=$_POST['Fullname'];
   $Contactphone=$_POST['Contactphone'];
   $ContactAddress=$_POST['ContactAddress'];
   $ContactEmail=$_POST['ContactEmail'];
   $country=$_POST['country'];
   $gender=$_POST['gender'];
   $dob=$_POST['dob'];
   $Status=$_POST['Status'];
   $HighSchoolName=$_POST['HighSchoolName'];
   $ExtracurricularActivities=$_POST['ExtracurricularActivities'];
   $DegreeProgram=$_POST['DegreeProgram'];
   $GraduationYear=$_POST['GraduationYear'];
   $Award=$_POST['Award'];
   $AnnualFamilyIncome=$_POST['AnnualFamilyIncome'];
   $NoOfdependents=$_POST['NoOfdependents'];
   $ExpectedFinancialAid=$_POST['ExpectedFinancialAid'];
   $NameOfReference=$_POST['NameOfReference'];
   $ReferenceEmail=$_POST['ReferenceEmail'];
   $ReferencePhone=$_POST['ReferencePhone'];
   $RelationshipToApplicant=$_POST['RelationshipToApplicant'];
   
if(!empty($_POST['Fullname'])&& !empty($_POST['Contactphone'])&& !empty($_POST['ContactAddress'])&& !empty($_POST['ContactEmail'])&& !empty($_POST['country'])&& !empty($_POST['gender'])&& !empty($_POST['dob'])&& !empty($_POST['Status'])&& !empty($_POST['HighSchoolName'])&& !empty($_POST['ExtracurricularActivities'])&& !empty($_POST['DegreeProgram'])&& !empty($_POST['GraduationYear'])&& !empty($_POST['Award'])&& !empty($_POST['AnnualFamilyIncome'])&& !empty($_POST['NoOfdependents'])&& !empty($_POST['ExpectedFinancialAid'])&& !empty($_POST['NameOfReference'])&& !empty($_POST['ReferenceEmail'])&& !empty($_POST['ReferencePhone'])&& !empty($_POST['RelationshipToApplicant']))

{

$p=crud::conect()->prepare('INSERT INTO  detail(FullName,Contact_Phone,Contact_Address,Contact_Email,Country,Gender,Dob,Marital_Status,High_Scl_name,Extra_Activities,Degree_Program,Graduation_Year,Award_Of_Class,Anu_Family_Income,dependent_in_hosuehold,Expected_Financial_Aid,Name_of_Referenceme,Ref_Email,Ref_Phone,Relationship_to_Applicant)VALUES(:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:o,:p,:q,:r,:s,:t)');
    $p->bindValue(':a',$Fullname);
    $p->bindValue(':b',$Contactphone);
    $p->bindValue(':c',$ContactAddress);
    $p->bindValue(':d',$ContactEmail);
    $p->bindValue(':e',$country);
         $p->bindValue(':f',$gender);
         $p->bindValue(':g',$dob);
         $p->bindValue(':h',$Status);   
         $p->bindValue(':i',$HighSchoolName);
         $p->bindValue(':j',$ExtracurricularActivities);
               $p->bindValue(':k',$DegreeProgram);
               $p->bindValue(':l',$GraduationYear);
               $p->bindValue(':m',$Award);
               $p->bindValue(':n',$AnnualFamilyIncome);
               $p->bindValue(':o',$NoOfdependents);
                     $p->bindValue(':p',$ExpectedFinancialAid);
                     $p->bindValue(':q',$NameOfReference);
                     $p->bindValue(':r',$ReferenceEmail);
                     $p->bindValue(':s',$ReferencePhone);
                     $p->bindValue(':t',$RelationshipToApplicant);
                   $p->execute();
                    echo "<script type='text/javascript'> alert('Successfully Register')</script>";
                   
                    
 }else{
        echo "<script type='text/javascript'> alert('Please fill in all fields')</script>";
 
 }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./detail.css">
	<link rel="stylesheet" type="text/css" href="print.css" media="print">
	<title>Document</title>
	<style type="text/css">
		
	</style>
		
</head>
<body>
         <div class="header">
        	<form action="" method="post">
         		<div class="first">
    	<img src="new.png"  alt="logo" width="115px" height="100px" align="left"><h1>Institute of Technology Mark</h1><h2>Bachelor's Degree Scholarship</h2>
    	</div>
         </div>
         <div class="container">
         <h3 id="topic">YOUR INFORMATION</h3>
            <div class="content">
            	<div class="input-box">
				<label for="name" >Your Full Name</label>
				<input type="text" name="Fullname" value="<?php echo isset($_POST['Fullname']) ? $_POST['Fullname'] : ''; ?>"  >
			</div>           
			<div class="input-box">
				<label for="phone">Your Contact phone</label>
				<input type="text"  name="Contactphone" value="<?php echo isset($_POST['Contactphone']) ? $_POST['Contactphone'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Addres">Your Contact Address</label>
				<input type="text" name="ContactAddress" value="<?php echo isset($_POST['ContactAddress']) ? $_POST['ContactAddress'] : ''; ?>"  >
			</div>			
			<div class="input-box">
				<label for="Email">Your Contact Email</label>
				<input type="text" name="ContactEmail" value="<?php echo isset($_POST['ContactEmail']) ? $_POST['ContactEmail'] : ''; ?>"  >
			</div>
			<div class="input-box">
                <label for="dob">Your Date of Birth </label>
				<input type="text" name="country" value="<?php echo isset($_POST['country']) ? $_POST['country'] : ''; ?>"  >
			</div>
			<div class="input-box">
                <label for="gender">Gender </label>
				<input type="text" name="gender" value="<?php echo isset($_POST['gender']) ? $_POST['gender'] : ''; ?>"  >
			</div>
			<div class="input-box">
                <label for="status">Date of Birth</label>
				<input type="text"  name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>"  >
			</div>
			<div class="input-box">
                <label for="citizen">Marital Status</label>
				<input type="text"  name="Status" value="<?php echo isset($_POST['Status']) ? $_POST['Status'] : ''; ?>"  >
			</div>
	
			<div class="input-box">
				<label for="High School Name" >High School Name</label>
				<input type="text" name="HighSchoolName" value="<?php echo isset($_POST['HighSchoolName']) ? $_POST['HighSchoolName'] : ''; ?>"  >
			</div>  
			<div class="input-box">
				<label for="Extracurricular Activities">Extracurricular Activities</label>
				<input type="text"  name="ExtracurricularActivities" value="<?php echo isset($_POST['ExtracurricularActivities']) ? $_POST['ExtracurricularActivities'] : ''; ?>"  >
			</div>         
			<div class="input-box">
				<label for="Degree Program">Degree Program</label>
				<input type="text"  name="DegreeProgram" value="<?php echo isset($_POST['DegreeProgram']) ? $_POST['DegreeProgram'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Graduation Year">Graduation Year</label>
				<input type="text" name="GraduationYear" value="<?php echo isset($_POST['GraduationYear']) ? $_POST['GraduationYear'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Award of class">Award of class</label>
				<input type="text" name="Award" value="<?php echo isset($_POST['Award']) ? $_POST['Award'] : ''; ?>"  >
			</div>
			
			<div class="input-box">
				<label for="Annual Family Income" >Annual Family Income</label>
				<input type="text"   name="AnnualFamilyIncome"  value="<?php echo isset($_POST['AnnualFamilyIncome']) ? $_POST['AnnualFamilyIncome'] : ''; ?>"  >
			</div>           
			<div class="input-box">
				<label for="No Of dependents in Households">Dependents in Households</label>
				<input type="text"  name="NoOfdependents" value="<?php echo isset($_POST['NoOfdependents']) ? $_POST['NoOfdependents'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Expected Financial Aid ">Expected Financial Aid </label>
				<input type="text"   name="ExpectedFinancialAid" value="<?php echo isset($_POST['ExpectedFinancialAid']) ? $_POST['ExpectedFinancialAid'] : ''; ?>"  >
			</div>
		
			<div class="input-box">
				<label for="Name Of Reference" >Name Of Referenceme</label>
				<input type="text"  name="NameOfReference" value="<?php echo isset($_POST['NameOfReference']) ? $_POST['NameOfReference'] : ''; ?>"  >
			</div>           
			<div class="input-box">
				<label for="Reference Contact Email">Reference Contact Email</label>
				<input type="text"  name="ReferenceEmail" value="<?php echo isset($_POST['ReferenceEmail']) ? $_POST['ReferenceEmail'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Reference Contact Phonel Aid ">Reference Contact Phone</label>
				<input type="text"   name="ReferencePhone" value="<?php echo isset($_POST['ReferencePhone']) ? $_POST['ReferencePhone'] : ''; ?>"  >
			</div>
			<div class="input-box">
				<label for="Relationship to Applicant ">Relationship to Applicant</label>
				<input type="text"  name="RelationshipToApplicant" value="<?php echo isset($_POST['RelationshipToApplicant']) ? $_POST['RelationshipToApplicant'] : ''; ?>"  >
			</div>			
		<!--	<button type="submit" name="sub">Submit</button>-->
		<button onclick="window.print();" class="btn btn-primary" id="but">Print</button>
	<a href="homenew2.php"><input type="button" value="Exit" id="but" ></a>


      </div>

 

</body>
</html>