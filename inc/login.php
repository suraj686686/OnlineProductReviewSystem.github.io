<div class="col-sm-3">
    <button type="button" id="rateProduct" class="btn btn-info  <?php if (!empty($_SESSION['userid']) && $_SESSION['userid']) {
        echo 'login';
    } ?>">Login</button>
</div>
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <button class="btn btn-primary" style="color:white;">
                <li><a href="index.php" title="Back to tutorial page">Back</a></li>
            </button>
            <h1>Login to rate this product</h1><br>
            <div style="display:none;" id="loginError" class="alert alert-danger">Invalid username/Password</div>
            <form method="post" id="loginForm" name="loginForm">
                <input type="text" name="user" placeholder="Username" required>
                <input type="password" name="pass" placeholder="Password" required>
                <input type="hidden" name="action" value="userLogin">
                <input type="submit" name="login" class="login loginmodal-submit" value="Login" id="toggleButton">
            </form>
            <div class="login-help">
                <button class="btn btn-primary" style="color: white;" id="openModalButton">Register</button>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <button class="btn btn-primary" style="color:white;">
                <li><a href="index.php" title="Back to tutorial page">Back</a></li>
            </button>
            <h1>Create an Account</h1><br>
            <div style="display:none;" id="registerError" class="alert alert-danger">Registration failed. Please try
                again later.</div>
            <form method="post" id="registerForm" name="registerForm">
                <input type="text" name="name" placeholder="Full Name" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="email" name="remail" placeholder="E-Mail" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="password" name="rpassword" placeholder="Password" minlength="5" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="password" name="cpassword" placeholder="Confirm Password" minlength="5" required
                    style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

                <input type="hidden" name="action" value="userRegister">

                <input type="submit" name="register" class="login loginmodal-submit" value="Register"
                    style="background-color: #3498db; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">

            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById("openModalButton").addEventListener("click", function () {
        $("#registerModal").modal("show");
    });
</script>
<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'productrate';

// Establish a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$avatarImages = [
    'image/userpics/user1.jpg',
    'image/userpics/user2.jpg',
    'image/userpics/user2.jpg',
    'image/userpics/user3.jpg',
    'image/userpics/user4.jpg',
    'image/userpics/user5.jpg',
    'image/userpics/user6.jpg',
    'image/userpics/profile.jpg',

];
$randomIndex = array_rand($avatarImages);
$randomAvatar = $avatarImages[$randomIndex];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate and sanitize user input
    $name = $conn->real_escape_string($_POST['name']);
    $username = $conn->real_escape_string($_POST['remail']);
    $password = intval($_POST['rpassword']);

    $insertUserSQL = "INSERT INTO item_users (name, username, password, avatar) VALUES ('$name', '$username', '$password', '$randomAvatar')";

    if ($conn->query($insertUserSQL) === TRUE) {
        echo '<div class="alert alert-success"><script>alert("Registration successful.");</script></div>';
    } else {
        echo '<div class="alert alert-danger"><script>aRegistration failed. Please try again later.</script></div>';
    }
}

// Close the database connection
$conn->close();
?>
</div>
