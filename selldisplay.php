<?php
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
 
 $query = "Select* from SELL";
 $data= mysqli_query($conn, $query);
 $total= mysqli_num_rows($data);
 
 if($total!=0)
 {
	 ?>
	 	 	 	 	 	 <style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #9400D3;
    color: white;
}

a {
    background-color:orange;
  color: white;
  padding: 0.5em 1.5em;
  text-decoration: none;
  text-transform: uppercase;
}

a:hover {
  background-color: skyblue;
}
</style>
	 <table>
		<tr>
			<th>Seller ID</th>
			<th>User ID</th>
			<th>Society ID</th>
			<th>House ID</th>
			<th>Society Name</th>
			<th>Selling Price</th
			<th colspan="2">Operations</th>
		</tr>

<?php		
	 while($result = mysqli_fetch_assoc($data))
	 {
		 echo "<tr>
					<td>".$result['Sell_id']."</td>
					<td>".$result['Uid']."</td>
					<td>".$result['Sid']."</td>
					<td>".$result['Hid']."</td>
					<td>".$result['Society_Name']."</td>
					<td>".$result['Sell_Price']."</td>
					<td><a href='sellupdate.php?sellid=$result[Sell_id]&uid=$result[Uid]&sid=$result[Sid]&hid=$result[Hid]&sname=$result[Society_Name]&price=$result[Sell_Price]'>Edit</a></td>
					<td><a href='selldelete.php?sellid=$result[Sell_id]' onClick='return checkdelete()'>Delete</a></td>
				</tr>";
	 }
 }
 
 else{
	 echo "No Record found";
 }
 ?>
 </table>
 <script>
 function checkdelete()
 {
	return confirm('Are you sure you want to delete this data?');
 }
 </script>
 