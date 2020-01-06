<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<!-- STYLE -->
<link rel="stylesheet" href="/css/bootstrap.css">
<link rel="stylesheet" href="/css/smartphoto.css">
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



<?php require "php/gallery.php" ?>


<!-- SCRIPT -->
<script src="/js/jquery-3.4.1.min.js?v=1"></script>
	<script src="../js/jquery-smartphoto.min.js?v=1"></script>
	<script>
	$(function(){
		$(".js-img-viwer").SmartPhoto();
	});
	</script>
  <script src="/js/bootstrap.min.js"></script>

  </body>

</html>
