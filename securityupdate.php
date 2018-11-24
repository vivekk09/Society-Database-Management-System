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
 $_GET['secid'];
 $_GET['sid'];
 $_GET['pay'];
 $_GET['secname'];
 $_GET['joining'];
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




<h2>SECURITY</h2>

<form method="GET" action="">
  Security ID<br>
  <input type="text" name="Sec_id" value="<?php echo $_GET['secid']; ?>"/><br>
  <br>
  SID<br>
  <input type="text" name="S_id" value="<?php echo $_GET['sid']; ?>"/><br>
  <br>
Payment<br>
  <input type="text" name="Payment" value="<?php echo $_GET['pay']; ?>"/><br>
  <br>
  Security Name<br>
  <input type="text" name="SecName" value="<?php echo $_GET['secname']; ?>"/><br>
  <br>
  Date of Joining<br>
  <input type="text" name="Date_of_Joining" value="<?php echo $_GET['joining']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
  <br>
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$secid = $_GET['Sec_id'];
    $sid = $_GET['S_id'];
    $pay = $_GET['Payment'];
    $secname = $_GET['SecName'];
	$joining = $_GET['Date_of_Joining'];
	$query = "UPDATE SECURITY SET S_id='$sid' , Payment='$pay' , SecName='$secname', Date_of_Joining='$joining' WHERE Sec_id='$secid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='securitydisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='securitydisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<a href="index.php" >Back To Menu</a>
</html>