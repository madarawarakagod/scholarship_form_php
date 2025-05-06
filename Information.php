 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Applicant Information</title>
	<link rel="stylesheet" type="text/css" href="./Information.css">



</head>
<body>

	

	<div class="Container">
		
		<form action="detail.php" method="post">
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
            <input type="radio" name="gender" id="male" >
            <label for="male">Male</label>
            <input type="radio" name="gender" id="female">
            <label for="female">Female</label>		
		    </div>	   


          <div class="input-box">
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
				<input type="text" placeholder="Enter High School Name"  name="HighSchoolName" required >
			</div>  
			<div class="input-box">
				<label for="name">Extracurricular Activities</label>
				<input type="text" placeholder="Enter Extracurricular Activities"  name="ExtracurricularActivities" required>
			</div>         
			<div class="input-box">
				<label for="name">Degree Program</label>
				<input type="text" placeholder="Enter Degree Program"  name="DegreeProgram" required>
			</div>
			<div class="input-box">
				<label for="name">Graduation Year</label>
				<input type="text" placeholder="Enter Graduation Year"  name="GraduationYear" required>
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
				<input type="text" placeholder="Enter Annual Family Income"  name="AnnualFamilyIncome" required >
			</div>           
			<div class="input-box">
				<label for="No Of dependents in Households">Dependents in Households</label>
				<input type="text" placeholder="Enter no of dependents in Households"  name="NoOfdependents" required>
			</div>
			<div class="input-box">
				<label for="Expected Financial Aid ">Expected Financial Aid </label>
				<input type="text" placeholder="Enter Expected Financial Aid "  name="ExpectedFinancialAid" required>
			</div>
		</div>	          
	
	  




       
		<h2>Reference Information</h2>
		<div class="content">
			<div class="input-box">
				<label for="Name Of Reference" >Name Of Referenceme</label>
				<input type="text" placeholder="Enter Name Of Referencee"  name="NameOfReference" required >
			</div>           
			<div class="input-box">
				<label for="Reference Contact Email">Reference Contact Email</label>
				<input type="text" placeholder=" Enter Reference Contact Email"  name="ReferenceEmail" required>
			</div>
			<div class="input-box">
				<label for="Reference Contact Phonel Aid ">Reference Contact Phone</label>
				<input type="text" placeholder="Enter Reference Contact Phone"  name="ReferencePhone" required>
			</div>
			<div class="input-box">
				<label for="Relationship to Applicant ">Relationship to Applicant</label>
				<input type="text" placeholder="Relationship to Applicant"  name="RelationshipToApplicant" required>
			</div>
			
		      <input type="reset" value="Reset" name="set">
		      <div class="button-container">
	        <button type="submit" name="sub">Submit</button>
	     </div>
		</div>	          
		</div>	
		
	    		    
	</form>



	</div> 
	
</body>
</html>