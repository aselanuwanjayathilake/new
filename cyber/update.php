<?php
$error=false;
if(isset($_POST['update']))
{

	$company_id=$_POST['company_id'];
	$title=$_POST['title'];
	$contact_person=$_POST['contact_person'];
	$designation=$_POST['designation'];
	$tel=$_POST['tel'];
	$mobile=$_POST['mobile'];
	$fax=$_POST['fax'];
	$email=$_POST['email'];


if(empty($title))
	{
		$error=true;
		$error_title="Field Cannot Be Empty";
	}
if(empty($contact_person))
	{
		$error=true;
		$error_contact_person="Field Cannot Be Empty";
	}

	if(empty($designation))
	{
		$error=true;
		$error_designation="Field Cannot Be Empty";
	}

	if(empty($tel))
	{
		$error=true;
		$error_tel="Field Cannot Be Empty";
	}

	if(empty($mobile))
	{
		$error=true;
		$error_mobile="Field Cannot Be Empty";
	}
	if(empty($fax))
	{
		$error=true;
		$error_fax="Field Cannot Be Empty";
	}
	if(empty($email))
	{
		$error=true;
		$error_email="Field Cannot Be Empty";
	}


if(!$error)
{
	
$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$update_query=" UPDATE customer SET company_id='$company_id',title='$title',contact_person='$contact_person',
designation='$designation',tel='$tel',mobile='$mobile',fax='$fax',email='$email' WHERE company_id='$company_id'";

$update_result=mysqli_query($conn,$update_query);

if($update_result)
{
	echo"updated successfully";
}
else
{
	echo"error";
}

}




}










?>




<html>
<body>
<form method="post" action="update.php">	
<input type="text" name="company_id" placeholder="Enter Your Company Id" ><br><br>


<input type="text" name="title" placeholder="Enter Your title" required value="<?php if($error) echo$title; ?>">
<span class="text_danger"><?php if(isset($error_title)) echo$error_title; ?></span><br><br>

<input type="text" name="contact_person" placeholder="Enter Your Contact Name"><br><br>


<input type="text" name="designation" placeholder="Enter Your Designation"><br><br>



<input type="text" name="tel" placeholder="Enter Your Telephone"><br><br>


<input type="text" name="mobile" placeholder="Enter Your Mobile"><br><br>


<input type="text" name="fax" placeholder="Enter Your fax"><br><br>

<input type="text" name="email" placeholder="Enter Your Email"><br><br>



<input type="submit" name="update" value="Update Now">
</form>
</body>
</html