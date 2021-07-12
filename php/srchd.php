<html>
<body>
<table>
<style>
table{
	border-collapse: collapse;
	width: 100%;
	text-align: left;
}
</style>
<tr><td>Name</td><td>Blood Group</td><td>Phone No.</td><td>Email</td><td>City</td></tr>
<?php 
  
$conn = mysqli_connect('localhost:3307','root','','wdl');
if($conn->connect_error){
	die('connection failed :'.$conn->connec_error);
}else{
     
    $cityname = $_POST['dcity']; 
    $dblg = $_POST['blg'];
	$sql = "SELECT * FROM donor where dbld='".$dblg."' AND dcity='".$cityname."'";
    $result = $conn->query($sql);
	 	
	while($user = $result-> fetch_assoc())   
   { 
          
       
            $str1="<tr><td>".$user['firstnm']."</td><td> ".$user['lastnm']."</td><td>".$user['dbld']."</td><td>".$user['dmob']."</td><td>".$user['dmail']."</td><td>".$user['dcity']."</td></tr>";
			echo $str1;     
         
    } 
} 
  
?> 
</table></body></html>