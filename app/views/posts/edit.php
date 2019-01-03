<?php require_once APPROOT. '/views/inc/header.php'; ?>

			<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

			<div class="card card-body bg-light mt-5">
				<h2>Edit Post</h2>

				<form method="post" action="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['id']; ?>" >
					<div class="form-group">
						<label>Title <sup>*</sup></label>
						<input type="text" name="title" value="<?php echo $data['title']; ?>" 
						class="form-control <?php echo (!empty($data['title_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['title_err']; ?></span>
					</div>

					<div class="form-group">
						<label>Body Content <sup>*</sup></label>
						<textarea name="body"
						class="form-control <?php echo (!empty($data['body_err'])) ? 'is-invalid' : '';  ?>"><?php echo $data['body']; ?></textarea>

						<span class="invalid-feedback"><?php echo $data['body_err']; ?></span>
					</div>
					<input type="submit" class="btn btn-success" value="Update Post">
				</form>
			</div>


<?php require_once APPROOT. '/views/inc/footer.php'; ?>