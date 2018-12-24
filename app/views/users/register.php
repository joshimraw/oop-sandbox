<?php require_once APPROOT. '/views/inc/header.php'; ?>

	<div class="row">
		<div class="col-md-6 mx-auto">
			<div class="card card-body bg-light mt-5">
				<h2>Create An Account</h2>
				<p>Fill out the form to register</p>
				<form method="post" action="<?php echo URLROOT; ?>/users/register" >
					<div class="form-group">
						<label>Name: <sup>*</sup></label>
						<input type="text" name="name" value="<?php echo $data['name'] ?>" autocomplete='off'
						class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['name_err']; ?></span>
					</div>

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

					<div class="form-group">
						<label>Confirm Password: <sup>*</sup></label>
						<input type="password" name="confm_pass" value="<?php echo $data['confm_pass'] ?>"
						class="form-control <?php echo (!empty($data['confm_pass_err'])) ? 'is-invalid' : '';  ?>">
						<span class="invalid-feedback"><?php echo $data['confm_pass_err']; ?></span>
					</div>

					<div class="row">
						<div class="col">
							<input type="submit" class="btn btn-success btn-block" value="Register">
						</div>
						<div class="col">
							<a class="btn btn-outline btn-block" href="<?php echo URLROOT; ?>/users/login">Have An Account? Login</a>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

<?php require_once APPROOT. '/views/inc/footer.php'; ?>