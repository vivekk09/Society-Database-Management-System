<!DOCTYPE html>

<?php
//Step1
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
 $conn = mysqli_connect($servername, $username, $password, $dbname);
 
 if($conn)
 {
	 echo "";
 }
 else
 {
	 die("Connection failed because ".mysqli_connect_error());
 }
 error_reporting(0);
?>

<html style="background-color:Gray; background: url(s4.jpg) left top repeat;
    padding: 15px;">
 
 <style>
img {
    border-radius: 90%;
	
}

input[type=text] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

input[type=password] {
    width: 20%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    background-color: #3CBC8D;
    color: white;
}

a {
    background-color:orange;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: skyblue;
}

.button {
    background-color: #4682B4 ;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.button:hover {
    background-color:#4CAF50;
    color: white;
}

</style>


	
<div align="center" font color="red">
<font color="white">
<img src="s5.jpg" alt="Front" width="50%" height="300">





<h2>HOUSE RENT</h2>

<form method="GET" action="">
  Rent ID<br>
  <input type="text" name="Rid" >
  <br>
  User ID<br>
  <input type="text" name="Uid" >
  <br>
House ID<br>
  <input type="text" name="Hid" >
  <br>
  Society Name<br>
  <input type="text" name="Society_Name" >
  <br>
  Rent Amount<br>
  <input type="text" name="Rent_Price" >
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Submit Rent">
</form> 

<?php
//Step2
if($_GET['submit'])
{
$rentid = $_GET['Rid'];
$userid = $_GET['Uid'];
$houseid = $_GET['Hid'];
$sname = $_GET['Society_Name'];
$price = $_GET['Rent_Price'];
if($rentid!="" &&  $userid!="" &&  $houseid!="" &&  $sname!="" && $price!="")
{
$query = "INSERT INTO rent VALUES('$rentid', '$userid','$houseid', '$sname','$price' )";
$data = mysqli_query($conn, $query);

if($data)
{
	echo "Data inserted into Database";
}
}
else
{
	echo "All fields are required";
}
}
?>
<br>
<a href="rentdisplay.php">Show details</a>
<a href="adminindex.php" >Back To Menu</a>
</html>