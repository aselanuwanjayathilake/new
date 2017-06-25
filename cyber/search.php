<?php
$error=false;
if(isset($_POST['search']))
{

	$company_id=$_POST['company_id'];
	$title=$_POST['title'];
	$contact_person=$_POST['contact_person'];
	$designation=$_POST['designation'];
	$tel=$_POST['tel'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];


if(empty($company_id))
	{
		$error=true;
		$error_company_id="Field Cannot Be Empty";
	}



if(!$error)
{

	

	
$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$search_query=" SELECT * FROM customer WHERE company_id='$company_id'  ";

$search_result=mysqli_query($conn,$search_query);

if($search_result)
{
	while($_raws=mysqli_fetch_array($search_result))
	{
		$company_id=$_raws['company_id'];
		$title=$_raws['title'];
		$contact_person=$_raws['contact_person'];
		$designation=$_raws['designation'];
		$tel=$_raws['tel'];
		$mobile=$_raws['mobile'];
		$fax=$_raws['fax'];
		$email=$_raws['email'];
	}
	
}
else{
	echo "error";
}

}

}















?>




<html>
<body>
<form method="post" action="search.php">	
<input type="text" name="company_id" placeholder="Enter Your Company Id"  value="<?php if(isset($company_id)) echo$company_id; ?>">
<br><br>



<input type="text" name="title" placeholder="Enter Your title" value="<?php if(isset($title)) echo$title; ?>"><br><br>

<input type="text" name="contact_person" placeholder="Enter Your Contact Name" value="<?php if(isset($contact_person)) echo$contact_person; ?>"><br><br>


<input type="text" name="designation" placeholder="Enter Your Designation" value="<?php if(isset($designation)) echo$designation; ?>"><br><br>



<input type="text" name="tel" placeholder="Enter Your Telephone" value="<?php if(isset($tel)) echo$tel; ?>"><br><br>


<input type="text" name="mobile" placeholder="Enter Your Mobile" value="<?php if(isset($mobile)) echo$mobile; ?>"><br><br>


<input type="text" name="fax" placeholder="Enter Your fax" value="<?php if(isset($fax)) echo$fax; ?>"><br><br>

<input type="text" name="email" placeholder="Enter Your Email" value="<?php if(isset($email)) echo$email?>"><br><br>



<input type="submit" name="search" value="search Now">
</form>
</body>
</html