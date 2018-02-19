<h2>Main page</h2>

<br>


<?php foreach ($news as $value): ?>
	<h3><?php echo $value['title']; ?></h3>
	<p><?php echo $value['description']; ?></p>
	<hr>
<?php endforeach; ?>