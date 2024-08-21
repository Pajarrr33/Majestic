<?php foreach($Product as $p) : ?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <form action="<?= base_url('admin/Product/update_data/') . $p->id_product ?>" method="post" enctype="multipart/form-data">
                            <h4 class="mt-5">UPDATE DATA PRODUCT</h4>
                            <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Upload Your New Product Image Here</label> <br>
                                    <img style="object-fit: contain; margin: left 0;" width="100px" height="75px" src="<?= base_url('upload/Product/') . $p->img ?>" alt="Image Crud">
                                    <input type="hidden" name="old_img" value="<?= $p->img ?>">
                                    <input type="file" name="img" class="form-control mt-3"  aria-describedby="emailHelp">
                                    <div class="text-danger"><?php if(isset($error)) {echo $error;} ?></div> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" name="name" class="form-control" value="<?= $p->name ?>"  aria-describedby="emailHelp" placeholder="Insert Product Name here">
                                    <?= form_error('name', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" name="price" class="form-control" value="<?= $p->price ?>"  aria-describedby="emailHelp" placeholder="Insert Price here">
                                    <?= form_error('price', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Promo (Optional)</label>
                                    <input type="text" name="promo" class="form-control" value="<?= $p->promo ?>"  aria-describedby="emailHelp" placeholder="Insert Promo Price here">
                                    <?= form_error('promo', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Filter</label>
                                    <?php if($p->filter == 'Men') : ?>
                                    <select name="filter" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Men">Men</option>
                                        <option value="Women">Women</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->filter == 'Women') : ?>
                                    <select name="filter" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Women">Women</option>
                                        <option value="Men">Men</option>
                                    </select>
                                    <?php endif ; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <?php if($p->category == 'T Shirt') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->category == 'Shirt') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Shirt">Shirt</option>
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->category == 'Shoes') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Shoes">Shoes</option>
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->category == 'Watch') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Watch">Watch</option>
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->category == 'Sunglasses') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                    <?php endif ; ?>
                                    <?php if($p->category == 'Bagpacks') : ?>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="Bagpacks">Bagpacks</option>
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                    </select>
                                    <?php endif ; ?>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stock</label>
                                    <input type="number" name="stock" class="form-control" value="<?= $p->stock ?>"  aria-describedby="emailHelp" placeholder="Insert Stock here">
                                    <?= form_error('stock', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weight</label>
                                    <input type="number" name="weight" class="form-control" value="<?= $p->weight ?>"  aria-describedby="emailHelp" placeholder="Insert Weight (Grams) here">
                                    <?= form_error('weight', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Description</label>
                                    <textarea  id="short_desc" name="short_desc" class="form-control"  aria-describedby="emailHelp"><?= $p->short_desc ?></textarea>
                                    <?= form_error('short_desc', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Description</label>
                                    <textarea  id="full_desc" name="full_desc" class="form-control"  aria-describedby="emailHelp"><?= $p->full_desc ?></textarea>
                                    <?= form_error('full_desc', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="modal-footer mb-5">
                                    <a href="<?= base_url('admin/Product') ?>" class="btn btn-secondary">Return to previous page</a>
                                    <button type="sumbit" class="btn btn-primary">Save changes</button>
                                </div>
                        </form>
                    </div>
                </main>
<?php endforeach ; ?>

                <script>
                    CKEDITOR.replace('full_desc')
                </script>