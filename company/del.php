<?php
$error=false;


if(isset($_POST['delete']))
{
  $company_id=$_POST['company_id'];
  


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

$delete_query=" Delete FROM customer WHERE company_id='$company_id'";
  

 $delete_result=mysqli_query($conn,$delete_query);

 if($delete_result)
 {
  echo "<script type='text/javascript'>alert('Successfully Deleted')</script>";
 }
 else{
  echo"Error in Delete";
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


<form action="del.php" method="post">

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
<input type="text" class="form-control" name="company_id" placeholder="Enter Your Company Id"><br>
</div></div>


<div class="container"> 
<div class="form-group">
<input type="submit" name="delete" value="Delete Now" class="btn btn-primary"  ></div></div>


</form>

</body>
</html>