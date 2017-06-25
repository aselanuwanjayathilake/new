<?php
$error=false;
if(isset($_POST['delete']))
{

	$company_id=$_POST['company_id'];
	


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

$delete_query=" DELETE FROM customer WHERE company_id='$company_id' ";

$delete_result=mysqli_query($conn,$delete_query);

if($delete_result)
{
	echo"Deleted successfully";
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
<form method="post" action="delete.php">	
<input type="text" name="company_id" placeholder="Enter Your Company Id" required value="<?php if($error) echo$company_id; ?>" >
<span class="text_danger"><?php if(isset($error_company_id)) echo$error_company_id; ?></span><br><br>


<input type="submit" name="delete" value="Delete Now">
</form>
</body>
</html