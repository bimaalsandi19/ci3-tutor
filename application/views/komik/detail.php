<div class="container my-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="<?= site_url('/assets/img/') . $komik['sampul']; ?>" alt="..." width="100%">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $komik['judul']; ?></h5>
                            <p class="card-text"><?= $komik['penulis']; ?></p>
                            <p class="card-text"><small class="text-muted"><?= $komik['penerbit']; ?></small></p>
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="<?= site_url('/komik/delete/') . $komik['id']; ?>" class="btn btn-danger" onclick="return confirm('Aapakah anda yakn untuk hapus data ini ?')">Delete</a>
                            <br><br>
                            <a href="<?= site_url('/komik'); ?>">Kembali ke Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>