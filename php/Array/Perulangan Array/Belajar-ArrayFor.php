<?php 
$jurusan = array("Teknik Informatika", "Teknik Industri", "Teknik Perkapalan");
$jumlah_jurusan = count($jurusan);
echo "<br>";
print_r($jumlah_jurusan);
echo "<br>";
for ($i=0; $i < $jumlah_jurusan; $i++) { 
    echo "<br>";
    echo "jurusan" . $jurusan[$i];
    echo "<br>";

}

?>