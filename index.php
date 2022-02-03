<?php echo $path="https://olep.in/"; ?>
<!DOCTYPE html>
<html>
<title>OLEP</title>
<meta charset="UTF-8">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="#home" class="w3-bar-item w3-button"><b>Our Lady of Egypt, Kalina</b></a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="#projects" class="w3-bar-item w3-button">Notices</a>
      <a href="#about" class="w3-bar-item w3-button">Priest</a>
      <a href="http://localhost/olep.org/Gallery" class="w3-bar-item w3-button">Gallery</a>
      <!--
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
      -->
    </div>
  </div>
</div>

<!-- Header --> 
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="https://i.ytimg.com/vi/0xijEOdQ3Pw/maxresdefault.jpg" alt="Architecture" width="1500" height="800">
  <div class="w3-display-middle w3-margin-top w3-center">
    <h1 class="w3-xxlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>OLEP</b></span> <span class="w3-hide-small w3-text-light-grey"></span></h1>
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Notices</h3>
  </div>

  <div class="w3-row-padding">
    <!--
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:100%">
      </div>
    </div>
  -->
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container" id="notice_1">
        <div class="w3-display-topleft w3-black w3-padding">31st Nov 2021</div>
        <img src="http://localhost/olep.org/images/notice_1.jpeg" alt="House" style="width:100%">
      </div>
    </div>
    <script type="text/javascript">
      $("#notice_1").click(function(){
        location.href="http://localhost/olep.org/images/notice_1.jpeg";
      });
    </script>
    <!--
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:100%">
      </div>
    </div>
  -->
  </div>
  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Gallery</h3>
    <button class="w3-button w3-black w3-section"  id="Gallery_see_more" type="submit">
        <i class="fa fa-paper-plane"></i> See more
    </button>
  </div>
  <script type="text/javascript">
    $("#Gallery_see_more").click(function(){
      location.href="<?php echo $path ?>/Gallery";
    });
  </script>
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <!--<div class="w3-display-topleft w3-black w3-padding">Summer House</div>-->
        <img src="<?php echo $path ?>/images/img_1.jpeg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container" id="notice_1">
        <!--<div class="w3-display-topleft w3-black w3-padding">31st Nov 2021</div>-->
        <img src="<?php echo $path ?>/images/img_2.jpeg" alt="House" style="width:100%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <!--<div class="w3-display-topleft w3-black w3-padding">Renovated</div>-->
        <img src="<?php echo $path ?>/images/img_3.jpeg" alt="House" style="width:100%">
      </div>
    </div>
    <!--
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="#" alt="House" style="width:100%">
      </div>
    </div>
  -->
  </div>

<!--
  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Summer House</div>
        <img src="/w3images/house2.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Brick House</div>
        <img src="/w3images/house5.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Renovated</div>
        <img src="/w3images/house4.jpg" alt="House" style="width:99%">
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-display-container">
        <div class="w3-display-topleft w3-black w3-padding">Barn House</div>
        <img src="/w3images/house3.jpg" alt="House" style="width:99%">
      </div>
    </div>
  </div>
-->
  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Priest</h3>
    
    <p>The Priest of the parish
    </p>
  
  </div>

  <div class="w3-row-padding ">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="http://localhost/olep.org/images/img_7476.JPG" alt="John" style="width:100%">
      <h3>Fr Rui Comelo</h3>
      <p class="w3-opacity">Parish Priest</p>
      <p></p>
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="http://localhost/olep.org/images/img_7470.JPG" alt="Jane" style="width:100%">
      <h3>Fr Albert Gonsalves</h3>
      <p class="w3-opacity"></p>
      <p></p>
      
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="http://localhost/olep.org/images/img_7481.JPG" alt="Dan" style="width:100%">
      <h3>Fr Evan D'Souza</h3>
      <p class="w3-opacity"></p>
      <p></p>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="http://localhost/olep.org/images/img_7482.jpeg" alt="Dan" style="width:100%">
      <h3>Fr Sravan Kumar</h3>
      <p class="w3-opacity"></p>
      <p></p>
    </div>
  </div>

  <div class="w3-row-padding">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <img src="http://localhost/olep.org/images/IMG_7483.jpeg" alt="Dan" style="width:100%">
      <h3>Fr Villas</h3>
      <p class="w3-opacity"></p>
      <p></p>
    </div>
  </div>
  <!-- Contact Section --
  <div class="w3-container w3-padding-32" id="contact">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Contact</h3>
    <p>Lets get in touch</p>
    <form action="/action_page.php" target="_blank">
      <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Email" required name="Email">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Subject" required name="Subject">
      <input class="w3-input w3-section w3-border" type="text" placeholder="Comment" required name="Comment">
      <button class="w3-button w3-black w3-section" type="submit">
        <i class="fa fa-paper-plane"></i> SEND MESSAGE
      </button>
    </form>
  </div>
-->
  
<!-- Image of location/map -->
<div class="w3-container w3-padding-32" id="location">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Location</h3>
  </div>
<div class="w3-container">
  <img src="<?php echo $path; ?>/images/map.png" class="w3-image" style="width:100%">
</div>
      <button class="w3-button w3-black w3-section" id="location_red" type="submit">
        <i class="fa fa-paper-plane" ></i> View on Map
      </button>
<!-- End page content -->
</div>
<script type="text/javascript">
  $("#location_red").click(function(){
    location.href="https://www.google.com/maps/place/Our+Lady+of+Egypt+Church/@19.0784281,72.8668749,17z";
  });
</script>
<div class="row">
  
</div>
<div class="row">
  
</div>

<footer class="w3-center w3-black w3-padding-16">
  <h3>Our Lady of Egypt, Kalina</h3>
  <p>Built with &#10084; by <a href="https://github.com/JadenFurtado" target="_blank" class="w3-hover-text-green">the parish team</a></p>
</footer>
</body>
</html>