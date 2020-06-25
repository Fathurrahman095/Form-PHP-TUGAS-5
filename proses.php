<?php 
if(isset($_POST['nama']))
{
 $nama = $_POST['nama'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Nama : ".$nama."<br/>";
}

if(isset($_POST['username']))
{
 $username = $_POST['username'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "username : ".$username."<br/>";
}

if(isset($_POST['email']))
{
 $email = $_POST['email'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Email : ".$email."<br/>";
}
if(isset($_POST['jenis_kelamin']))
{
 $jenis_kelamin = $_POST['jenis_kelamin'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "Jenis Kelamin : ".$jenis_kelamin."<br/>";
}
if(isset($_POST['agama']))
{
 $agama = $_POST['agama'];
 echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
 echo "agama : ".$agama."<br/>";
}

?>
