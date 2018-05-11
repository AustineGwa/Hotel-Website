<!DOCTYPE html>
<html lang="en">
<head>
<title>booking form</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width", initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="otherPages.css" />
</head>
<body>
<div id="wrapper">
<div id="bookingForm">
<form action="book.php" method="post" name="book" />

<table>
make a reservation
<tr>
  <td>first name:</td> <td><input type="text" name="Fname" required /></td>
</tr>
<tr>
  <td>last name: </td> <td><input type="text" name="Lname" required /></td>
</tr>
<tr>  
 <td> email: </td> <td><input type="email" name="email" required /></td>
</tr>
<tr>
  <td>phone: </td> <td><input type="number" name="phone" required /></td>
</tr>
<tr>
  <td>ID or Passport:</td> <td><input type="number" name="ID" required /></td>
</tr>
<tr>
  <td>location:</td> <td> <input type="text" name="location" required /><br/></td>
</tr>
<tr>
  <td>Room number:</td> <td> <select name="room" required>
               <option>Please choose a room</option>     
               <option>1</option>
			   <option>2</option>
			   <option>3</option>
			   <option>4</option>
			   <option>5</option>
               </select></td><br/><br/>
  </tr>
  <tr>
 <td> Room type:</td> <td> <select name="roomType" required>
               <option>Please choose a room type</option>     
               <option>1</option>
			   <option>2</option>
			   <option>3</option>
			   <option>4</option>
			   <option>5</option>
               </select></td><br/><br/>
</tr>
<tr>			   
 <td>Booking Date:</td> <td> <input type="date" name="Bdate" required /></td>
 </tr>
<tr>
 <td> Check in Date: </td> <td><input type="date" name="Rdate" required /></td>
 </tr>
<tr>
 <td>Check out  Date:</td> <td> <input type="date" name="Ddate" required /></td>
 </tr>
  </table>
  <br/>
        <input type="submit" value="book now" name="btnButton" id="submitBtn"/><br/><br/>
</div>
 Remember to confirm with us  via our contact  after booking thanks and happy time
  
</div>  
</form>
</body>
<html>