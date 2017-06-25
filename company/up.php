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

if (empty($company_id)) {
  $error=true;
  $error_company_id="Pleace Enter a Id Number";
}


if(!$error)
{


$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$update_query="UPDATE customer SET title='$title',contact_person='$contact_person',designation='$designation',tel='$tel',mobile='$mobile',fax='$fax',email='$email'
WHERE company_id='$company_id'";
  

 $update_result=mysqli_query($conn,$update_query);

 if($update_result)
 {
  echo "<script type='text/javascript'>alert('Successfully Updated')</script>";
 }
 else{
  echo"Error in Update";
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


<form action="up.php" method="post">

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
<input type="text" class="form-control" name="title" placeholder="Enter Your Title"  >

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="contact_person" placeholder="Enter Contact Person Name" >

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="designation" placeholder="Enter Your Designation" >

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="tel" placeholder="Enter Your Telephone number">

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" >

<br><br></div></div>


<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="fax" placeholder="Enter Your Fax Number">

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="text" class="form-control" name="email" placeholder="Enter Your Email">

<br><br></div></div>

<div class="container">	
<div class="form-group">
<input type="submit" name="update" value="Update Now" class="btn btn-primary"  ></div></div>


</form>

</body>
</html>