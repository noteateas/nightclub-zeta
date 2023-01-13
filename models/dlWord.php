<?php 
//header("Location: ../index.php?dlword=success");

	include "../config/connection.php";
	include "orders/functions.php";
	include "user/functions.php";
	include "program/functions.php";

	$username = $_SESSION['username'];
	$userId = getOneUser($username)['id_user'];

	$orders = getUserOrders($userId);

	$path = $path = "D:\\zeta_orders.docx";
	
	/*$wordApp = new COM("Word.application") or die('fail');
	$wordApp->Visible = true;
	$wordApp->Documents->Add();

	foreach($orders as $row){
		$programId = $row['id_program'];
		$programName = getOneProgram($programId)['program_name'];
		$price = getOneProgram($programId)['price'];
		$ticketsQuantity = $row["ticketsQuantity"];
		$date = $row["orders_date"];

		$wordApp->Selection->TypeText("Program Name: $programName\n");
		$wordApp->Selection->TypeText("Price: $price $\n");
		$wordApp->Selection->TypeText("Tickets Quantity: $ticketsQuantity\n");
		$wordApp->Selection->TypeText("Date Ordered: $date\n");
		$wordApp->Selection->TypeText("\n");
	}
	$wordApp->Selection->TypeText("Ordered by: $username\n");

	$wordApp->Documents[1]->SaveAs("$path");
	$wordApp->Quit();
	$wordApp = null;*/
    //header("Content-type: application/vnd.ms-word");
    //header("Content-Disposition: attachment;Filename=orders.doc");
    echo "<html>";
    echo "<body>";
    echo "<i>Orders</i>";
    foreach($orders as $row){
    	var_dump($row);

        $programId = $row['id_program'];
		$programName = getOneProgram($programId)['program_name'];
		$price = getOneProgram($programId)['price'];
		$ticketsQuantity = $row["ticketsQuantity"];
		$date = $row["orders_date"];

        echo "<p>Program Name: $programName</p>";
        echo "<p>Price: $price</p>";
        echo "<p>Tickets Quantity: $ticketsQuantity</p>";
        echo "<p>Date Ordered: $date</p>";
        echo "<br>";
    }
    echo "</body>";
    echo "</html>";

	