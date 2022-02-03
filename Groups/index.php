<?php

session_start();
?>
<!doctype html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
 <!-- google analytics-->
 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-WCP3EH2ZS1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-WCP3EH2ZS1');
</script>
 <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<title>Home</title>
<!--icons-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- aos code-->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<style>
* {
  box-sizing: border-box;
}
/* Add a gray background color with some padding */
body {
  font-family: Arial;
   background-image: url('https://i.ytimg.com/vi/0xijEOdQ3Pw/maxresdefault.jpg');
  background-repeat: no-repeat;
  background-size:cover;
  background-attachment:fixed;
  height:100%;
  width:100%;
}

.title{
    background-color:#172E4D;
    color:white;
    width:100%;
    text-align:center;
    padding:10px;
}

.container{
    padding-top:20px;
    padding-left:20px;
    padding-right:20px;
}
/* Header/Blog Title */
.header {
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
    padding:5px;
    padding:none;
  float: left;
  width: 85%;
  background-color: white;
}


/* Right column */
.rightcolumn {
    padding: 5px;
  float: right;
  width: 15%;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}
.card p a{
    padding-top:15px;
    padding-left:10px;
    padding-right:10px;
    font-size:25px;
    height:80px;
    width:80px;
    color:black;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
  padding:none;
}

#more {display: none;}

