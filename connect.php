<?php
  $host="localhost";
  $user="root";
  $pass="";
  $dbName="hackathon"
  
  $sub_countyName= isset($_POST["sub_county_name"])
  $facility_name= isset($_POST["facility_name"])
  $Deliveries= isset($_POST["no_of_deliveries"])
  

  $conn = mysqli_connect($host, $user, pass,$dbName);
  if(mysqli_connect_errno()){
	  echo "error while connecting to database" .mysqli_connect_errno();
  }

?>