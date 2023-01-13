<?php
	$program = getCustomProgram("date", 3, 0);
	$info = getOneInfo();
?>
<div class="main">
	<div class="mainBlock">
		<div><h3><?php if(isset($_GET['dlword'])&&$_GET['dlword']=='success') echo 'Download successful!' ?></h3></div><br>
		<div><h3><?php if(isset($_GET['log'])&&($_GET['log']=='success')) echo "<div id='formSuccess'><p>Login complete!</p></div>"; ?></h3></div><br>
		<div><h3><?php if(isset($_GET['reg'])&&($_GET['reg']=='success')) echo "<div id='formSuccess'><p>Registration complete!</p></div>"; ?></h3></div><br>
		<div id="video">
			<video autoplay loop muted>
			<source src="assets/video/video.mp4" type="video/mp4">
		</video>
		</div>
		<h1>Welcome to <span><?= $info['name']?></span></h1>
		<hr/>
		<h2>Coming Up</h2>
		<div class="threeBlockHolder">

			<?php foreach($program as $row):

				$name = $row['program_name'];
				$cover = $row['cover'];
				$date = $row['date'];
				$id = $row['id_program_artist']; 
				?>

				<div class="threeBlockChild programChild">
					<a href="index.php?page=program&id=<?= $id ?>">
						<img src="<?= 'assets/img/program/'.$cover?>" alt="<?= $name?>"/>
						<div id="title">
							<h2><?= $name?></h2>
							<p><?= $date?></p>
						</div>
					</a>
				</div>
			<?php endforeach;?>
		</div>
		
		<br>
		<div class="readMore">
			<a href="index.php?page=program">See More</a>
		</div>
		<hr/>
		<div id="about">

			<h2>About</h2>
			<div>
				<p><?= $info['info_description']?></p>
			</div>
			<div>
				<img src="assets/img/<?=$info['cover']?>" alt="<?= $info['name']?>"/>
				<img src="assets/img/<?=$info['map']?>" alt="<?= $info['name']?>"/>
			</div>
		</div>
		<hr/>
	</div>
	
</div>
