<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <title>Belajar-CRUD</title>
</head>

<body>
    <div class="container col-md-6 mt-4">
        <h1>List Barang</h1>
        <div class="card">
            <div class="card-header bg-success text-white ">
                DATA BARANG <a href="tambah.php" class="btn btn-sm btn-primary float-right">Tambah</a>
            </div>
            <div class="card-body">
                <?php
                include('koneksi.php');

                $id = $_GET['id']; //mengambil id barang yang ingin diubah

                //menampilkan barang berdasarkan id
                $data = mysqli_query($koneksi, "select * from barang where id = '$id'");
                $row = mysqli_fetch_assoc($data);
                ?>
                <form action="" method="post" role="form">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="nama" required="" class="form-control" value="<?= $row['nama']; ?>">
                        <input type="hidden" name="id" required="" value="<?= $row['id']; ?>">

                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="harga" class="form-control" value="<?= $row['harga']; ?>">
                    </div>

                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="form-control" name="deskripsi"><?= $row['deskripsi']; ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit" value="simpan">Update data</button>
                </form>

                <?php
                include('koneksi.php');


                if (isset($_POST['submit'])) {

                    $id = $_POST['id'];
                    $nama = $_POST['nama'];
                    $harga = $_POST['harga'];
                    $deskripsi = $_POST['deskripsi'];


                    mysqli_query($koneksi, "update barang set nama='$nama', harga='$harga', deskripsi='$deskripsi' where id ='$id'") or die(mysqli_error($koneksi));

                    echo "<script>alert('data berhasil disimpan.');window.location='index.php';</script>";
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>