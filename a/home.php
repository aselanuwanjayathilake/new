
<html>
<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>




<style>
h3 {
  display: inline-block;
  padding: 10px;
  background: #B9121B;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
}

.p {
  text-align: center;
  padding-top: 40px;
  font-size: 13px;
}

</style>
<script>
$('.carousel').carousel({
  interval: 500,
  pause: "false"
});


</script>
</head>



<body>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
    <li data-target="#mycarousel" data-slide-to="1"></li>
    <li data-target="#mycarousel" data-slide-to="2"></li>
    <li data-target="#mycarousel" data-slide-to="3"></li>
    <li data-target="#mycarousel" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://unsplash.it/2000/1250?image=397" data-color="lightblue" alt="first Image">
      <div class="carousel-caption">
        <h3>First Image</h3>
      </div>
    </div>
    <div class="item">
      <img src="https://unsplash.it/2000/1250?image=689" data-color="firebrick" alt="Second Image">
      <div class="carousel-caption">
        <h3>Second Image</h3>
      </div>
    </div>
    <div class="item">
      <img src="https://unsplash.it/2000/1250?image=675" data-color="violet" alt="Third Image">
      <div class="carousel-caption">
        <h3>Third Image</h3>
      </div>
    </div>
    <div class="item">
      <img src="https://unsplash.it/2000/1250?image=658" data-color="lightgreen" alt="Fourth Image">
      <div class="carousel-caption">
        <h3>Fourth Image</h3>
      </div>
    </div>
    <div class="item">
      <img src="https://unsplash.it/2000/1250?image=638" data-color="tomato" alt="Fifth Image">
      <div class="carousel-caption">
        <h3>Fifth Image</h3>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</body>
</html>