<?php
// Connect to Database
$host = mysqli_connect("localhost", "root", "", "tugu");

$judul=$_POST['judul'];

if(isset($_POST['simpan'])){
    if(!isset($_FILES['image'])){
        echo 'Pilih file gambar';
    }
    else
    {
 $image   = addslashes(file_get_contents($_FILES['image']['tmp_name']));
 $image_name = addslashes($_FILES['image']['name']);
 $image_size = getimagesize($_FILES['image']['tmp_name']);
    if($image_size == false){
   echo 'File yang anda pilih Bukan gambar';
        }
        else
        {
          if(!$insert = mysqli_query($host, "INSERT INTO update_info VALUES(NULL, '$judul','$image_name','coba', '$image', '', '1703034' ) "))
            {
                echo 'Gagal upload gambar';
     }

            else
            {
        // Informasi berhasil dan kembali ke inputan
  echo"<script>alert('Gambar Berhasil diupload !');history.go(-1);</script>";
     }

     }
    }
}

?>