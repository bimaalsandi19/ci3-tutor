<div class="container">
    <h2>List Komik</h2>
    <a href="<?= site_url('/komik/create'); ?>" class="btn btn-primary my-3">Tambah Data</a>
    <div class="row">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari data komik" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= $this->session->flashdata('success'); ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif ?>
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Sampul</th>
                <th>Judul</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>
            <?php foreach ($komik as $rk) :  ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td>
                        <?php if (empty($rk['sampul'])) : ?>
                            <img src="<?= site_url('/assets/img/empty.jpg'); ?>" alt="" width="100">
                        <?php else : ?>
                            <img src="<?= site_url('/assets/img/') . $rk['sampul']; ?>" alt="" width="100">

                        <?php endif ?>

                    </td>
                    <td><?= $rk['judul']; ?></td>
                    <td>
                        <a href="<?= site_url('/komik/detail/') . $rk['id'] ?>" class="btn btn-info">Detail</a>
                        <a href="<?= site_url('/komik/edit/') . $rk['id'] ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('/komik/delete/') . $rk['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')">Delete</a>
                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
</div>