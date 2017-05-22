	<?php

	require 'db_access.php';
	require 'deleteImg.php';
	

	global $bdd;

	$links = $bdd->query('SELECT * FROM upload');


	?>


	<section class="container">
		<div class="row"> 
			<?php foreach ($links as $link) { ?>
			<div class="card col-xs-4 col-md-4">
				<a href="deleteImg.php?id=<?= $link['id'];?>"><img src=""></a>
				<p class="col-xs-offset-1 col-xs-4 col-md-4" id="id_image"> Id : <?php echo $link['id']; ?></p>
				<?php echo '<img class="card-img vitrine" src="data:'.utf8_encode($link['type']).';base64,'.base64_encode(stripslashes($link['content'])). '"/>';?>
			</div>
			<?php } ?>
