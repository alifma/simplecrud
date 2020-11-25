<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <section class="content">
        <div class="container p-3">
            <a href="<?= base_url('/') ?>" class="btn btn-primary float-right">Halaman Utama</a>
            <h1>Tambah Produk</h1>
            <div class="card row p-4 mx-auto" style="width: 32rem;">
                <div class="col">
                    <form action="<?= base_url('save') ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Produk</label>
                            <input type="text" class="form-control  <?= ($validation->hasError('nama_produk') ? 'is-invalid' : ''); ?>" name="nama_produk" placeholder="Odading" value="<?= old('nama_produk'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_produk'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Keterangan Produk</label>
                            <input type="text" class="form-control  <?= ($validation->hasError('keterangan') ? 'is-invalid' : ''); ?>" name="keterangan" placeholder="Roti bantal yang digoreng" value="<?= old('keterangan'); ?>">
                            <div class="invalid-feedback">
                                <?= $validation->getError('keterangan'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label for="exampleFormControlInput1">Harga</label>
                                    <input type="number" class="form-control  <?= ($validation->hasError('harga') ? 'is-invalid' : ''); ?>" name="harga" placeholder="10000" value="<?= old('harga'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('harga'); ?>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label for="exampleFormControlInput1">Jumlah</label>
                                    <input type="number" class="form-control  <?= ($validation->hasError('jumlah') ? 'is-invalid' : ''); ?>" name="jumlah" placeholder="10000" value="<?= old('jumlah'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jumlah'); ?>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="mt-4 btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>