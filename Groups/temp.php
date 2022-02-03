<?php 

session_start();
include("groups.php");
$members = new  Groups();

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="http://localhost/olep.org/style.css">
    <link rel="stylesheet" type="text/css" href="http://localhost/olep.org/css/ppc.css">
    <!-- W3 CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Our Lady of Egypt Church, Kalina</title>
  </head>
  <body>
    <div class="row">
      <div class="hero_content">
    <div>
    <img src="data:image/jpeg;base64,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" class="img-fluid" id="hero_img">
  </div>
    <h1>Our Lady OF Egypt Church</h1>
    <div>
      <div>
      <h6>OLEP family, centered on the eucharist, reaching out in love</h6>
    </div>
    </div>
  </div>
</div>
<!-- nav bar starts here -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">OLEP</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://localhost/olep.org/Timing/">Timings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Groups">PPC Members</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Gallery</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- extra padding -->
<div class="row">
  
</div>
<!-- PPC LIST starts here -->
<div class="ppc_row w3-row-padding">
  <!-- PPC head starts 1st! -->
  <div class=" member_body container l3 m4 s12">
    <div class="member_img img-fluid">
      <img src="images/e216eb8705f84f3db052636d592f5f52-0001.jpg" alt="member_img">
    </div>
    <div class="member_details">
      <div class="member_name">
        Some Name
      </div>
      <div class="member_zone">
        Zone: 1, Community Name
      </div>
      <div class="member_designation">
      SSC co-ordinator
      </div>
    </div>
  </div>
</div>
<!-- footer starts here -->
<div class="row">
  <div class="footer bg-dark">
    <div class="footer_title">
      OLEP
    </div>
    <div class="container">
      ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
  </div>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>