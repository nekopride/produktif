<?php
session_start();
if(!isset($_SESSION["login"])){
    header ("location: login.php");
    exit;
}
include"koneksi.php";

$quary=mysqli_query($conn,"SELECT*FROM penjualan.petugas")or die(mysqli_error());
?>
<html>
<head>
<title>home</title>
</head>
<body>
   <center>
    <a href="">HOME</a>
    <a href="">TAMBAH</a>
    <a href="">CARI</a>
    <a href="logout.php">LOGOUT</a>
   </center>

   <center>
   <table border ="1">
   <tr>
   <th>NO</th>
   <th>ID PETUGAS</th>
   <th>NAMA PETUGAS</th>
   <th>USERNAME</th>
   <th>PASSWORD</th>
   <th>ALAMAT</th>
   </tr>
   <br>
   <?php
    $no ="1";
    while($data = mysqli_fetch_array($quary)){
        echo "
            <tr>
             <td><center>$no</center></td>
             <td><center>$data[id_petugas]</center></td>
             <td><center>$data[nama_petugas]</center></td>
             <td><center>$data[username]</center></td>
             <td><center>$data[password]</center></td>
             <td><center>$data[alamat]</center></td>
            </tr>
        ";
     $no++;
    }
   ?>
   </table>
   </center>
</body>
</html>