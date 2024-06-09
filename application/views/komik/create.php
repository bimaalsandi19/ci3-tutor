<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <h5 class="card-header">Form Tambah Data</h5>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control <?= form_error('judul') ? 'is-invalid' : ''; ?>" id="judul" name="judul" autofocus value="<?= set_value('judul'); ?>">
                            <div class="invalid-feedback">
                                <?php echo form_error('judul'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control <?= form_error('slug') ? 'is-invalid' : ''; ?>" id="slug" name="slug">
                            <div class="invalid-feedback">
                                <?php echo form_error('slug'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" class="form-control <?= form_error('penulis') ? 'is-invalid' : ''; ?>" id="penulis" name="penulis">
                            <div class="invalid-feedback">
                                <?php echo form_error('penulis'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control <?= form_error('penerbit') ? 'is-invalid' : ''; ?>" id="penerbit" name="penerbit">
                            <div class="invalid-feedback">
                                <?php echo form_error('penerbit'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="sampul">Sampul</label>
                            <input type="text" class="form-control <?= form_error('sampul') ? 'is-invalid' : ''; ?>" id="sampul" name="sampul">
                            <div class="invalid-feedback">
                                <?php echo form_error('sampul'); ?>
                            </div>
                        </div>
                        <input type="submit" value="Tambah" class="btn btn-primary">
                        <a href="<?= site_url('/komik/index'); ?>" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>