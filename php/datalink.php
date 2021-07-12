<?php
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$birthdate = $_POST['bdate'];
$age = $_POST['uage'];
$blood = $_POST['bldg'];
$mobile = $_POST['mno'];
$emailid = $_POST['ueid'];
$state = $_POST['ustate'];
$city = $_POST['ucity'];


$conn = new mysqli('localhost:3307','root','','wdl');
if($conn->connect_error){
	die('connection failed :'.$conn->connec_error);
}else{
	$stmt = $conn->prepare("insert into donor(firstnm,lastnm,dobirth,dage,dbld,dmob,dmail,dstate,dcity) values(?,?,?,?,?,?,?,?,?)");
	$stmt->bind_param("sssisssss",$firstname,$lastname,$birthdate,$age,$blood,$mobile,$emailid,$state,$city);
	$stmt->execute();
	$str1=" Donor ".$firstname." ".$lastname." have successfully registered himself/herself as a donor on this website <br/>";
	$str2=" Patient requesting for ".$blood." blood group in ".$city." will be provided with your number <br/>";
	$str3=" Thank you for your help <br/>";
	echo $str1;
	echo $str2;
	echo $str3;
	
	$stmt->close();
	$conn->close();

}

?>
