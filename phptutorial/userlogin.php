<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRARY MANAGEMENT SYSTEM></title>
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
  <link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
    <script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
    <style>
      body{
        width:100%;
        height:97vh;
        border:3px solid white;
        background-color:grey;
      }
      .container-flex{
        padding-top:10%;
      }

    </style>
</head>
<body >
    <div class="container-flex text white">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <h5 class="text-center text ">User Login Form</h5>
        <form action="" method="POST">
          Email:<br>
          <input type="email" name="email" class="form-control" required>
          Password:<br>
          <input type="password" name="password" class="form-control" required>
          <button type="submit"  name="login" class="btn btn-primary">Login</button>
    </form>
          
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
    <?php
				session_start();
				if(isset($_POST['login']))
        {
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"lms");
					$query = "select * from users where email = '$_POST[email]'";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run))
          {
						if($row['email'] == $_POST['email'])
            {
							if($row['password'] == $_POST['password'])
              {
								$_SESSION['name'] = $row['user_name'];
								$_SESSION['email'] = $row['email'];
								$_SESSION['id'] = $row['id'];
								header("Location:user_dashboard.php");
							}
							else
              {
                
								?>
								<br><br><center><strong><span class="alert-danger">Wrong Password</span><strong></center>
								<?php
							}
						}
					}
				}
			?>
    
</body>
</html>


