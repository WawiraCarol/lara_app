<!DOCTYPE html>
<html>
<title>NYUMBA CHAP CHAP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="connect.png" sizes="65x65" type="image/png">
<script src="w3.js"> </script>

<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 33.33%;
    padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>

<style>
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: "Raleway", sans-serif
    }

    body,
    html {
        height: 100%;
        line-height: 1.8;
    }
    /* Full height image header */

    .bgimg-1 {
        background-position: center;
        background-size: cover;
        background-image: url("connect.png");
        min-height: 100%;
    }

    .w3-bar .w3-button {
        padding: 16px;
    }

</style>

<body>

    <!-- Navbar (sit on top) -->
    <div class="navbar">
    <div  class="w3-top">
        <div class="w3-bar w3-black w3-card" id="myNavbar style="float right" color="black >
            <a href="index.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i> BACK HOME</a>
            <a href="register.php" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> REGISTRATION</a>
            <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-unlock"></i> SIGN IN</a>
          </div>



            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    </div>
    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
          <marquee>
          <b>
            <span class="w3-jumbo ">Nyumba Chap Chap. Getting to rent houses faster and easily.
          </b>
        </marquee>
           </span><br>
        </div>





        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>

    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT NYUMBA CHAP CHAP</h3>
        <center>
        <p class="w3-center w3-large">Key features of our site</p>
      </center>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">ONLINE HOUSE REPOSITORY</p>
                <p> Nyumba chap chap is an online repository for all houses that a person may want. we allow the landlords to post their houses and the description of their houses
                   and the tenants looking for the houses to view and book the location where they find it better for them to stay and within their economical constraints
                  </p>
            </div>
        </div>
    </div>
<marquee>
    <div class="row">
      <div class="column">
        <img src="hudson_house.png" style="width:100%">
      </div>
      <div class="column">
        <img src="Aurora House.png" style="width:100%">
      </div>
      <div class="column">
        <img src="real_house.jpg" style="width:100%">
      </div>
      <div class="column">
        <img src="house-0.png"  style="width:100%">
      </div>
    </div>
  </marquee>
    <!-- Contact Section -->
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-greyscale-max" style="width:100%;height:1000px;"></div>
            </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <!--        <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>-->
    </footer>

    <!-- Add Google Maps -->
    <script>
        //        function myMap() {
        //            myCenter = new google.maps.LatLng(1.3071, 36.8155);
        //            var mapOptions = {
        //                center: myCenter,
        //                zoom: 12,
        //                scrollwheel: false,
        //                draggable: false,
        //                mapTypeId: google.maps.MapTypeId.ROADMAP
        //            };
        //            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
        //            var marker = new google.maps.Marker({
        //                position: myCenter,
        //            });
        //            marker.setMap(map);
        //        }
        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->


</body>

</html>
