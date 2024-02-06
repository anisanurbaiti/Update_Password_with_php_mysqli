<!DOCTYPE html>
<html>
  <head>
    <title>Update Password</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: salmon;
      }
    button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: salmon;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>EDIT DATA REGISTER</h1>
      <center>
      	<?php
	include 'database_connection.php';  
	$id = $_GET['id'];
	$data = mysqli_query($konek,"select * from login_secure where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
      <form method="POST" action="update_proses.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Username</label>
         <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
		<input type="text" name="username" value="<?php echo $d['username']; ?>">
        </div>
        <div>
          <label>Email</label>
         <input type="email" name="email" value="<?php echo $d['email']; ?>" />
        </div>
        <div>
          <label>Password</label>
         <input type="password" name="password" value="yuyu" />
        </div>
         <div>
          <label>No Hp</label>
         <input type="text" name="no_hp" value="<?php echo $d['no_hp']; ?>" />
        </div>
        <div>
         <button type="submit" name="update">Update</button>
        </div>
        </section>
      </form>
       <h1><a href="view.php" >Lihat Data</a></h1>
  </body>
</html>
<?php
}
?>