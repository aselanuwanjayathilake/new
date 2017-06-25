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
	$error_title="This Feild cannot Be Empty";
}
if (empty($contact_person)) {
	$error=true;
	$error_contact="This Feild cannot Be Empty";
}
if (empty($designation)) {
	$error=true;
	$error_designation="This Feild cannot Be Empty";
}
if (empty($tel)) {
	$error=true;
	$error_tel="This Feild cannot Be Empty";
}
if (empty($mobile)) {
	$error=true;
	$error_mobile="This Feild cannot Be Empty";
}
if (empty($fax)) {
	$error=true;
	$error_fax="This Feild cannot Be Empty";
}
if (empty($email)) {
	$error=true;
	$error_email="This Feild cannot Be Empty";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $error=true;
  $error_email = "Invalid email format"; 
}


if(!$error)
{


$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$insert_query="INSERT INTO customer(company_id,title,contact_person,designation,tel,mobile,fax,email) VALUES
		('$company_id','$title','$contact_person','$designation','$tel','$mobile','$fax','$email') ";
	

 $insert_result=mysqli_query($conn,$insert_query);

 if($insert_result)
 {
 	echo "<script type='text/javascript'>alert('Successfully Inserted')</script>";
 }
 else{
 	echo"Error in Insert";
 }

}
}

?>

<html>
<head>
  <title>INSERT,UPDATE,DELETE,SEARCH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>


<form action="cc.php" method="post">

 <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <!-- Logo -->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">HOME PAGE</a>
            </div>

            <!-- Menu Items -->
            <div>
                <ul class="nav navbar-nav">
                    <li ><a href="cc.php">INSERT</a></li>
                    <li><a href="up.php">UPDATE</a></li>
                    <li><a href="del.php">DELETE</a></li>
                    <li><a href="sea.php">SEARCH</a></li>

                   
                </ul>
            </div>

        </div>
    </nav>
<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="company_id" placeholder="Enter Your Company Id"><br><br>
</div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="title" placeholder="Enter Your Title" required value="<?php if($error) echo$title; ?>" >
<span class="danger"><?php if(isset($error_title)) echo$error_title; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="contact_person" placeholder="Enter Contact Person Name" required value="<?php if($error) echo$contact_person; ?>">
<span class="danger"><?php if(isset($error_contact_person)) echo$error_contact_person; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="designation" placeholder="Enter Your Designation" required value="<?php if($error) echo$designation; ?>">
<span class="danger"><?php if(isset($error_designation)) echo$error_designation; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="tel" placeholder="Enter Your Telephone number" required value="<?php if($error) echo$tel; ?>">
<span class="danger"><?php if(isset($error_tel)) echo$error_tel; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" required value="<?php if($error) echo$mobile; ?>">
<span class="danger"><?php if(isset($error_mobile)) echo$error_mobile; ?></span>
<br><br></div></div>


<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="fax" placeholder="Enter Your Fax Number" required value="<?php if($error) echo$fax; ?>">
<span class="danger"><?php if(isset($error_fax)) echo$error_fax; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Enter Your Email" required value="<?php if($error) echo$email; ?>">
<span class="danger"><?php if(isset($error_email)) echo$error_email; ?></span>
<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="submit" name="insert" value="Insert Now" class="btn btn-primary"  ></div></div>


</form>

</body>
</html>