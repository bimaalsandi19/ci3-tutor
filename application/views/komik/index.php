<div class="container">
    <h2>List Komik</h2>
    <a href="<?= site_url('/komik/create'); ?>" class="btn btn-primary my-3">Tambah Data</a>
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
                    <td><?= $rk['sampul']; ?></td>
                    <td><?= $rk['judul']; ?></td>
                    <td>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('/komik/delete/') . $rk['id'] ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk hapus data ini?')">Delete</a>
                    </td>
                </tr>

            <?php endforeach ?>
        </tbody>
    </table>
</div>