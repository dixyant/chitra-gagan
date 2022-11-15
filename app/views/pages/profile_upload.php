<?php require APPROOT . '/views/includes/header.php'; ?>
<?php require APPROOT . '/views/includes/navbar.php'; ?>
<div class="gallery">
	<div class="form-wrapper">
		<h3>Select Image </h3>
		<div id="formBox">
			<form class="entryform" action="<?php echo URLROOT; ?>/pages/profile_upload_handler" method="POST" enctype="multipart/form-data">
				<!-- <label for="title">Resource Title</label> -->
				<div class="form-options">
					<input id="rlInput" type="file" name="file">
				</div>
				<?php if (!empty($data['upload_error'])) : ?>
					<div class="form-options">
						<span class="form-span"> <?php echo (!empty($data['upload_error'])) ? $data['upload_error'] : ''; ?> </span>
					</div>
				<?php endif; ?>


				<div class="form-options">
					<input type="email" name="email" id="email" value="<?php echo $data['email']; ?>" placeholder="Your Email" required />
				</div>
				<?php if (!empty($data['email_err'])) : ?>
					<div class="form-options">
					  <span class="form-span"> <?php echo (!empty($data['email_err'])) ?  $data['email_err'] : '';  ?> </span>
					</div>
    			<?php endif; ?>
				<div class="form-options uploadbtn">
					<!-- <input class="uploadbtn" type="submit" name="submit" value= 'UPLOAD'>
				 -->
					<input class="uploadbtn" type="submit" name="submit" value='UPLOAD'>
				</div>
			</form>
		</div>
		<h3 style="margin-bottom:30px;margin-top:50px;">Your Profile</h3>
		<div class="box">
			<div class="collection">
				<img class="display-image" src=<?= RPROF_FOLD . $data['image'][0]->profile ?> alt="your profile">
			</div>
		</div>
	</div>
</div>

<?php require APPROOT . '/views/includes/footer.php'; ?>