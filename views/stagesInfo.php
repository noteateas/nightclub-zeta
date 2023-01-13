<?php

	$id = $_GET['id'];
	$stage = getOneStageWithPhotos($id);
	
	$name = $stage[0]['name'];
	$desc = $stage[0]['stage_description'];
	$capacity = $stage[0]['capacity'];
	//$photo = $stage['photo'];
	//var_dump($stage)
?>

<div id="stageInfo">
	<div id="title">
		<h1><?= strtoupper($name) ?></h1>
	</div>
	<div class="coverStagePhoto">
		<img src="<?= "assets/img/stage/".$stage[0]['photo'] ?>" alt="<?=$name?>">
	</div>
	<div id="desc">
		<p><?php echo $desc ?></p>
		<p>Capacity: <?php echo $capacity?> people</p>
	</div>
	<div class="photosStage">
		<?php foreach($stage as $key=>$value):
			if($key!=0):
				$photo = $value['photo'];
			?>

			<img data-src="<?= $photo?>" src="<?= "assets/img/stage/".$photo ?>" alt="<?=$name?>">
			
		<?php endif; ?>
	<?php endforeach;?>
	<div id="magnifiedPhoto">
		
	</div>
	</div>
</div>


