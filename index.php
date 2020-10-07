
<!DOCTYPE html>
<html>
<title>WaterOn - A Drinking Water Supplying Plant</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/wateron.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('img/2.jpg');
    min-height: 100%;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}
#book:hover {background-color:#0000FF!important; color:#FFFFFF!important;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onClick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
	<a href="#order" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> ORDER OR BOOKING</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red">
      <i class="fa fa-search"></i>
    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onClick="toggleFunction()">ABOUT</a>
	<a href="#order" class="w3-bar-item w3-button" onClick="toggleFunction()"> ORDER OR BOOKING</a>
    <a href="#contact" class="w3-bar-item w3-button" onClick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home" align="center">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center"><img src="img/logo.png" class="w3-round w3-imagegv" alt="Logo" width="400"></span><br/>
	<h5 class="w3-center" style="color:#333333; text-shadow:#FFFFFF 1px 1px 5px;"><b>Be On! Because we Care about your Health</b></h5><br><br>
	<span class="w3-center w3-padding-large w3-blue w3-xlarge w3-animate-opacity">A Drinking Water Supplying Plant</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about" style="font-size:24px;">
  <h1 class="w3-center">ABOUT US</h1>
  <p class="w3-center"><em>We love serving potable water to the people</em></p>
  <p>Potable water is an essential human need. Each person on Earth requires at least 20 to 30 liters of clean, safe water a day for drinking and preparing food. Though water supply from local government is available in certain parts in India, it is generally not considered safe enough to drink until it undergoes several filtering & processing steps.</p>
  <p>So, our aim is to provide safe & hygienic drinking water at a nominal price. We provide daily or on-demand 20L drinking water jar delivery service in Ghazipur.</p>
  <p>We delivery water in clean 20L jars at your doorsteps with just a phone call. We believe that timely water delivery is essential to every household and we aim to provide clean water jars with professional service.</p>
  <br>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">Order & Pre-Booking</span>
  </div>
</div>

<!-- Order Section -->
<div class="w3-container w3-center" style="padding:128px 16px" id="order">
  <h3 class="w3-center">CHOOSE A SUBSCRIPTION PLAN THAT FITS YOUR NEEDS.</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-border w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>200L</b> (10 Jars)</li>
        <li class="w3-padding-16"><b>10 Jars</b> in a month</li>
        <li class="w3-padding-16"><b>1 Jar</b> in every three days</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Rs 200</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-blue w3-padding-24">
          <button class="w3-button w3-blue w3-padding-large" id="book">Book</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-border w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>300L</b> (15 Jars)</li>
        <li class="w3-padding-16"><b>15 Jars</b> in a month</li>
        <li class="w3-padding-16"><b>1 Jar</b> in every alternate days</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Rs 300</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-blue w3-padding-24">
          <button class="w3-button w3-blue w3-padding-large" id="book">Book</button>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-border w3-hover-shadow">
        <li class="w3-blue w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>600L</b> (30 Jars)</li>
        <li class="w3-padding-16"><b>30 Jars</b> in a month</li>
        <li class="w3-padding-16"><b>1 Jar</b> daily</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">Rs 600</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-blue w3-padding-24">
          <button class="w3-button w3-blue w3-padding-large" id="book">Book</button>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onClick="this.style.display='none'">
  <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE WE WORK</h3>
  <p class="w3-center"><em>We'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Sheikhpura, Ghazipur, U.P. - 233001, INDIA<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +91 8318700061, 9454910640<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: contact@wateron.co.in<br>
      </div>
      <p>Please drop your details and query. We will get back to you in a moment.</p>
      <form action="/action_page.php" target="_blank">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-blue w3-padding-64 w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-blue"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.cybaic.com" title="cybaic" target="_blank" class="w3-hover-text-green">Cybaic</a></p>
  <span>&#169; WaterOn 2018</span>
  <p>All of WaterOn content, logo & images are protected under copyright & trademark laws.</p>
</footer>
 
<!-- Add Google Maps -->
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(25.5947431, 83.5854338);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLAFIUhlqvdYG4GLhmqIbcb2LxwN1I1c4&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
