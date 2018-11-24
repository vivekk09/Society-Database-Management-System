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
 $_GET['sname'];
 $_GET['sid'];
 $_GET['add'];
 $_GET['houses'];
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




<h2>SOCIETY</h2>

<form method="GET" action="">
  Society Name<br>
  <input type="text" name="Sname" value="<?php echo $_GET['sname']; ?>"/><br>
  <br>
  SID<br>
  <input type="text" name="Sid" value="<?php echo $_GET['sid']; ?>"/><br>
  <br>
Address<br>
  <input type="text" name="Address" value="<?php echo $_GET['add']; ?>"/><br>
  <br>
  No. of Houses<br>
  <input type="text" name="No_of_houses" value="<?php echo $_GET['houses']; ?>"/><br>
  <br>
  <br>
  <input type="submit" class="button" name="submit" value="Update">
  <br>
  <br>
  <br>
</form> 

<?php
//Step2
if($_GET['submit'])
{
	$sname = $_GET['Sname'];
    $sid = $_GET['Sid'];
    $add = $_GET['Address'];
    $houses = $_GET['No_of_houses'];
	$query = "UPDATE SOCIETY SET SNAME='$sname' , ADDRESS='$add' , NO_OF_HOUSES='$houses' WHERE SID='$sid' ";
	$data = mysqli_query($conn, $query);
	if($data){
		echo "<font color='green'>Record updated successfully.<a href='societydisplay.php'>Check updated records here.</a>";
	}
	else{
		echo "<font color='white'>Record not updated.<a href='societydisplay.php'>Check updated records here <br></a>";
	}
}

else{
	echo "<font color='red'>Click on update button to save the changes";
}
?>
<br>
<br>
<br>
<br>
<br>
<a href="index.php" >Back To Menu</a>
</html>