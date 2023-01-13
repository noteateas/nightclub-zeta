<?php
	$stages = getAllStageGrouped();

?>
<div class="main" id="stages">
	<?php if(isset($_GET['id'])):
			include "stagesInfo.php";
		
		else:
			?>
		<div id="bgStage"></div>
		<div id="mainTitle">
			<h1>STAGES</h1>
			<hr/>
		</div>
		
		<?php foreach($stages as $row):
			$id = $row['id_stage'];
			$name = $row['name'];
			$photo = $row['photo'];
		?>
			<div class="stageChild">
				<img src="assets/img/stage/<?= $photo?>" alt="<?= $name ?>"/>
				
				
				<a id="darkOver" href=<?= "index.php?page=stages&id=".$id ?>>
					<h2><?= $name?></h2>	
				</a>
			</div>
			
		<?php endforeach;?>
	<?php endif; ?>
</div>


