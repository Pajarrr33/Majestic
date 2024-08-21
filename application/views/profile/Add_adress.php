
<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
	<div class="bg-holder overlay overlay-light" style="background-image:url(<?= base_url() ?>assets/img/gallery/header-bg.png);background-size:cover;">
	</div>
	<div class="container">
		<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-start">
			<div class="col-first">
				<h1>Add adress</h1>
				<nav class="d-flex align-items-center">
					<a href="index.html">Home<span class="bi bi-arrow-right"></span></a>
					<a href="category.html">Profile<span class="bi bi-arrow-right"></span></a>
                    <a href="category.html">Add Adress</a>
				</nav>
			</div>
		</div>
	</div>
</section>
<!-- End Banner Area -->

<style>
    .list{
        width: 100%;
    }
</style>

<section>
    <div class="container">
        <form action="<?= base_url('User/add_user_adress') ?>" method="post">
            <h3 class="mb-3">Add Adress</h3>
            <div class="form-group">
                <div class="d-flex">
                    <label for="exampleInputPassword1" class="d-inline-block mr-1">Adress Name</label>
                    <?= form_error('adress_name', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="text" name="adress_name" class="form-control" id="exampleInputEmail1" placeholder="Insert Your Adress Name" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">Name The adress something you want</small>
            </div>
            <div class="form-group">
                <div class="d-flex">
                    <label for="exampleInputPassword1" class="d-inline-block mr-1">Name</label>
                    <?= form_error('name', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="text" name="name" class="form-control" placeholder="Insert Your Name" id="exampleInputPassword1">
                <small id="emailHelp" class="form-text text-muted">Fill the name of the person who will receive the package</small>
            </div>
            <div class="form-group">
                <div class="d-flex">
                    <label for="exampleInputPassword1" class="d-inline-block mr-1">Email</label>
                    <?= form_error('email', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="email" name="email" class="form-control" placeholder="Insert Your Email" id="exampleInputPassword1">
                <small id="emailHelp" class="form-text text-muted">Email to be contacted regarding orders</small>
            </div>
            <div class="form-group">
                <div class="d-flex">
                    <label for="exampleInputPassword1" class="d-inline-block mr-1">Phone Number</label>
                    <?= form_error('number', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="number" name="number" class="form-control" placeholder="Insert Your Phone Number" id="exampleInputPassword1">
                <small id="emailHelp" class="form-text text-muted">Phone number to be contacted regarding orders</small>
            </div>
            
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group province">
                        <div class="d-flex">
                            <label for="exampleInputPassword1" class="d-inline-block mr-1">Province</label>
                            <?= form_error('input_province', '<p class="text-danger d-inline-block">','<?p>'); ?>
                        </div>
                        <select name="province" id="" class="form-control"> 
                            <option value="">-- Select Province -- </option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="form-group example-select city">
                        <div class="d-flex">
                            <label for="exampleInputPassword1" class="d-inline-block mr-1">Distrik</label>
                            <?= form_error('id_distrik', '<p class="text-danger d-inline-block">','<?p>'); ?>
                        </div>
                        <select class="form-control" name="distrik" >
                            <option value="">-- Select Distrik -- </option>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="form-group mt-0 pt-0">
                <div class="d-flex">
                    <label for="exampleInputPassword1" class="d-inline-block mr-1">Street</label>
                    <?= form_error('input_province', '<p class="text-danger d-inline-block">','<?p>'); ?>
                </div>
                <input type="text" name="street" class="form-control" placeholder="Insert Your Street" id="exampleInputPassword1">
            </div>

            <div class="form_hidden">
                <input type="hidden" name="input_province">
                <input type="hidden" name="input_distrik">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</section>

<script>
        $(document).ready(function(){
            $.ajax({
                url: '<?= base_url("Rajaongkir/province"); ?>',
                    success: function(response)
                    {
                        $("select[name=province]").append(response)
                    },
                    error: function()
                    {

                    }
            });
            $("select[name=province]").on("change" , function(){
                var id_province = $("select[name=province]").find(":selected").val();
                var province = $("select[name=province]").find(":selected").text();
                $("input[name=input_province]").val(province)
                $.ajax({
                    type:'POST',
                    url: '<?= base_url("Rajaongkir/distrik"); ?>',
                    data: { 'id_province' : id_province},
                    success: function(response)
                    {
                        $("select[name=distrik]").append(response)
                    },
                    error: function()
                    {

                    }
                })
            })

            $("select[name=distrik]").on("change" , function(){
                var distrik = $("select[name=distrik]").find(":selected").text();
                $("input[name=input_distrik]").val(distrik);
            })
        })
</script>