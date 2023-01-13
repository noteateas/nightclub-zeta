<?php include "models/menu/functions.php"; ?>

<div id="menu">
	<div id="logo">
		<a href="index.php"><img src="assets/img/logo.png" alt="logo"/></a>
	</div>
	<ul id="header">
	<?php
	$menu_primary_header = primaryMenuHeader();
	function children($kids){
		if(count($kids) > 0){
			echo "<ul>";
		}
		foreach($kids as $row){
			$link = $row['link'];
			if(!isset($_SESSION['username'])){
				if(($row['name']=='logout')||($row['name']=='orders')) continue;
			}
			echo "<li><a href={$link}>".$row['name']."</a>";
			$newKids = recursiveMenu($row['id_menu']);
			if(count($newKids)>0){
				children($newKids);
			}
			echo "</li>";
		}
		if(count($kids) > 0){
			echo "</ul>";
		}
	}
	foreach($menu_primary_header as $row){

		$name = $row['name'];
		$link = $row['link'];
		$type = $row['type'];
		$id = $row['id_menu'];
		$children = recursiveMenu($id);

		if((isset($_SESSION['username'])&&(($name=='login')||($name=='register')))||(!isset($_SESSION['username'])&&($name=='profile'))){
			continue;
			}
		else{
			if((isset($_SESSION['role'])&&($_SESSION['role']!='1')) || (!isset($_SESSION['role']))){
				//echo "<h1>uslo</h1>";
				if($row['name']=='control panel') continue;
			}
			echo "<li";
			if(count($children)>0){
				echo " class='recursiveMenu'>";
				echo "<a href=$link>{$name} <i class='fas fa-chevron-right'></i></a>";
				children($children);
			}
			else{
				echo "><a href=$link>{$name}</a>";
			}
		}
		echo "</li>";
	}
	?>
	</ul>

	<ul id="footer">
	<?php
	$menu_primary_footer = primaryMenuFooter();
	foreach($menu_primary_footer as $row){

		$name = $row['name'];
		$link = $row['link'];
		$type = $row['type'];
		$id = $row['id_menu'];
		$children = recursiveMenu($id);

		if((isset($_SESSION['username'])&&(($name=='login')||($name=='register')))||(!isset($_SESSION['username'])&&($name=='profile'))){
			continue;
			}
		else{
			if((isset($_SESSION['role'])&&($_SESSION['role']!='1')) || (!isset($_SESSION['role']))){
				//echo "<h1>uslo</h1>";
				if($row['name']=='control panel') continue;
			}
			echo "<li";
			if(count($children)>0){
				echo " class='recursiveMenu'>";
				echo "<a href=$link>{$name} <i class='fas fa-chevron-right'></i></a>";
				children($children);
			}
			else{
				echo "><a href=$link>{$name}</a>";
			}
		}
		echo "</li>";
	} ?>
	</ul>
</div>

<?php
	if(isset($_GET['logout'])){
		unset($_SESSION['username']);
		unset($_SESSION['role']);
		session_destroy();
		header('Refresh:0; url=index.php');
	}
?>