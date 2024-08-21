

<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
	</div>
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Update Profile</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
					<a href="category.html">Profile<span class="bi bi-arrow-right"></span></a>
                    <a href="category.html">Update</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

    <section class="login_box_area section_gap">
        <div class="container">
            <form action="<?= base_url('User/update_data/') . $User['id'] ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Profile Image</label>
                    <input type="hidden" name="old_img" value="<?= $User['image'] ?>">
                    <input type="file" name="img" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">The image you upload here will replace the existing image profile</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" value="<?= $User['nama'] ?>" aria-describedby="emailHelp" placeholder="Enter Username">
                    <?= form_error('username', '<div class="text-small text-danger">','<?div>'); ?> 
                    <small id="emailHelp" class="form-text text-muted">The username above is the username that previously existed, you can replace it or keep using the same username</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?= $User['email'] ?>"  aria-describedby="emailHelp" placeholder="Enter email">
                    <?= form_error('email', '<div class="text-small text-danger">','<?div>'); ?> 
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div> 
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

