<?php
// Start SQL
  $url='sql209.epizy.com';
  $username='epiz_30714375';
  $password='ajEpXyA2y3qqOU';
  $con=mysqli_connect($url,$username,$password,"epiz_30714375_admin_dashboard");

  if(mysqli_connect_errno())
  {
      echo 'Database Connection Error';
  }
?>