<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-5 pb-3 border-bottom">Acount Setting</h4>
                            <?= $this->session->flashdata('account'); ?>
                            <img class="mx-auto d-block mt-3" width="150px" height="150px" src="<?= base_url('upload/pp/' . $User['image']) ?>" alt="profile picture">
                            <form action="<?= base_url('admin/Setting/update_data/' . $User['id']) ?>" method="post">
                                <div class="form-group">
                                    <label for="exampleInputEmail1 mt-3">Profile Picture</label>
                                    <input type="hidden" name="old_img" value="<?= $User['image'] ?>">
                                    <input type="file" name="img"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1 mt-3">Email address</label>
                                    <input type="email" name="email" value="<?= $User['email'] ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Username</label>
                                    <input type="text" name="username" value="<?= $User['nama'] ?>" class="form-control" id="exampleInputPassword1">
                                </div>

                                <button type="sumbit" class="float-right btn btn-primary mb-5">Sumbit</button>
                            </form>
                            <h4 class="mt-5 pb-3 border-bottom">Merchant Setting</h4>
                            <?php foreach($Merchant as $m) : ?>
                            <form action="<?= base_url('admin/Setting/update_merchant/' . $m->id) ?>" method="post">   
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Merchant Name</label>
                                    <input type="text" name="name" value="<?= $m->name ?>" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1 mt-3">Email address</label>
                                    <input type="email" name="email" value="<?= $m->email ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone</label>
                                    <input type="number" name="phone" value="<?= $m->phone ?>"  class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Province</label>
                                            <select name="province" id="" class="form-control">
                                                <option  value="<?= $m->id_province ?>"><?= $m->province ?></option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label for="exampleInputPassword1">Distrik</label>
                                            <select name="distrik" id="" class="form-control">
                                                <option  value="<?= $m->id_distrik ?>"><?= $m->distrik ?></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-groop">
                                    <label for="exampleInputPassword1">Street</label>
                                    <input type="text" name="street"  value="<?= $m->street ?>" class="form-control" id="exampleInputPassword1">
                                </div>

                                <div class="hidden_input">
                                    <input type="hidden" name="input_province"  value="<?= $m->province ?>">
                                    <input type="hidden" name="input_distrik"  value="<?= $m->distrik ?>">
                                </div>
                                <button type="sumbit" class="float-right btn btn-primary mt-3 mb-3">Sumbit</button>
                            </form>
                            <?php endforeach ; ?>
                    </div>
                </main>

                <script>
                    $(document).ready(function(){
                        jQuery.ajax({
                            url: '<?= base_url("admin/Setting/province"); ?>',
                            success: function(response)
                            {
                                $("select[name=province]").append(response)
                            },
                            error: function()
                            {

                            }
                        });
                        $("select[name=province]").on("change" , function(){
                            var province = $("select[name=province]").find(":selected").text();
                            var id_province = $("select[name=province]").find(":selected").val();
                            $("input[name=input_province]").val(province);
                            $.ajax({
                                type:'POST',
                                url: '<?= base_url("admin/Setting/distrik"); ?>',
                                data: { 'id_province' : id_province},
                                success: function(response)
                                {
                                    $("select[name=distrik]").html(response)
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