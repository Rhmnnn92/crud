<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>
<body>
    <center>
        <h1>Input Data Mahasiswa</h1>
        <label style="color:red;"><?php echo validation_errors();?></label>
    </center>

    <form action="<?php echo base_url().'kampus/tambah_aksi';?>" method="post" enctype="multipart/form-data">
    <table style="margin: 20px auto;">
        <tr>
            <td>NIM</td>
            <td><input type="text" name="nim" ></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" ></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" ></td>
        </tr>
        <tr>
            <td>Pekerjaan</td>
            <td><input type="text" name="pekerjaan" ></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td><input type="file" name="foto"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Tambah"><input type="reset" value="batal"><?php echo anchor('kampus/','<input type=button value=kembali>');?></td>
        </tr>
    </table>
</form>
</body>
</html>