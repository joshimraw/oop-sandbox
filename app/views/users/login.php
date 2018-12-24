<?php require_once APPROOT. '/views/inc/header.php'; ?>

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body bg-light mt-5">
				<?php flash('register_success'); ?>
				<h2>Login Here</h2>
				<form method="post" action="<?php echo URLROOT; ?>/users/login" >
				
					<div class="form-group">
						<label>Email: <sup>*</sup></label>
						<input type="email" name="email" value="<?php echo $data['email'] ?>" autocomplete='off'
						class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
					</div>

					<div class="form-group">
						<label>Password: <sup>*</sup></label>
						<input type="password" name="password" value="<?php echo $data['password'] ?>"
						class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
					</div>

					
					<div class="row">
						<div class="col">
							<input type="submit" class="btn btn-success btn-block" value="Login">
						</div>
						<div class="col">
							<a class="btn btn-outline btn-block" href="<?php echo URLROOT; ?>/users/register">No Account? Register</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php require_once APPROOT. '/views/inc/footer.php'; ?>