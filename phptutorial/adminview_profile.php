<?php
	session_start();
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"lms");
	$name = "";
	$id = "";
	$email = "";
	$mobile = "";
	$query = "select * from admins where email = '$_SESSION[email]'";
	$query_run = mysqli_query($connection,$query);
	while($row = mysqli_fetch_assoc($query_run)){
		$name = $row['user_name'];
		$id = $row['id'];
		$email = $row['email'];
		$mobile= $row['mobile'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
	<meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
  	<style type="text/css">
		body{
			background-color:grey;
		}

		.container-flex
		{
            padding-top:10%;
		}
		
  	</style>
</head>
<body>
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System(LMS)</a>
			</div>
			<font style="color: white"><span><strong>Welcome: <?php echo $_SESSION['name'];?>
        </strong></span></font>
			<font style="color: white"><span><strong>Email: <?php echo $_SESSION['email'];?>
        </strong></span></font>
			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown">My Profile</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="adminview_profile.php">View Profile</a>
						<a class="dropdown-item" href="adminchange_password.php">Change Password</a>
					</div>
				</li>
				<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-flex text white">
      <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <h5 class="text-center text "></h5>
		<form  >
					User Name:<br>
                    <input type="text" class="form-control" value="<?php echo $name;?>" disabled>
                    ID:<br>
                    <input type="number" class="form-control" value="<?php echo $id;?>" disabled>
				    Email:<br>
					<input type="text" class="form-control" value="<?php echo $email;?>" disabled>
					Mobile:<br>
					<input type="number" class="form-control" value="<?php echo $mobile;?>" disabled>

			</form>
        
        </div>
        <div class="col-lg-4"></div>
      </div>
    </div>
</body>
</html>