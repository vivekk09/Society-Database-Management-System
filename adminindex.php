<!DOCTYPE html>

<div class="name">
<?php
session_start();
echo "Welcome ".$_SESSION['adminid'];
?>
</div>
<html lang="en">
<html style="background-color:Gray; background: url(s7.jpg) left top repeat;
    padding: 15px;">
<title></title>

<style>

.name{
	margin: auto;
    width: 10%;
    border: 8px solid #73AD21;
    padding: 8px;
	color:white;
}	
	
	
.D
{
	color:white;
}


a {
    background-color:#FFD700;
  color: white;
  padding: 1em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
  
}

a:hover {
  background-color: skyblue;
}

.dropbtn {
    background-color: #FF3366;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
	
	
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    
    min-width: 160px;
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #FF9966}

.dropdown:hover .dropdown-content {
    display: block;
	float: left;
}

.dropdown:hover .dropbtn {
    background-color: #FF6633;
}
</style>

<body>



  
    
    <div class="D" style="float: right;
  margin-left:10px;">
    <a href="#G" >About</a>
    
    <a href="#J" >Contact</a>
	<a href="storeduser.php" >Residents</a>
	</div>
    
  



<nav class="B" id="mySidebar">
  
  
  <div class="dropdown"> <button class="dropbtn">Menu</button>
  
  <div class="dropdown-content">
  <a  href="Society.php">Society</a>
  <a  href="Resident.php">User Details</a>
  <a  href="Security.php">Security Details</a>
  <a  href="House.php">House</a>
  <a  href="House Rent.php">Rent</a>
  <a  href="sell.php">Sold Houses</a>
  <a  href="admincomplaints.php">Complaints Page</a>
  </div>
  </div>
</nav>


<div class="D" style="margin-left:250px">

  
      <h1 class="G"><font face="courier" color="green">About Us</font></h1>
      <p><font face="verdana" color="white">Welcome to your Homeground. Let's make our customers happier.</font></p>
   

  
      <h1 class="J"><font face="courier" color="green">Contact Info</font></h1>
      <p><font face="verdana" color="white"><br> Name:Vivek Kumar Shrivastava<br>Mob: 8951833450<br>Email: shrivastava.96vivek@gmail.com<br><br> Name:Virendra Sehwag<br>Mob:7415757037<br>Email: virendrapaji@gmail.com</font></p>
    

  

  
</div>


</body>
</html>
</html>