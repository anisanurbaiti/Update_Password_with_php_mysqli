<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: salmon;
  color: white;
}
</style>
</head>
<body>

<center><h2> DATA PASSWORD</h2></center>
   <h3><center><a href="index.php" >Register</a></h3></center><br>
 <table class="table" width="100%"> 
  <tr>
   <th>No</th>
                                                <th>ID</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>No Hp</th>
                                                <th>Aksi</th>
  </tr>
   <?php 
    include "database_connection.php";  
    $no = 1;
    $data = mysqli_query($konek,"SELECT * FROM login_secure order by id");
    while($d = mysqli_fetch_array($data)){
      ?>
  <tr>
    <td><?php echo $no++; ?></td>
        <td><?php echo $d['id']; ?></td>
        <td><?php echo $d['username']; ?></td>
        <td><?php echo $d['email']; ?></td>
        <td><?php echo $d['password']; ?></td>
        <td><?php echo $d['no_hp']; ?></td>
         <td> <a href="update.php?id=<?php echo $d['id']; ?>"  class="btn btn-warning">Edit</a></td>
        </tr>
                        <?php
}
?>
  </tr>
</table>

</body></html>