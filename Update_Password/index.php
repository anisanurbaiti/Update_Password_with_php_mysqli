
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
        <h1>Register</h1>
      <center>
      <form method="POST" action="simpan.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Username</label>
          <input type="text" name="username" />
        </div>
        <div>
          <label>Email</label>
         <input type="email" name="email" />
        </div>
        <div>
          <label>Password</label>
         <input type="password" name="password" required="" />
        </div>
         <div>
          <label>No Hp</label>
         <input type="text" name="no_hp" required="" />
        </div>
        <div>
         <button type="submit" name="register">Register</button>
        </div>
        </section>
      </form>
       <h1><a href="view.php" >Lihat Data</a></h1>
  </body>
</html>