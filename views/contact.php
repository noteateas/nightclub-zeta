<div id="contactBlock" class="formBlock main">
				<form method="POST" action="models/contact.php" name="" id="formContact" onsubmit="return proveraContact()">
					<?php
						if(isset($_GET['msg'])){
							$msg = $_GET['msg'];
							if($msg=='success'){
								echo "<br/><p style='color: #fac864'>Successfully sent!</p><br>";
							} else if($msg=='invalid'){
								echo "<br/><p style='color: #fac864'>Invalid format!</p><br>";
							}
						}
					?>
					<div><h4>Contact the administrator</h4></div>
					
					<div><input type="text" name="fullNameContact" id="fullNameContact" placeholder="Full Name"/></div>
					<div><input type="text" name="subjectContact" id="subjectContact" placeholder="Subject" placeholder="Your message..." /></div>
					<div>
						<textarea id="messageContact" name="messageContact" placeholder="Your message..."></textarea>
					</div>
					
					<div id="dugmeProveraContact"><input type="submit" name="dugmeContact" id="dugmeContact" value="Continue"></div>
					<div id="contactError" class="errorsBlock">
						
					</div>
				</form>
</div>