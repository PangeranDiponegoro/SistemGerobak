<?=
    form_open('login/proses_login');
?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6 mx-auto">

                    <!--form card login-->
                    <div class="card rounded-0">
                        <div class="card-header">
                            <h3 class="mb-0"> Login </h3>
                        </div>

                        <div class="card-body">
                            <form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="POST">
                                <div class="form-group">
                                    <label form="uname1"> Username </label>
                                    <input type="text" class="form-control form-control-lg rounded-0" name="uname1" id="uname1" required="">
                                    <div class="invalid-feedback"> Ooops, you missed this one. </div>
                                </div>

                                <div class="form-group">
                                    <label> Password </label>
                                    <input type="password" class="form-control form-control-lg rounded-0" name="pwd1" id="pwd1" required="" autocomplete="new-password">
                                    <div class="invalid-feedback"> Enter your password too! </div>
                                </div>
                                <button type="submit" style="width:100%;" class="btn btn-success btn-lg" id="btnLogin"> Login </button>
                                <a href="<?php echo site_url() ?>login/reg" class="btn btn-dark btn-block" id="btnRegister"role="button">Registrasi</a>
                            </form>

                            <br>

                            <div class="card-body">
                                <?php
                                if (isset($pesan)) {
                                    ?>
                                    <div class="alert alert-danger" style="width:100%" role="alert">
                                        <center>
                                            <?= $pesan ?>
                                        </center>
                                    </div>

                                <?php
                                } else {
                                    ?>
                                    <div class="alert alert-info" style="width:100%" role="alert">
                                        <center>
                                            <?php echo "Masukkan username dan password" ?>
                                        </center>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?=
    form_close();
?>