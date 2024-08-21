<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <form action="<?= base_url('admin/Product/tambah_data') ?>" method="post" enctype="multipart/form-data">
                            <h4 class="mt-5">CREATE DATA PRODUCT</h4>
                                <div class="form-group mt-3">
                                    <label for="exampleInputEmail1">Upload Your Product Image Here</label>
                                    <input type="file" name="img" class="form-control"  aria-describedby="emailHelp">
                                    <div class="text-danger"><?php if(isset($error)) {echo $error;} ?></div> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp" placeholder="Insert Product Name here">
                                    <?= form_error('name', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="number" name="price" class="form-control"  aria-describedby="emailHelp" placeholder="Insert Price here">
                                    <?= form_error('price', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Promo (Optional)</label>
                                    <input type="text" name="promo" class="form-control"  aria-describedby="emailHelp" placeholder="Insert Promo Price here">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Filter</label>
                                    <select name="filter" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="For Men">Men</option>
                                        <option value="For Women">Women</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category</label>
                                    <select name="category" id="formGroupExampleInput" class="form-control form_input">
                                        <option value="T Shirt">T Shirt</option>
                                        <option value="Shirt">Shirt</option>
                                        <option value="Shoes">Shoes</option>
                                        <option value="Watch">Watch</option>
                                        <option value="Sunglasses">Sunglasses</option>
                                        <option value="Bagpacks">Bagpacks</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Stock</label>
                                    <input type="number" name="stock" class="form-control"  aria-describedby="emailHelp" placeholder="Insert Stock here">
                                    <?= form_error('stock', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weight</label>
                                    <input type="number" name="weight" class="form-control"  aria-describedby="emailHelp" placeholder="Insert Weight (Grams) here">
                                    <?= form_error('weight', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Short Description</label>
                                    <textarea  id="short_desc" name="short_desc" class="form-control"  aria-describedby="emailHelp">Insert Short Description here</textarea>
                                    <?= form_error('short_desc', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Full Description</label>
                                    <textarea  id="full_desc" name="full_desc" class="form-control"  aria-describedby="emailHelp">Insert Full Description here</textarea>
                                    <?= form_error('full_desc', '<div class="text-small text-danger">','<?div>'); ?> 
                                </div>
                                <div class="modal-footer mb-5">
                                    <a href="<?= base_url('admin/Product') ?>" class="btn btn-secondary">Return to previous page</a>
                                    <button type="sumbit" class="btn btn-primary">Save changes</button>
                                </div>
                        </form>
                    </div>
                </main>

                <script>
                    CKEDITOR.replace('full_desc')
                </script>