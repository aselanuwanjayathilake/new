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
		$error_title="Title Field Must Be Filled";
	}

	if(empty($contact_person))
	{
		$error=true;
		$error_contact_person="This Feild Must Filled";
	}


	if(empty($mobile))
	{
		$error=true;
		$error_mobile="This Feild Must Filled";
	}

	$test = 0714556260;

if (preg_match('/^0\d{9}$/', $test) ) {
	  $error=true;
	  $error_mobile="Not Valid Format";
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$error=true;
  $error_email= "Invalid Email Format"; 
}

	if(!$error)
	{
		$servername="localhost";
		$username="root";
		$password="";
		$dbname="customer";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

		$update_query="UPDATE customer SET title='$title',contact_person='$contact_person',designation='$designation',tel='$tel',mobile='$mobile',fax='$fax',email='$email'
		WHERE company_id='$company_id' ";
	
		    $update_result=mysqli_query($conn,$update_query);
		    if($update_result)
		    {
		    	echo "<script type='text/javascript'>alert('Successfully Updated')</script>";;

		    }
		    else{

		    	echo "unsuccessful";
		    }
	}
}



?>
<html>
<head>
    <title>Update Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="customer.css">

</head>



<body>
<div class="container-fluid" >
<form  method="post" action="update.php" class="register-form" >

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="company_id" placeholder="Enter Your Company Id" class="form-control">
</div> </div><br>

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="title" class="form-control" placeholder="Enter Description Here" required value="<?php if($error) echo$title; ?>" >
 <span class="text_danger"> <?php if(isset($error_title)) echo$error_title; ?></span></div> </div><br>


<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">

<input type="text" name="contact_person" placeholder="Contact Person Name" class="form-control" >
</div></div><br>

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="designation" placeholder="Enter Your Designation" class="form-control"></div> </div><br>
  

  <div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="tel" placeholder="Enter Your Land Line Number" class="form-control"></div> </div><br>



<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="mobile" placeholder="Enter Your Mobile Phone Number" class="form-control">
</div> </div><br>



<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="fax" placeholder="Enter Your Fax Number Here" class="form-control"></div> </div><br>



<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="email" placeholder="Enter Your Email Here" class="form-control">
</div> </div><br>



<div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
<input type="submit" name="update" value="Update" class="btn btn-default regbutton"> </div>

</form>
</div>
</body>
</html>