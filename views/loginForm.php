<div class="formBlock main">
	
	<form method="POST" action="models/login.php" id="formLogin" onsubmit="return proveraLogin()">
		<div><h4>Log In</h4></div>
		<?php
			if((isset($_GET['log']))&&($_GET['log']!='success')){
				$username = $_GET['username'];
				echo "<div><input type='text' name='usernameLogin' id='usernameLogin' value='{$username}'/></div>";
			}
			else{
				echo "<div><input type='text' name='usernameLogin' id='usernameLogin' placeholder='Username'/></div>";
			}
		?>
		<div><input type="password" name="passwordLogin" id="passwordLogin" placeholder="Password"/></div>
		<div class='redirectSignInRegister'><p>Don't have an account?</p>&nbsp;<a href="index.php?page=register">Register here.</a></div>
		<div class='errorsBlock' id='loginErrorsBlock'>
			<?php
				if(isset($_GET['log'])){
					$err = $_GET['log'];
					if($err=='invalid'){
						echo "<div class='error'><p>Data not in right format.</p></div>";
					} else if($err=='notexists'){
						echo "<div class='error'><p>Username doesn't exist.</p></div>";
					} else if($err=='nomatch'){
						echo "<div class='error'><p>Username and password don't match.</p></div>";
					}
				}
			?>
		</div>
		<div><input type="submit" name="dugmeLogin" id="dugmeLogin" value="Continue"></div>
	</form>
</div>