<h2>List Siswa</h2>
<table border="1">
<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Umur</th>
    <th>Alamat</th>
</tr>
<?php
include "koneksi.php";

$siswa = mysqli_query($koneksi,'SELECT * FROM siswa');
$no = 1;
foreach($siswa as $data){
    echo " <tr>
    <td>$no</td>
    <td>".$data['nama_siswa']."</td>
    <td>".$data['umur_siswa']."</td>
    <td>".$data['alamat_siswa']."</td>
    </tr>";
    $no++;
}

?>
