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
 $_GET['uid'];
 $_GET['name'];
 $_GET['hno'];
 $_GET['sname'];
 $_GET['lname'];
 $_GET['pass'];
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






<h2>RENT</h2>

<form method="GET" action="">
  User ID<br>
  <input type="text" name="Uid" value="<?php echo $_GET['uid']; ?>"/><br>
  <br>
  User Name<br>
  <input type="text" name="Name" value="<?php echo $_GET['name']; ?>"/><br>
  <br>
House Number<br>
  <input type="text" name="House_No" value="<?php echo $_GET['hno']; ?>"/><br>
  <br>
  Society Name<br>
  <input type="text" name="Society_Name" value="<?php echo $_GET['sname']; ?>"/><br>
  <br>
  Login ID<br>
  <input type="text" name="Login_Name" value="<?php echo $_GET['lname']; ?>"/><br>
  <br>
  Password<br>
  <input type="password" name="Password" value="<?php echo $_GET['pass']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$uid = $_GET['Uid'];
    $name = $_GET['Name'];
    $hno = $_GET['House_No'];
    $sname = $_GET['Society_Name'];
	$lname = $_GET['Login_Name'];
	$pass = $_GET['Password'];
	$query = "UPDATE USER SET Name='$name' , House_No='$hno' , Society_Name='$sname', Login_Name='$lname', Password='$pass' WHERE Uid='$uid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully; <a href='residentdisplay.php'>Check updated records here</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='residentdisplay.php'>Check updated records here</a>";
	}
}
else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<a href="index.php" >Back To Menu</a>
</html>