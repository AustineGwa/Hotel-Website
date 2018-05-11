<?php
 $first_name = $_POST['Fname'];
 $last_name = $_POST['Lname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $ID= $_POST['ID'];
 $location =$_POST['location'];
 $room_number=$_POST['room'];
 $room_type = $_POST['roomType'];
 $Booking_date =$_POST['Bdate'];
 $Reporting_date =$_POST['Rdate'];
 $Departure_date =$_POST['Ddate'];

  $conn = mysqli_connect("localhost", "root", "","myhotel" );
  if(mysqli_connect_errno()){
	  echo "error while connecting to database" .mysqli_connect_errno();
  }
  $query="INSERT INTO booking(ID, first_name, last_name, email, phone, location,
            room_no, room_type, booking_date, reporting_daate,departure_date )
	   VALUES( '$ID','$first_name','$last_name','$email','$phone','$location','$room_number',
	   '$room_type','$Booking_date','$Reporting_date','$Departure_date')";
 if(mysqli_query($conn,$query)){
echo "your booking  was saved succesfuly";
 }	
?>