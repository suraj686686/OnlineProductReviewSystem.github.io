<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/header&footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <nav>

        <div class="logo"><img src="images/logo.jpeg" alt="loading" height="80px" width="120px"
                style="border-radius: 50%;">
            <strong>Online Product Review System</strong>
        </div>

        <ul class="links">
            <li class="has-dropdown">

            <li><a href="index.php">HOME</a></li>
            <li><a href="aboutus.php" style=" line-height: 1; text-align: center;">ABOUT US</a></li>
            <li><a href="#Products">PRODUCT</a></li>

            <li><a href="category.php">CATEGORIES</a></li>
            <li><a href="contactus.php" style="line-height: 1; text-align: center;">CONTACT US</a></li>
            <li><a href="#search">
                    <span class="icon">
                        <i class="uil uil-search search-icon"></i>
                    </span>
                    <i class="uil uil-times close-icon"></i>
                </a></li>
                <li style="padding: 0px 30px;">
    <div id="menuContent">
        <div id="loginContent">
            <?php include 'inc/login.php'; ?>
        </div>
        <div id="menuContent">
            <?php include 'inc/menu.php'; ?>
        </div>
    </div>
</li>

        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    <script>
        // Get references to the input box, search icon, and close icon
        let inputBox = document.querySelector(".input-box");
        let searchIcon = document.querySelector(".icon");
        let closeIcon = document.querySelector(".close-icon");

        // Add a click event listener to the search icon
        searchIcon.addEventListener("click", () => inputBox.classList.add("open"));

        // Add a click event listener to the close icon
        closeIcon.addEventListener("click", () => inputBox.classList.remove("open"));

        document.addEventListener("DOMContentLoaded", function() {
    var loginContent = document.getElementById("loginContent");
    var menuContent = document.getElementById("menuContent");

    var toggleButton = document.getElementById("toggleButton");

    toggleButton.addEventListener("click", function () {
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



</body>

</html>