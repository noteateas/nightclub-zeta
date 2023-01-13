<?php

	$stages = getAllStageGrouped();
	if(!isset($_GET['num'])){
		$program = getCustomProgram('date', 6, 0);
	}
	else{
		$num = $_GET['num'];
		$program = paginate('date', 6, $num);
	}
?>

<div id="program" class="main">
		<?php if(isset($_GET['id'])):
			include "programInfo.php";
		
		else:
		?>

		<div class="sort">
			<select id="sortProgram">
				<option value="0">Sort By</option>
				<option value="newest">Newest</option>
				<option value="oldest">Oldest</option>
				<option value="A-Z">A-Z</option>
				<option value="Z-A">Z-A</option>
			</select>
			<select id="filterProgram">
				<option value="0">Choose a stage</option>
				<?php
				foreach($stages as $row){
					$name = ucfirst($row['name']);
					$id = $row['id_stage'];
					echo "<option value='$id'>$name</option>";
				}
				?>
			</select>
		</div>

		<div class="twoBlockHolder" id="twoBlockHolderProgram">
			<?php $i = 1; ?>
			<?php foreach($program as $row):
				
				$name = $row['program_name'];
				$cover = $row['cover'];
				$date = $row['date'];
				$id = $row['id_program']; 

			?>
			<div class="twoBlockChild programChild">
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

		<div class="pagination">
			<?php
			$pagesInTotal = pagesInTotal(6);

			for($i = 1; $i <= $pagesInTotal; $i++){
				echo "<a href='index.php?page=program&num={$i}'>{$i}</a>";
			}
			?>
		</div>

	<?php endif; ?>

</div>

