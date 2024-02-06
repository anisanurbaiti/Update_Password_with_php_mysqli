<?php
include "database_connection.php";  
$var_Username      = $_POST['username'];
$var_UserEmail     = $_POST['email'];
$var_UserPassword  = $_POST['password'];
$var_Nohp          = $_POST['no_hp'];
$varString         = $var_Username;
$varLength         = strlen($varString);
$cekName           = mysqli_num_rows(mysqli_query($konek,"SELECT * FROM login_secure WHERE username = '$var_Username'"));
if($cekName>0){
  echo"<script>alert('username tidak boleh sama');window.location.href='index.php';</script>";
}
else if($var_Username == ""){
  echo"<script>alert('username tidak boleh kosong');window.location.href='index.php';</script>";
}
else if($varLength<3){
  echo"<script>alert('username kurang panjang');window.location.href='index.php';</script>";
}
else if($varLength>20){
  echo"<script>alert('username terlalu panjang');window.location.href='index.php';</script>";
}
else{
  $hasil  = mysqli_query($konek,"INSERT INTO login_secure (username,email,password,no_hp) VALUES ('$var_Username','$var_UserEmail', md5('$var_UserPassword'), '$var_Nohp')");
  if(!$hasil){
    die("gagal menyimpan");
  }else{
    echo "<script>alert('User berhasil disimpan'); window.location=('index.php')</script>";
  }
}
?>


