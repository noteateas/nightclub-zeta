<?php
	$news = getCustomNews("news_date DESC", 3, 0);
?>
<div id="news" class="main">
	
		<h2>News</h2>
		<div class="threeBlockHolder">

			<?php foreach($news as $row):
				$title = $row['title'];
				$text = $row['text'];
				$photo = $row['photo'];
				$date = $row['news_date'];
				?>

				<div class="threeBlockChild programChild">
					<a href="#">
						<img src="<?= 'assets/img/news/'.$photo?>" alt="<?= $title?>"/>
						<div id="title">
							<h3><?= $title?></h3>
							<p><?= $text ?></p>
						</div>
					</a>
				</div>
			<?php endforeach;?>

		</div>
		<h2>Social</h2>
		<div id="social">
			<ul>
				<li><a href="facebook.com">Facebook</a></li>
				<li><a href="instagram.com">Instagram</a></li>
				<li><a href="twitter.com">Twitter</a></li>
			</ul>
			<div><p>Created by Teodora Nedeljkovic, 2020 &copy;</p></div>	
		</div>
</div>
