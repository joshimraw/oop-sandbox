<?php require_once APPROOT. '/views/inc/header.php'; ?>

			<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

			<div class="card card-body bg-light mt-5">
				<h2>Add New Post</h2>

				<form method="post" action="<?php echo URLROOT; ?>/posts/add" >
					<div class="form-group">
						<label>Title <sup>*</sup></label>
						<input type="text" name="title" value="<?php echo $data['title']; ?>" 
						class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
					</div>

					<div class="form-group">
						<label>Body Content <sup>*</sup></label>
						<textarea name="body" value="<?php echo $data['body']; ?>"
						class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '';  ?>"></textarea>

						<span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
					</div>
					<input type="submit" class="btn btn-success" value="Add Post">
				</form>
			</div>


<?php require_once APPROOT. '/views/inc/footer.php'; ?>