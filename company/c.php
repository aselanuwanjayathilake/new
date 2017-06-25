<?php
$error=false;

if(isset($_POST['insert']))
{
	$company_id=$_POST['company_id'];
	$title=$_POST['title'];
	$contact_person=$_POST['contact_person'];
	$designation=$_POST['designation'];
	$tel=$_POST['tel'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];


if (empty($title)) {
	$error=true;
	echo "entr value";
}

}
if(!$error)
{


$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$insert_query="INSERT INTO customer(company_id,title,contact_person,designation,tel,mobile,fax,email) VALUES
		'$company_id','$title','$contact_person','$designation','$tel','$mobile','$fax','$email' ";
	

 $insert_result=mysqli_query($conn,$insert_query);

 if($insert_result)
 {
 	echo "Successfully inserted";
 }
 else{
 	echo"Error in Insert";
 }

}







?>

<html>
<body>
<form action="c.php" method="post">
<input type="text" name="company_id" placeholder="Enter Your Company Id"><br><br>


<input type="text" name="title" placeholder="Enter Your Title"><br><br>

<input type="text" name="contact_person" placeholder="Enter Contact Person Name"><br><br>

<input type="text" name="designation" placeholder="Enter Your Designation"><br><br>

<input type="text" name="tel" placeholder="Enter Your Telephone number"><br><br>

<input type="text" name="mobile" placeholder="Enter Your Mobile Number"><br><br>

<input type="text" name="fax" placeholder="Enter Your Fax Number"><br><br>

<input type="text" name="email" placeholder="Enter Your Email"><br><br>

<input type="submit" name="insert" value="Insert Now">


</form>
</body>
</html>