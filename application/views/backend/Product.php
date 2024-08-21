<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4 mb-3">
                    <h4 class="mt-5">CRUD PRODUCT</h4>
                    <?= $this->session->flashdata('pesan'); ?>
                    <a class="btn btn-outline-primary mt-3 mb-3" href="<?= base_url('admin/Product/tambah') ?>"><i class="bi bi-plus-lg"></i></a>
                    <table id="myTable" class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                            <th scope="col">No</th>
                            <th scope="col">Img</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1 ; foreach($Product as $p) : ?>
                            <tr>
                            <th scope="row"><?= $no++ ?></th>
                            <td><img style="object-fit: contain;" width="350px" height="150px" src="<?= base_url('upload/Product/') . $p->img ?>" alt="Image Crud"></td>
                            <td><?= $p->name ?></td>
                            <td>    
                                <script>
                                    money = <?= $p->price ?>;
                                    document.write(`Rp.${money.toLocaleString("id-ID")}`);
                                </script> 
                            </td>
                            <td>
                                <a class="btn btn-outline-success" href="<?= base_url('admin/Product/detail/') . $p->id_product ?>"><i class="bi bi-search"></i></a>
                                <a class="btn btn-outline-warning" href="<?= base_url('admin/Product/update/') . $p->id_product ?>"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-outline-danger" href="<?= base_url('admin/Product/delete/') . $p->id_product ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')"><i class="bi bi-trash3"></i></a>
                            </td>
                            </tr>
                            <?php endforeach ; ?>
                        </tbody>
                    </table>
                    </div>
                </main>