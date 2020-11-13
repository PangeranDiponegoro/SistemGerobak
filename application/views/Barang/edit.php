<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Barang
                </div>

                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert"><?= validation_errors() ?></div>
                    <?php endif ?>

                    <form action="" method="post">
                        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">

                        <div class="form-group">
                            <label for="id_barang"> ID Barang</label>
                            <input type="text" class="form-control" id="id_barang" name="id_barang" value="<?= $barang['id_barang']; ?>">
                            <?= form_error('id_barang'); ?>
                        </div>

                        <div class="form-group">
                            <label for="nama"> Nama Barang</label>
                            <input type="text" class="form-control" id="namabarang" name="namabarang" value="<?= $barang['namabarang']; ?>">
                            <?= form_error('id_barang'); ?>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Harga  </label>
                            <input type="text" class="form-control" id="harga" name="harga" value="<?= $barang['harga']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="Mapel">Stock</label>
                            <input type="text" class="form-control" id="stock" name="stock" value="<?= $barang['stock']; ?>">
                        </div>

                       
                       

                        

                        <button type="submit" name="edit" class="btn btn-primary float-right"> Ok </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>