<?php
      $connection = mysqli_connect("localhost","root","");
      $db = mysqli_select_db($connection,"lms");
      $query = "insert into admins(user_name,id,email,password,mobile) values('$_POST[user_name]',
      '$_POST[id]','$_POST[email]',
      '$_POST[password]',$_POST[mobile])";
      $query_run = mysqli_query($connection,$query);
  ?>
  <script type="text/javascript">
      alert("Registration successfully....You may login now.")
      window.location.href = "index.php";
  </script>