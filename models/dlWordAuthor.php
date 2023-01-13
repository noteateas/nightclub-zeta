<?php 
	//include "../config/connection.php";
   
	/*$path = $path = "D:\\zeta_author.docx";
	
	$wordApp = new COM("Word.application") or die('fail');
	$wordApp->Visible = true;
	$wordApp->Documents->Add();

		$wordApp->Selection->TypeText("Name: Teodora Nedeljkovic\n");
		$wordApp->Selection->TypeText("Index: 5/18\n");
		$wordApp->Selection->TypeText("College: ICT College of Vocational Studies\n");
		$wordApp->Selection->TypeText(" Bio: I was first introduced to web design at my college and since the start have been trying my best to become an amazing Front End Developer.\n");

	$wordApp->Documents[1]->SaveAs("$path");
	$wordApp->Quit();
	$wordApp = null;*/


header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=autor.doc");
echo "<html>";
echo "<body>";
echo "<i>Author</i>";
echo "<p>My name's Teodora Nedeljkovic. In 2018 I entered ICT College of Vocational Studies.<br> I was first introduced to web design here and since the start have been trying my best<br> to become an amazing Front End Developer.<br>Check out my portfolio here.</p>";
echo "<p>College: ICT College of Vocational Studies</p>";
echo "<p>Year of studying: second</p>";
echo "</body>";
echo "</html>";
