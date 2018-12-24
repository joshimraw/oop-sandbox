<?php require_once APPROOT. '/views/inc/header.php'; ?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<div class="display-4">
			<?php echo $data['title']; ?>
		</div>
		<p class="lead"><?php echo $data['description']; ?></p>
	</div>
</div>

<?php require_once APPROOT. '/views/inc/footer.php'; ?>