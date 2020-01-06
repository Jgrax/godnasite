<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<!-- STYLE -->
<link rel="stylesheet" href="/css/bootstrap.css">
<!-- <link rel="stylesheet" href="/css/smartphoto.css"> -->
<!-- SCRIPT -->




<!-- <style>
/* Make the image fully responsive */
.carousel-inner img {
  width: 100%;
  height: 100%;
}
</style> -->

  </head>
  <body>
<!-- NAVBAR -->
<?php require "php/navbar.php" ?>

<!-- COROUSEL -->
<div id="demo" class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/4-1.jpg" alt="Los Angeles" width="100%" height="500" >
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/4-1.jpg" alt="Chicago" width="100%" height="500">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="/img/4-1.jpg" alt="New York" width="100%" height="500">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>

</div>

<!-- JUMBOTRON -->
<div class="jumbotron">
  <h1>Bootstrap Tutorial</h1>
  <p>Bootstrap is the most popular HTML, CSS...</p>
</div>

<?php require "php/blog.php" ?>

<!-- CONTENT -->
<div class="container-fluid">
  <div class="row">
    <div class="col" style="background-color:lavender;">.col</div>
    <div class="col" style="background-color:orange;">.col</div>
    <div class="col" style="background-color:lavender;">.col</div>
  </div>
</div>




<!-- SCRIPT -->
<script src="/js/jquery-3.4.1.min.js?v=1"></script>
	<!-- <script src="../js/jquery-smartphoto.min.js?v=1"></script>
	<script>
	$(function(){
		$(".js-img-viwer").SmartPhoto();
	});
	</script> -->
  <script src="/js/bootstrap.min.js"></script>

  </body>

</html>
