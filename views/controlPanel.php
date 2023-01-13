<?php if(!isset($_SESSION['role'])||($_SESSION['role']!='1')){
	include "views/403.php";
} 
$stages = getAllStageGrouped();
$artists = getAllArtist();
$programs = getAllProgram();
$news = getAllNews();
?>

<div class="main" id="controlPanel">

	<h1>CONTROL PANEL</h1><br><br><br>
	<h3 id="dlExcel" class="dl">Download Excel (Program)</h3><br><br>
	<div id="excelResult"></div>
	<!--edit menu-->
		<h2>Edit Menu</h2>
		<div id="menuEdit" class="cpBlock">
			<!--insert menu-->
			<h3 id="menuInsert">Insert Menu Link</h3>
			<div class="editForm" id="menuInsertBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/menu/menuInsert.php" method="POST"  name="formMenuInsert" onsubmit="return proveraMenuInsert()">
					<div>
						<?php
						if(isset($_GET['menuI'])){
							if(($_GET['menuI']=='invalid')){
								echo "<p style='color: red'>Menu insert failed</p>";
							}
							else if(($_GET['menuI']=='success')){
								echo "<p style='color: red'>Menu insert success</p>";
							}
						}
						?>
					</div>
					<div><input type="text" id="nameMenuInsert" name="nameMenuInsert" placeholder="Name"/></div>
					<div><input type="text" id="linkMenuInsert" name="linkMenuInsert" placeholder="Link"/></div>
					<div><input type="text" id="levelMenuInsert" name="levelMenuInsert" placeholder="Level"/></div>
					<div>
						<select id="typeInsertSelect" name="typeInsertSelect">
							<option value='0'>Type options</option>
								<?php 
									$types = types();

									foreach ($types as $row) {
										$title = $row['type'];
										echo "<option value='{$title}'>{$title}</option>";
									}
								?>
						</select>
					</div>
					<div><p style="font-size: 11px;">If the new menu link has a parent category, please select one of the following.</p></div>
					<div>
						<select id="menuParentInsertSelect" name="menuParentInsertSelect">
							<option value='0'>Menu options</option>
								<?php 
									$menu = allMenu();

									foreach ($menu as $row) {
										$name = $row['name'];
										$id = $row['id_menu'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div class="errorsBlock" id="errorsMenuInsert">
								
					</div>
					<div><input type="submit" name="menuInsertSubmit"></div>
				</form>
			</div>
			<!--------------->

			<!--update menu-->
			<h3 id="menuUpdate">Update Menu Link</h3>
			<div class="editForm" id="menuUpdateBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/menu/menuUpdate.php" method="POST"  name="formMenuUpdate" onsubmit="return proveraMenuUpdate()">
					<div>
						<?php
						if(isset($_GET['menuU'])){
							if(($_GET['menuU']=='invalid')){
								echo "<p style='color: red'>Menu update failed</p>";
							}
							else if(($_GET['menuU']=='success')){
								echo "<p style='color: red'>Menu update success</p>";
							}
						}
						?>
					</div>
					<div><p style="font-size: 11px;">Select which menu link you would like to change.</p></div>
					<div>
						<select id="menuUpdateSelect" name="menuUpdateSelect">
							<option value='0'>Menu options</option>
								<?php 
									$menu = allMenu();

									foreach ($menu as $row) {
										$name = $row['name'];
										$id = $row['id_menu'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div id="menuUpdateStructure" class="dispFlexColumn"></div>
				</form>
			</div>
			<!--------------->

			<!--delete menu-->
			<h3 id="menuDelete">Delete Menu Link</h3>
			<div class="editForm" id="menuDeleteBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/menu/menuDelete.php" method="POST"  name="formMenuDelete" onsubmit="return proveraMenuDelete()">
					<div>
						<?php
						if(isset($_GET['menuD'])){
							if(($_GET['menuD']=='invalid')){
								echo "<p style='color: red'>Menu delete failed</p>";
							}
							else if(($_GET['menuD']=='success')){
								echo "<p style='color: red'>Menu delete success</p>";
							}
						}
						?>
					</div>
					<div><p style="font-size: 11px;">Select which menu link you would like to delete.</p></div>
					<div>
						<select id="menuDeleteSelect" name="menuDeleteSelect">
							<option value='0'>Menu options</option>
								<?php 
									$menu = allMenu();

									foreach ($menu as $row) {
										$name = $row['name'];
										$id = $row['id_menu'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>

					<div class="errorsBlock" id="errorsMenuDelete">
								
					</div>
					<div><input type="submit" name="menuDeleteSubmit"></div>
				</form>
			</div>
			<!--------------->
		</div>
	<!------------->


	<!--edit stages-->
		<h2>Edit Stage</h2>
		<div id="stageEdit" class="cpBlock">
			<!--insert stage-->
			<h3 id="stageInsert">Insert Stage</h3>
			<div class="editForm" id="stageInsertBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/stage/stageInsert.php" method="POST"  name="formstageInsert" onsubmit="return proveraStageInsert()" enctype="multipart/form-data">
					<div>
						<?php
						if(isset($_GET['stageI'])){
							if(($_GET['stageI']=='invalid')){
								echo "<p style='color: red'>Stage insert failed</p>";
							}
							else if(($_GET['stageI']=='success')){
								echo "<p style='color: red'>Stage insert success</p>";
							}
						}
						?>
					</div>
					<div><input type="text" id="nameStageInsert" name="nameStageInsert" placeholder="Name"/></div>
					<div><input type="text" id="capacityInsert" name="capacityInsert" placeholder="Capacity"/></div>
					<div><textarea id="descriptionStageInsert" name="descriptionStageInsert" placeholder="Description" ></textarea></div>
					<div><input type="file" id="stagePhotoInsert" name="stagePhotoInsert"/></div>
					<div class="errorsBlock" id="errorsStageInsert">
								
					</div>
					<div><input type="submit" name="stageInsertSubmit"></div>
				</form>
			</div>
			<!--------------->

			<!--update stage-->
			<h3 id="stageUpdate">Update Stage</h3>
			<div class="editForm" id="stageUpdateBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/stage/stageUpdate.php" method="POST"  name="formstageUpdate" onsubmit="return proveraStageUpdate()" enctype="multipart/form-data">
					<br>
					<?php
						if(isset($_GET['stageU'])){
							if(($_GET['stageU']=='invalid')){
								echo "<p style='color: red'>Stage update failed</p>";
							}
							else if(($_GET['stageU']=='success')){
								echo "<p style='color: red'>Stage update success</p>";
							}
						}
						?>
					<div><p style="font-size: 11px;">Choose a stage you would like to update.</p></div>
					<div>
						<select id="stageUpdateSelect" name="stageUpdateSelect">
							<option value='0'>Stages</option>
								<?php 
									foreach ($stages as $row) {
										$name = ucfirst($row['name']);
										$id = $row['id_stage'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div id="stageUpdateStructure" class="dispFlexColumn"></div>
				</form>
			</div>
			<!--------------->

			<!--delete stage-->
			<h3 id="stageDelete">Delete Stage</h3>
			<div class="editForm" id="stageDeleteBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/stage/stageDelete.php" method="POST"  name="formstageDelete" onsubmit="return proveraStageDelete()">
					<br>
					<?php
						if(isset($_GET['stageD'])){
							if(($_GET['stageD']=='invalid')){
								echo "<p style='color: red'>Stage delete failed</p>";
							}
							else if(($_GET['stageD']=='success')){
								echo "<p style='color: red'>Stage delete success</p>";
							}
						}
						?>
					<div><p style="font-size: 11px;">Choose a stage you would like to delete.</p></div>
					<div>
						<select id="stageDeleteSelect" name="stageDeleteSelect">
							<option value='0'>Stages</option>
								<?php 
									foreach ($stages as $row) {
										$name = ucfirst($row['name']);
										$id = $row['id_stage'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div class="errorsBlock" id="errorsStageDelete">
								
					</div>
					<div><input type="submit" name="stageDeleteSubmit"></div>
				</form>
			</div>
			<!--------------->
		</div>
	<!------------->
	

	<!--edit program-->
		<h2>Edit Program</h2>
		<div id="programEdit" class="cpBlock">
			<!--insert program-->
			<h3 id="programInsert">Insert Program</h3>
			<div class="editForm" id="programInsertBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/program/programInsert.php" method="POST"  name="formprogramInsert" onsubmit="return proveraProgramInsert()" enctype="multipart/form-data">
					<div>
						<?php
						if(isset($_GET['programI'])){
							if(($_GET['programI']=='invalid')){
								echo "<p style='color: red'>Program insert failed</p>";
							}
							else if(($_GET['programI']=='success')){
								echo "<p style='color: red'>Program insert success!</p>";
							}
						}
						?>
					</div>
					<div><input type="text" id="nameProgramInsert" name="nameProgramInsert" placeholder="Name"/></div>
					<div>
						<textarea id="descProgramInsert" name="descProgramInsert" placeholder="Description"></textarea>
					</div>
					<div>
						<select id="programStageInsertSelect" name="programStageInsertSelect">
							<option value='0'>Stages</option>
								<?php 
									foreach ($stages as $row) {
										$name = ucfirst($row['name']);
										$id = $row['id_stage'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div>
						<select id="artistProgramInsertSelect" name="artistProgramInsertSelect">
							<option value='0'>Artists</option>
								<?php 
									foreach ($artists as $row) {
										$name = ucfirst($row['name']);
										$id = $row['id_artist'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div><input type="text" id="priceProgramInsert" name="priceProgramInsert" placeholder="Ticket price"></div>
					<div><input type="date" id="dateProgramInsert" name="dateProgramInsert">
					<input type="time" id="timeProgramInsert" name="timeProgramInsert"></div>
					<div><input type="file" id="programPhotoInsert" name="programPhotoInsert"/></div>
					<div class="errorsBlock" id="errorsProgramInsert">
								
					</div>
					<div><input type="submit" name="programInsertSubmit"></div>
				</form>
			</div>
			<!--------------->

			<!--update program-->
			<h3 id="programUpdate">Update Program</h3>
			<div class="editForm" id="programUpdateBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/program/programUpdate.php" method="POST"  name="formProgramUpdate" onsubmit="return proveraProgramUpdate()" enctype="multipart/form-data">
					<div>
						<?php
						if(isset($_GET['programU'])){
							if(($_GET['programU']=='invalid')){
								echo "<p style='color: red'>Program update failed</p>";
							}
							else if(($_GET['programU']=='success')){
								echo "<p style='color: red'>Program update success!</p>";
							}
						}
						?>
					</div>
					<div><p style="font-size: 11px;">Choose a program which you would like to update.</p></div>
					<div>
						<select name="idProgramUpdate" id="idProgramUpdate">
							<option value='0'>Programs</option>
								<?php 
									foreach ($programs as $row) {
										$name = ucfirst($row['program_name']);
										$id = $row['id_program'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div id="programUpdateStructure" class="dispFlexColumn"></div>
					<!---->
				</form>
			</div>
			<!--------------->


			<!--delete program-->
			<h3 id="programDelete">Delete Program</h3>
			<div class="editForm" id="programDeleteBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/program/programDelete.php" method="POST"  name="formProgramDelete" onsubmit="return proveraProgramDelete()">
					<br>
					<?php
						if(isset($_GET['programD'])){
							if(($_GET['programD']=='invalid')){
								echo "<p style='color: red'>Program delete failed</p>";
							}
							else if(($_GET['programD']=='success')){
								echo "<p style='color: red'>Program delete success.</p>";
							}
						}
						?>
						<div><p style="font-size: 11px;">Choose a program you would like to update.</p></div>
					<div>
						<select name="nameProgramDelete" id="nameProgramDelete">
							<option value='0'>Programs</option>
								<?php 
									foreach ($programs as $row) {
										$name = ucfirst($row['program_name']);
										$id = $row['id_program'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div class="errorsBlock" id="errorsProgramDelete">
								
					</div>
					<div><input type="submit" name="programDeleteSubmit"></div>
				</form>
			</div>
			<!--------------->
		</div>
	<!------------->

	<!--edit news-->
		<h2>Edit news</h2>
		<div id="newsEdit" class="cpBlock">
			<!--insert news-->
			<h3 id="newsInsert">Insert news</h3>
			<div class="editForm" id="newsInsertBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/news/newsInsert.php" method="POST"  name="formNewsInsert" onsubmit="return proveraNewsInsert()" enctype="multipart/form-data">
					<div>
						<?php
						if(isset($_GET['newsI'])){
							if(($_GET['newsI']=='invalid')){
								echo "<p style='color: red'>news insert failed</p>";
							}
							else if(($_GET['newsI']=='success')){
								echo "<p style='color: red'>news insert success</p>";
							}
						}
						?>
					</div>
					<div><input type="text" id="titleNewsInsert" name="titleNewsInsert" placeholder="Name"/></div>
					<div><textarea id="textInsertArea" name="textInsertArea" placeholder="Text..."></textarea></div>
					<div><input type="file" id="photoNewsInsert" name="photoNewsInsert"/></div>
					<div class="errorsBlock" id="errorsNewsInsert">
								
					</div>
					<div><input type="submit" name="newsInsertSubmit"></div>
				</form>
			</div>
			<!--------------->

			<!--update news-->
			<h3 id="newsUpdate">Update news</h3>
			<div class="editForm" id="newsUpdateBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/news/newsUpdate.php" method="POST"  name="formNewsUpdate" onsubmit="return proveraNewsUpdate()" enctype="multipart/form-data">
					<br>
					<?php
						if(isset($_GET['newsU'])){
							if(($_GET['newsU']=='invalid')){
								echo "<p style='color: red'>news update failed</p>";
							}
							else if(($_GET['newsU']=='success')){
								echo "<p style='color: red'>news update success</p>";
							}
						}
						?>
					<div><p style="font-size: 11px;">Choose news you would like to update.</p></div>
					<div>
						<select id="newsUpdateSelect" name="newsUpdateSelect">
							<option value='0'>news</option>
								<?php 
									foreach ($news as $row) {
										$name = ucfirst($row['title']);
										$id = $row['id_news'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div id="newsUpdateStructure" class="dispFlexColumn"></div>
				</form>
			</div>
			<!--------------->

			<!--delete news-->
			<h3 id="newsDelete">Delete news</h3>
			<div class="editForm" id="newsDeleteBlock">
				<div class="close">
					<span></span>
					<span></span>
				</div>
				<form action="models/news/newsDelete.php" method="POST"  name="formNewsDelete" onsubmit="return proveraNewsDelete()">
					<br>
					<?php
						if(isset($_GET['newsD'])){
							if(($_GET['newsD']=='invalid')){
								echo "<p style='color: red'>news delete failed</p>";
							}
							else if(($_GET['newsD']=='success')){
								echo "<p style='color: red'>news delete success</p>";
							}
						}
						?>
					<div><p style="font-size: 11px;">Choose news you would like to delete.</p></div>
					<div>
						<select id="newsDeleteSelect" name="newsDeleteSelect">
							<option value='0'>news</option>
								<?php 
									foreach ($news as $row) {
										$name = ucfirst($row['title']);
										$id = $row['id_news'];
										echo "<option value='{$id}'>{$name}</option>";
									}
								?>
						</select>
					</div>
					<div class="errorsBlock" id="errorsNewsDelete">
								
					</div>
					<div><input type="submit" name="newsDeleteSubmit"></div>
				</form>
			</div>
			<!--------------->
		</div>
	<!------------->

</div>