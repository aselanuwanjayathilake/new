<?php
$error=false;

if(isset($_POST['delete']))
{
$company_id=$_POST['company_id'];

if(empty($company_id)){
	$error=true;
	echo "Please Enter a Id";
}
if(!$error)
{
	$servername="localhost";
		$username="root";
		$password="";
		$dbname="customer";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

		$delete_query="DELETE FROM customer WHERE company_id='$company_id'";

		$delete_result=mysqli_query($conn,$delete_query);

		if($delete_result)
		{
			echo "<script type='text/javascript'>alert('Successfully delted')</script>";
		}
		else{
			echo"Error";
		}
}


}







?>


<html>
<head>
    <title>Delete Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="customer.css">

</head>


<body>
	<div class="container-fluid" >
		
<form action="delete.php" method="post" class="register-form">

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="company_id" placeholder="Enter Your Company Id" class="form-control">
</div> </div><br>


<div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
<input type="submit" name="delete" value="Delete" class="btn btn-default regbutton"></div></div>
</form>
</div>
</body>
</html>