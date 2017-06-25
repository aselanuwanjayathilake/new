<?php
$error=false;


if(isset($_POST['search']))
{
  
  

if (empty($company_id)) {
  $error=true;
  $error_company_id="Pleace Enter a Id Number";
}


if(!$error)
{
  $company_id=$_POST['company_id'];


$servername="localhost";
$username="root";
$password="";
$dbname="customer";

$conn=mysqli_connect($servername,$username,$password,$dbname);

$search_query=" SELECT * FROM customer WHERE company_id='$company_id'";
  

 $search_result=mysqli_query($conn,$search_query);

 if($search_result)
 {
  while ($rows=mysqli_fetch_array($search_result)) {
    
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
  echo"Error in search";
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


</head>



<body>
<form action="sea.php" method="post">

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



<div class="container-fluid" >
<form  method="post" action="sea.php" class="register-form" >

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="company_id" class="form-control"  value= "<?php if(isset($company_id)) echo$company_id; ?>"   >
</div> </div><br>

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="title" class="form-control"  <?php if(isset($title)) echo$title;  ?> >
 </div> </div><br>


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
<input type="submit" name="search" value="Search" class="btn btn-default regbutton"> </div></div>

</form>

</body>
</html>