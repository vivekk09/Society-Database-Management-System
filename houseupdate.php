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
 $_GET['hid'];
 $_GET['bno'];
 $_GET['type'];
 $_GET['name'];
?>

<html style="background-color:Gray; background: url(s4.jpg) left top repeat;
    padding: 15px;">
 
 <style>
img {
    border-radius: 90%;
	
}

input[type=text]{
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




<h2>HOUSE</h2>

<form method="GET" action="">
  Society Name<br>
  <input type="text" name="Hid" value="<?php echo $_GET['hid']; ?>"/><br>
  <br>
  SID<br>
  <input type="text" name="Block_no" value="<?php echo $_GET['bno']; ?>"/><br>
  <br>
Address<br>
  <input type="text" name="Type" value="<?php echo $_GET['type']; ?>"/><br>
  <br>
  No. of Houses<br>
  <input type="text" name="Society_Name" value="<?php echo $_GET['id']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$hid = $_GET['Hid'];
    $bno = $_GET['Block_no'];
    $type = $_GET['Type'];
    $id = $_GET['Sid'];
	$query = "UPDATE HOUSE SET Block_no='$bno' , Type='$type' , Sid='$id' WHERE Hid='$hid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='housedisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='housedisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<a href="index.php" >Back To Menu</a>
</html>