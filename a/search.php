<?php

$error=false;

if(isset($_POST['search']))
{	 

	
	if(!$error)
	{
		$company_id=$_POST['company_id'];
	

		$servername="localhost";
		$username="root";
		$password="";
		$dbname="customer";

		$conn=mysqli_connect($servername,$username,$password,$dbname);

		$search_query="SELECT * FROM customer  WHERE
		company_id='$company_id'  ";
	
		    $search_result=mysqli_query($conn,$search_query);
		    if($search_result)
			{

				while($rows=mysqli_fetch_array($search_result))
	 		{
		    	$company_id=$rows['company_id'];
		    	$title=$rows['title'];
		    	$contact_person=$rows['contact_person'];
		    	$designation=$rows['designation'];
		    	$tel=$rows['tel'];
		    	$mobile=$rows['mobile'];
		    	$fax=$rows['fax'];
		    	$email=$rows['email'];

		    }
		    
		    }
		    else{

		    	echo "unsuccessful";

	}
}



}

?>

<html>
<head>
    <title>thenewboston</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="customer.css">

</head>



<body>
<div class="container-fluid" >
<form  method="post" action="search.php" class="register-form" >

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="company_id" placeholder="Enter Your Company Id" class="form-control" value=" <?php if(isset($company_id)) echo$company_id; ?> ">
</div> </div><br>


<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="title" class="form-control" placeholder="Enter Description Here"  value=" <?php if(isset($title)) echo$title; ?> "></div> </div><br>

  

<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">

<input type="text" name="contact_person" placeholder="Contact Person Name" class="form-control" value=" <?php if(isset($contact_person)) echo$contact_person; ?> "></div> </div><br>


<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="designation" placeholder="Enter Your Designation" class="form-control" value=" <?php if(isset($designation)) echo$designation; ?> "></div> </div><br>
  

  <div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="tel" placeholder="Enter Your Land Line Number" class="form-control" value=" <?php if(isset($tel)) echo$tel; ?> "></div> </div><br>



<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="mobile" placeholder="Enter Your Mobile Phone Number" class="form-control" value=" <?php if(isset($mobile)) echo$mobile; ?>" ></div> </div><br>




<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="fax" placeholder="Enter Your Fax Number Here" class="form-control" value=" <?php if(isset($fax)) echo$fax; ?> "> </div> </div><br>



<div class="row">      
           <div class="col-md-4 col-sm-4 col-lg-4">
<input type="text" name="email" placeholder="Enter Your Email Here" class="form-control"  value=" <?php if(isset($email)) echo$email; ?> ">
</div> </div><br>



<div class="row">
           <div class="col-md-6 col-sm-6 col-xs-6 col-lg-6">
<input type="submit" name="search" value="Search" class="btn btn-default regbutton"> </div>

</form>
</div>
</body>
</html>