<?php

	$id = $_GET['id'];
	$one = getOneProgram($id);
	
	$date = $one['date'];
	$programName= $one['program_name'];
	$artistName = $one['name'];
	$desc = $one['program_description'];
	$programCover = $one['cover'];
	$artistPhoto = $one['photo'];
	$priceId = $one['id_price'];
	$price = $one['price'];
	$stageId = $one['stage_id'];
	$stageCapacity = getOneStage($stageId)['capacity'];
	$programsOrdered = count(getCountProgramOrders($id));
?>

<div id="infoProgram">
	<div id="title">
		<h1><?= $programName ?></h1>
		<p><?= formatDate($date)?></p>
	</div>
	<hr/>
	<div id="artistProgram" class="childInfo">
		<h2>Playing For You<br> <span><?= $artistName ?></span></h2>
		<div id="artistPhoto">
			<img src="<?= 'assets/img/artist/'.$artistPhoto ?>" alt="<?= $artistName ?>"/>
		</div>
	</div>
	<hr/>
	<div id="programBlock" class="childInfo">
		<div>
			<img src="<?= 'assets/img/program/'.$programCover ?>" alt="<?= $programName ?>"/>
		</div>
		<p><?= $desc ?></p>
	</div>
	
	<?php if(!isset($_SESSION['username'])): ?>
		<div id="loginHere"><p>Log in to order a ticket <a href="index.php?page=login">here</a></p></div>

	<?php elseif($stageCapacity < $programsOrdered): ?>
		<div><p>Sorry, all the tickets have been bought.</p></div>
	
	<?php else: ?>
		<h3 id="orderTicket">Order Ticket</h3>
		<div class="editForm" id="orderTicketBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="<?= "models/program/orderTicket.php" ?>" method="POST" onsubmit=" return proveraOrderTicket()">

					<div><p id="ticketPrice">Ticket price: <?= $price ?>$</p id="ticketPrice"></div>
					<div><select id="orderTicketSelect" name="orderTicketSelect">
						<option value="0">Number of tickets</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select></div>
					<input type="hidden" name="urlAddress" value="<?=$_SERVER['REQUEST_URI'] ?>" />
					<input type="hidden" name="programId" value="<?= $id ?>" />
					<input type="hidden" name="programName" value="<?= $programName ?>" />
					<div class="errorsBlock" id="errorsOrderTicket"></div>
					<div><input type="submit" name="orderTicketSubmit" id="orderTicketSubmit" value="Order Ticket" /></div>
				</form>
		</div>	
	<?php endif; ?>
	
</div>
