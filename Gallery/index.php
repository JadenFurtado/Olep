<?php 

session_start();
//include("Gallery.php");
//$gallery = new Gallery();
$path="https://olep.in/";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- google ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- W3 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- My css -->
    <link rel="stylesheet" type="text/css" href="http://localhost/olep.org/style.css">
    <!-- masonry -->
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>

    <!-- lightbox -->
    <link href="http://localhost/lightbox2-master/src/css/lightbox.css" rel="stylesheet" />
    <script src="http://localhost/lightbox2-master/src/js/lightbox.js"></script>

    <!-- w3 schools -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
    <title>Gallery</title>
  </head>
  <body>
    <!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="<?php echo $path ?>" class="w3-bar-item w3-button"><b>Our Lady of Egypt, Kalina</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="<?php echo $path; ?>" class="w3-bar-item w3-button">Home</a>
    </div>
  </div>
</div>
    <script type="text/javascript">
// external js: masonry.pkgd.js, imagesloaded.pkgd.js

// init Masonry
    var $grid = $('.grid').masonry({
      itemSelector: '.grid-item',
      percentPosition: true,
      columnWidth: '.grid-sizer'
    });
// layout Masonry after each image loads
      $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    });  
    </script>
<div class="row">
  
</div>
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- content starts from here -->
<div class="row">
  <div class="container">
      <div class="grid">
        <div class="grid-sizer"></div>
        <div class="grid-item image img-fluid" id="image">
          <a href="<?php echo $path ?>images/img_1.jpeg" data-lightbox="roadtrip">
          <img src="<?php echo $path ?>images/img_1.jpeg" data-lightbox="roadtrip" id="image" />
          </a>
        </div>
        <div class="grid-sizer"></div>
        <div class="grid-item image img-fluid" id="image">
          <a href="<?php echo $path ?>images/img_2.jpeg" data-lightbox="roadtrip">
          <img src="<?php echo $path ?>images/img_2.jpeg" data-lightbox="roadtrip" id="image" />
          </a>
        </div>
        <div class="grid-sizer"></div>
        <div class="grid-item image img-fluid" id="image">
          <a href="<?php echo $path ?>images/img_3.jpeg" data-lightbox="roadtrip">
          <img src="<?php echo $path ?>images/img_3.jpeg" data-lightbox="roadtrip" id="image" />
          </a>
        </div>
         <div class="grid-sizer"></div>
        <div class="grid-item image img-fluid" id="image">
          <a href="<?php echo $path ?>images/1.jpg" data-lightbox="roadtrip">
          <img src="<?php echo $path ?>images/1.jpg" id="image" data-lightbox="roadtrip" />
          </a>
        </div>
        <div class="grid-sizer"></div>
        <a href="<?php echo $path ?>images/2.jpeg">
        <div class="grid-item image img-fluid" id="image">
          <img src="<?php echo $path ?>images/2.jpeg" id="image" data-lightbox="roadtrip" />
        </div>
        </a>
        <div class="grid-sizer"></div>
        <a href="<?php echo $path ?>images/3.jpeg">
        <div class="grid-item image img-fluid" id="image">
          <img src="<?php echo $path ?>images/3.jpeg" id="image" data-lightbox="roadtrip" />
        </div>
        </a>
      </div>
    </div>
</div>
<script type="text/javascript">
  //listen for window resize event
window.addEventListener('resize', function(event){
  var vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
    if(vw>=800){
      $("#image").removeClass("image");
    }
  });
</script>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- extra padding -->
<div class="row">
  
</div>
<footer class="w3-center w3-black w3-padding-16">
  <h3>Our Lady of Egypt, Kalina</h3>
  <p>Built with &#10084; by <a href="https://github.com/JadenFurtado" target="_blank" class="w3-hover-text-green">the parish team</a></p>
</footer>

<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.js"></script>
<script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>