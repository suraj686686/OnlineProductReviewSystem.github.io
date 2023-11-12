<!DOCTYPE html>
<html lang="en">

<head>
  <title>category</title>
  <link rel="stylesheet" href="css/bootstrap_new.css">
  <link href="css/index.css" rel="stylesheet" />
  <link href="css/category.css" rel="stylesheet" />
  <link href="css/popover.css" rel="stylesheet" />
  <link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/header&footer.css">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" onload="Username()">
  <?php
  include('php/header.php');
  ?>

  <div class="contenta">


    <p class="title"> Category </p>

    <div class="group electronics">
      <label class="label" for="password"><a href="category_detail.html?id=1" target="_blank"
          class="line">Electronics</a></label>
    </div>

    <div class="group computers">
      <label class="label" for="password"><a href="category_detail.html?id=2" target="_blank"
          class="line">Computers</a></label>
    </div>

    <div class="group vadiogames">
      <label class="label" for="password"><a href="category_detail.html?id=3" target="_blank" class="line">video
          games</a></label>
    </div>

    <div class="group software">
      <label class="label" for="password"><a href="category_detail.html?id=4" target="_blank"
          class="line">Software</a></label>
    </div>

    <div class="group clothes">
      <label class="label" for="password"><a href="category_detail.html?id=5" target="_blank"
          class="line">Clothes</a></label>
    </div>



  </div>

  <!--footer-->
  <div class="footer">
    <div class="heading">
      <center>
        <h2>Online Product Review System</h2>
        <img src="images/logo.jpeg" alt="loading" height="250px" width="250px">
      </center>
    </div>
    <div class="content">
      <div class="services">
        <h4>Services</h4>
        <p><a href="#">Product Review</a></p>
        <p><a href="#">Shopping</a></p>
        <p><a href="#">Plans</a></p>
        <p><a href="#">Details</a></p>
      </div>
      <div class="social-media">
        <h4>Social</h4>
        <p>
          <a href="#"><i class="fab fa-linkedin"></i> Linkedin</a>
        </p>
        <p>
          <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
        </p>
        <p>
          <a href="https://www.facebook.com"><i class="fab fa-facebook"></i> Facebook</a>
        </p>
        <p>
          <a href="https://www.instagram.com"><i class="fab fa-instagram"></i> Instagram</a>
        </p>
      </div>
      <div class="links">
        <h4>Quick links</h4>
        <p><a href="#">Home</a></p>
        <p><a href="#">About</a></p>
        <p><a href="#">Top Product</a></p>
        <p><a href="#">Contact</a></p>
      </div>
      <div class="details">
        <h4 class="address">Address</h4>
        <p>
          #13/89,Phase 9 Industrial Area <br />
          Mohali,Punjab,India-160062
        </p>
        <h4 class="mobile">Mobile</h4>
        <p><a href="#">+91-6280560686</a></p>
        <h4 class="mail">Email</h4>
        <p><a href="#">info@suraj686.com</a></p>
      </div>
    </div>
    <footer>
      <hr />
      © 2023 Online Product Review System.
    </footer>
  </div>
  </div>
  <script src="js/footer_new.js" crossorigin="anonymous"></script>
  <script>
    let inputBox = document.querySelector(".input-box"),
      searchIcon = document.querySelector(".icon"),
      closeIcon = document.querySelector(".close-icon");
    searchIcon.addEventListener("click", () => inputBox.classList.add("open"));
    closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Get references to the content divs and the toggle button
      var loginContent = document.getElementById("loginContent");
      var menuContent = document.getElementById("menuContent");
      var toggleButton = document.getElementById("toggleButton");

      // Add a click event listener to the toggle button
      toggleButton.addEventListener("click", function () {
        // Toggle the visibility of the login and menu content
        if (loginContent.style.display === "block") {
          loginContent.style.display = "none";
          menuContent.style.display = "block";
        } else {
          loginContent.style.display = "block";
          menuContent.style.display = "none";
        }
      });
    });
  </script>
  </div>
</body>

</html>