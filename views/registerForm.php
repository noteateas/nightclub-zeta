<div class="formBlock main">
	<?php if(isset($_GET['reg'])){
		if($_GET['reg']=='success'){
			echo "<div id='formSuccess'><p>Registration complete!</p></div>";
		}
	} ?>
	<form method='POST' action="models/register.php"  id='formRegister' onsubmit='return proveraRegister()'>
		
		<div><h4>Create An Account</h4></div>
		<?php
		if((isset($_GET['reg']))&&($_GET['reg']!='success')){
			$firstName = $_GET['firstName'];
			$lastName = $_GET['lastName'];
			$username = $_GET['username'];
			$email = $_GET['email'];
			echo "<div><input type='text' name='firstName' id='firstName' placeholder='First Name' value='$firstName'/></div>
			<div><input type='text' name='lastName' id='lastName' placeholder='Last Name' value='$lastName'/></div>
			<div><input type='text' name='usernameRegister' id='usernameRegister' value='$username'/></div>
			<div><input type='email' name='emailRegister' id='emailRegister' value='$email'/></div>";
		}	
		else{
			echo "<div><input type='text' name='firstName' id='firstName' placeholder='First Name'/></div>
			<div><input type='text' name='lastName' id='lastName' placeholder='Last Name'/></div>
			<div><input type='text' name='usernameRegister' id='usernameRegister' placeholder='Username'/></div>
			<div><input type='text' name='emailRegister' id='emailRegister' placeholder='Email'/></div>";
		}
		?>			

		<div><input type='password' name='passwordRegister' id='passwordRegister' placeholder='Password'/></div>
		<div><input type='password' name='passwordConfirm' id='passwordConfirm' placeholder='Confirm Password'/></div>
		<div class='redirectSignInRegister'><p>Already have an account?</p>&nbsp;<a href='index.php?page=login'>Log in here.</a></div>
		<div class='errorsBlock' id='registerErrorsBlock'>
			<?php
			if(isset($_GET['reg'])){
				if($_GET['reg']=='error'){
					echo '<div class="error"><p>Registration failed.</p></div>';
				}
				if($_GET['reg']=='username'){
					echo '<div class="error"><p>Username already exists.</p></div>';
				}
				else if($_GET['reg']=='email'){
					echo '<div class="error"><p>Email already exists.</p></div>';
				}
			} 
		?>
		</div>
		<div><input type='submit' name='dugmeRegister' id='dugmeRegister' value='Continue'></div>
	</form>
</div>