/* Footer */
.footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   background-color:#172E4D; 
   text-align: center;
}
/*nav bar*/
nav{
  background-color: #172E4D;
  width: 100%;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
  }
  body {
  font-family: Arial;
   background-image: url('https://i.pinimg.com/originals/61/4d/e1/614de148a4942d071a2adae6f1b02b5c.jpg');
  background-repeat: no-repeat;
  background-size: cover!important;
  background-attachment:fixed;
}
.title{
    opacity:1;
    background-color:#172E4D;
    color:white;
    width:100%;
    text-align:center;
}
}
/* the gallery */
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    font-family: 'Poppins',sans-serif;
}
a{
    text-decoration: none;
    color: #555;
}
p{
    color: black;
}
.container{
    max-width: 1300px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    justify-content: space-around;
}
.col-2{
    flex-basis: 50%;
    min-width: 300px;
}
.col-2 img{
    max-width: 100%;
    padding: 50px 0;
}
.col-2 h1{
    font-size: 50px;
    line-height: 60px;
    margin: 25px 0;
}
.btn{
    display: inline-block;
    background: rgb(189, 128, 16);
    color: #fff;
    padding: 8px 30px;
    margin: 30px 0;
    border-radius: 30px;
    transition: background 0.5s ;
}
.btn:hover{
    background: orange;
}
.header{
    background: radial-gradient(#fff,rgb(240, 205, 140));
}

.categories{
    margin: 70px 0;
}
.col-3{
    flex-basis: 30%;
    min-width: 250px;
    margin-bottom: 30px;
}
.col-3 img{
    width: 100%;
    width: 250px;
    height: 210px;
}
.small-container{
    max-width: 1080px;
    margin: auto;
    padding-left: 25px;
    padding-right: 25px;
}
.col-4{
    flex-basis: 25%;
    padding: 10px;
    min-width: 200px;
    margin-bottom: 50px;
    transition: transform 0.5s;
}
.col-4 img{
    width: 90%;
    width: 195px;
    height: 180px;
}
.title{
    text-align: center;
    margin: 0 auto 80px;
    position: relative;
    line-height: 60px;
    color: #white;
}
.title::after{
    content: '';
    background: #ff523b;
    width: 80px;
    height: 5px;
    border-radius: 5px;
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
}
h4{
    color:black;
    font-weight: normal;
}
.col-4 p{
    font-size: 14px;
}
.rating .fa{
    color: #ff523b;
}
.col-4:hover{
    transform: translateY(-10px);
}
/*-----offer----*/
.offer{
    background: radial-gradient(#fff,rgb(240, 205, 140));
    margin-top: 80px;
    padding: 30px 0;
}
.col-2 .offer-img{
    padding: 50px;
}
small{
     color: #555;
}
/*----testimonial----*/
.testimonial{
    padding-top: 100px;
}
.testimonial .col-3{
    text-align: center;
    padding: 40px 20px;
    box-shadow: 0 0 20px 0px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transform 0.5s;
}
.testimonial .col-3:hover{
     transform: translateY(-10px);
}
.fa.fa-quote-left{
    font-size: 34px;
    color: #ff523b;
}
.col-3 p{
    font-size: 12px;
    margin: 12px 0;
    color: #777;
}
.testimonial .col-3 h3{
    font-weight: 600;
    color: #555;
    font-size: 16px;
}
.menu-icon{
    width: 30px;
    margin-left: 20px;
    display: none;
}
/*---------all products page---------*/
.row-2{
    justify-content: space-between;
    margin: 100px auto 50px;
}
select{
    border: 1px solid #ff523b;
    padding: 5px;
}
select:focus{
    outline: none;
}
.page-btn{
    margin: 0 auto 80px;
}
.page-btn span{
    display: inline-block;
    border: 1px solid #ff523b;
    margin-left: 10px;
    width: 40px;
    height: 40px;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}
.page-btn span:hover{
    background: #ff523b;
    color: #fff;
}

.footer {
    position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   color: white;
   background-color:#172E4D; 
   text-align: center;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: #008CBA;
}

.col:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
</head>
<body>
    <script>
  AOS.init();
</script>
  <header>
 <nav class="navbar navbar-expand-md navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Olep</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/ourParish/">Our Parish</a>
      </li>
      <!--
      <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/Groups/">Groups</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/Zones/">Zones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/Notices/">Events</a>
      </li>
      -->
    <li class="nav-item">
        <a class="nav-link" href="https://www.olep.in/temp.php">Gallery</a>
      </li>
      <li class="nav-item">
        <?php 
          if(isset($_SESSION['profile_id'])){
            ?>
            <form method="POST">
            <button name="logout">logout</button>
            </form>
            <?php
          }
          if(isset($_POST['logout'])){
            session_unset();
            session_destroy();
            ?>
            <script type="text/javascript">
              alert("logged out!");
              location.replace("https://www.olep.in/");
            </script>
            <?php
          }
        ?>
      </li>
    </ul>
  </div>
</nav>
</header>
<div style="  padding-top:20px;padding-left:20px;padding-right:20px;">
<div class="row">
    <div class="leftcolumn">
         <!---------featured products-----------> 
     <div class="small-container">
         <h2 class="title">PPC members</h2>
         <div class="row">
             <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-24 at 00.27.56.jpeg" alt="">
                 <h4>Fr. Rui Comello</h4>
                 <div class="overlay">
                    <div class="text">PPC head and Parish Priest</div>
                 </div>
             </div>
             <div class="col-4">
                <img src="images/2016-01-10 19.34.49-1.jpg" alt="">
                <h4>Vinay Coutinho</h4>
                <div class="overlay">
                    <div class="text">PPC Vice President<br>Head of lectors</div>
                 </div>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/DSC_3577.jpg" alt=""></a>
                <a href="productdetails.html"></a><h4>Grahm Quiney</h4></a>
                <div class="overlay">
                    <div class="text">PPC Secretary<br>Zone II, <b>Co-ordinator</b>, Our Lady of Vailankanni</div>
                 </div>
            </div>
            <div class="col-4">
                <img src="images/e216eb8705f84f3db052636d592f5f52-0001.jpg" alt="">
                <h4>Selsa Colaco</h4>
                <div class="overlay">
                    <div class="text">PPC Vice President</div>
                 </div>
            </div>
         </div>
         <div class="row">
             <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-24 at 00.27.30.jpeg" alt="">
                 <h4>Fr. Albert Gonsalves</h4>
                 <div class="overlay">
                    <div class="text">Parish team</div>
                 </div>
             </div>
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-24 at 00.27.03.jpeg" alt="">
                <h4>Fr. Evan D’Souza</h4>
                <div class="overlay">
                    <div class="text">Parish team</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-24 at 00.27.16.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Fr. J. Sravan Kumar</h4></a>
                <div class="overlay">
                    <div class="text">Parish team</div>
                 </div>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-24 at 00.26.10.jpeg" alt="">
                <h4>Fr. Vilas Correia (OFM)</h4>
                <div class="overlay">
                    <div class="text">Parish team</div>
                 </div>
                <p></p>
            </div>
         </div>
         <div class="row">
             <div class="col-4">
                <img src="images/Sr. Sharmila D'souza Sisters of Mary Immaculate.jpg" alt="">
                <h4>Sr. Sharmila D'Souza</h4>
                <div class="overlay">
                    <div class="text">Sisters of Mary Immaculate</div>
                 </div>
            </div>
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-26 at 09.39.27.jpeg" alt="">
                 <h4>Anita Menezes</h4>
                 <div class="overlay">
                    <div class="text">PPC Vice President</div>
                 </div>
             </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-16 at 20.43.54.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Mr. Xavier Pereira</h4></a>
                <div class="overlay">
                    <div class="text">Head of Eucharistic Ministers</div>
                 </div>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 18.20.02.jpeg" alt="">
                <h4>Judith Quiney</h4>
                <div class="overlay">
                    <div class="text">Head of Ladies Sodality</div>
                 </div>
            </div>
         </div>
         <div class="row">
             <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-19 at 18.17.14.jpeg" alt="">
                 <h4>Dora Fernandes</h4>
                 <div class="overlay">
                    <div class="text">Head of Christian Life Community</div>
                 </div>
             </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-16 at 20.42.54.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Ann Barretto</h4></a>
                <div class="overlay">
                    <div class="text">Head of Choirs</div>
                 </div>
            </div>
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-18 at 19.39.13.jpeg" alt="">
                 <h4>Justin Morais</h4>
                 <div class="overlay">
                    <div class="text">Zone I,<b> Co-ordinator</b>, Holy Trinity</div>
                 </div>
                 <p></p>
             </div>
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-21 at 14.06.16.jpg" alt="">
                <h4>Wilfred Lobo</h4>
                <div class="overlay">
                    <div class="text">Zone I, Morning Star</div>
                 </div>
            </div> 
         </div>
         <div class="row">
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 18.25.04.jpeg" alt="">
                <h4>Placid Mendonca</h4>
                <div class="overlay">
                    <div class="text">Zone I,  St. Ann</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-19 at 18.27.26.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Theresa Godinho</h4></a>
                <div class="overlay">
                    <div class="text">Zone I, St. Michael</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-18 at 23.40.12.jpg" alt="">
                <h4>Mary D’Souza</h4>
                <div class="overlay">
                    <div class="text">Zone II, St. Anne</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-18 at 23.41.01.jpg" alt="">
                 <h4>Vira D’Souza</h4>
                 <div class="overlay">
                    <div class="text">Zone II,  Immaculate Conception</div>
                 </div>
                 <p></p>
             </div>
         </div>
         <div class="row">
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 17.18.23.jpeg" alt="">
                <h4>Dominica Fernandes</h4>
                <div class="overlay">
                    <div class="text">Zone II, St. John</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-19 at 17.23.08.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Daisy Rodrigues</h4></a>
                <div class="overlay">
                    <div class="text">Zone II, St. Sebastian</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 17.13.25.jpg" alt="">
                <h4>Leena Rodrigues</h4>
                <div class="overlay">
                    <div class="text">Zone II, Holy Cross</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 12.45.32.jpg" alt="">
                <h4>Loretta Silveria</h4>
                <div class="overlay">
                    <div class="text">Zone III A, <br><b>Co-ordinator</b>,Divine Angel</div>
                 </div>
                <p></p>
            </div>
         </div>
         <div class="row">
             <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-19 at 11.24.27.jpg" alt="">
                 <h4>Sharon Pinto</h4>
                 <div class="overlay">
                    <div class="text">Zone III A, Ave Maria</div>
                 </div>
                 <p></p>
             </div>
             
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-21 at 14.47.08.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Beena Carlos</h4></a>
                <div class="overlay">
                    <div class="text">Zone III B, Holy Cross</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-19 at 17.46.55.jpg" alt="">
                 <h4>Poonam Galbano</h4>
                 <div class="overlay">
                    <div class="text">Zone III B,<br> <b>Co-ordinator</b>,Our Lady Of Nazareth</div>
                 </div>
                 <p></p>
             </div>
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 11.40.05.jpg" alt="">
                <h4>Sanorita Rodrigues</h4>
                <div class="overlay">
                    <div class="text">Zone III B, Mother Theresa</div>
                 </div>
                <p></p>
            </div>
         </div>
         <div class="row">
             <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-16 at 20.40.45.jpeg" alt="" class="img-fluid">
                <h4>Louisa Monteiro</h4>
                <div class="overlay">
                    <div class="text">Zone III B, St. Jude</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/alphonse_joseph.jpg" alt=""></a>
                <a href="productdetails.html"></a><h4>Alphonse Joseph</h4></a>
                <div class="overlay">
                    <div class="text">Zone IV A, Co-ordinator</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/Photo Genevieve Rodrigues  (1).jpg" alt=""></a>
                <a href="productdetails.html"></a><h4>Genevieve Rodrigues</h4></a>
                <div class="overlay">
                    <div class="text">Zone IV A, Servers</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-19 at 17.39.19.jpeg" alt="">
                <h4>Nevis Sheryl D'sa</h4>
                <div class="overlay">
                    <div class="text">Zone IV A, St. Luke</div>
                 </div>
                <p></p>
            </div>
        </div>
          <div class="row">
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-19 at 17.04.18.jpeg" alt="">
                 <h4>Bharati Fernandes</h4>
                <div class="overlay">
                    <div class="text">Zone IV A, Don Bosco</div>
                </div>
                 <p></p>
            </div>
             <div class="col-4">
                <img src="images/Christine Photo.jpg" alt="">
                <h4>Christine Pereira</h4>
                <div class="overlay">
                    <div class="text">Zone IV B,<br><b>Co-ordinator</b>, St. Dominic Savio</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <a href="productdetails.html"><img src="images/WhatsApp Image 2021-06-18 at 19.34.13.jpeg" alt=""></a>
                <a href="productdetails.html"></a><h4>Carol DeSouza</h4></a>
                <div class="overlay">
                    <div class="text">Zone IV B, St. Anthony</div>
                 </div>
                <p></p>
            </div>
            <div class="col-4">
                <img src="images/WhatsApp Image 2021-06-18 at 23.41.48.jpg" alt="">
                <h4>Sandra Colaco</h4>
                <div class="overlay">
                    <div class="text">Zone IV B, St. Joseph</div>
                 </div>
                <p></p>
            </div>
         </div>
         <div class="row">
            <div class="col-4">
                 <img src="images/WhatsApp Image 2021-06-18 at 23.42.42.jpeg" alt="">
                 <h4>Maryann Francis</h4>
                 <div class="overlay">
                    <div class="text">Zone IV B,  St. Peter</div>
                 </div>
                 <p></p>
             </div>
             <div class="col-4">
                 
             </div>
             <div class="col-4">
                 
             </div>
             <div class="col-4">
                 
             </div>
         </div>
         <!-- carousel ends here -->
       </div>
     </div>
    <!-- ends here-->
        </div>
      </div>
      <!--left col ends here-->
      
  </div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<!--aos code-->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>