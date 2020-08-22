<?php 
 $host = 'localhost';
  $username = 'root';
  $password = '';
  $dbName = 'wd';
  $connect = mysqli_connect ($host,$username,$password,$dbName) or die ('connection_aborted');

  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  echo $curPageName;

?>
