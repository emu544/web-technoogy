<!DOCTYPE html>
<html lang= "en">
	<body>
		
		<form action="registration.php" method= "post">
			<fieldset>
			<legend>General</legend>
			<label for = "xname">First Name</label>
			<input id= "xname" type= "text" name ="firstname" required>
			<br><br>
			<label for = "xname">Last Name</label>
			<input id= "xname" type= "text" name ="lastname" required>
			

			<br><br>

		
			<p>Gender</p>
			<input type="radio" name="gender" value="male" required>Male
			 <label for="Male">Male</label>
			<input type="radio" name="gender" value="female"required>Female
			 <label for="Female">Female</label>
			</fieldset>

			 

			 <fieldset>
			<legend>Contact</legend>		 
			<label for = "xemail">Email</label>
			<input id= "xemail" type= "email" name ="email" required>
			<br><br>
			 <label for = "xnumber">Mobile No</label>
			<input id= "xnumber" type= "number" name ="number" required>
			</fieldset>
			



			
				<fieldset>
					<legend>Address</legend>
					<label for = "xadd">Street/House/Road</label>
					<input id= "xadd" type= "text" name ="add" required>
					<br><br>
					<label for = "xcountry">Country</label>
					<select name="country" id ="">
					 	<option value= "bangladesh">Bangladesh</option>
					 	<option value= "india">India</option>
					 	<option value= "nepal">Nepal</option>
					 	<option value= "china">China</option>
					</select>
				</fieldset>

				 	<br>

				 	<input type="submit" value="Register">
		</form>
		<?php
		 echo $_POST['firstname'];
		 echo $_POST['lastname'];
		 echo $_POST['gender'];
		 echo $_POST['email'];
		 echo $_POST['number'];
		 echo $_POST['add'];
		 echo $_POST['country'];
		?>


	</body>
</html>
