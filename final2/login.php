<?php
session_start();
include("database.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Use prepared statements to prevent SQL injection
    $signinSql = "SELECT email, password FROM `signin` WHERE email = ?";
    $stmt = $conn->prepare($signinSql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $storedPassword = $row["password"];

        // Verify the password using password_verify
        if (password_verify($password, $storedPassword)) {
            // Password is correct, set a session and redirect
            $_SESSION["email"] = $email;
            $_SESSION["isAuthenticated"] = true; // Set the isAuthenticated session variable to true
            header("Location: mainout.php"); // Redirect to main.php
            exit();
        } else {
            // Password is incorrect
            $error_message = "Incorrect password!";
        }
    } else {
        // User doesn't exist in the signin table, check the signup table
        $signupSql = "SELECT email, password FROM `signup` WHERE email = ?";
        $stmt = $conn->prepare($signupSql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $storedPassword = $row["password"];

            // Verify the password using password_verify
            if (password_verify($password, $storedPassword)) {
                // Password is correct, set a session and redirect
                $_SESSION["email"] = $email;
                $_SESSION["isAuthenticated"] = true; // Set the isAuthenticated session variable to true
                header("Location: mainout.php");
                exit(); // Add this line
            } else {
                // Password is incorrect
                $error_message = "Incorrect password!";
            }
        } else {
            // User doesn't exist in the signup table
            $error_message = "User not found or not signed up!";
        }
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Supptopia</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <link rel="shortcut icon" type="x-icon" href="./img/supptopia.png">

</head>
<body>
    <nav>
        <div class="navTop">
            <div class="navItem">
                <a href="mainin.php" style="color: white; text-decoration: none;"><h1>Supptopia.</h1></a>
            </div>
            <div class="sign-up-button">
                <a href="signup.php" style="color: white; text-decoration: none;">Sign Up</a>
            </div>
        </div>
    </nav>
    
    <div class="container">
    <div class="form-box">
        <h1 id="title">Sign in</h1>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Email">
            </div>
            <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" name="password" placeholder="Password">
            </div>
           
            <button type="submit" id="submitBtn">Enter</button>
        </form>
        <?php
        if (isset($error_message)) {
            echo '<p class="error-message">' . $error_message . '</p>';
        }
        ?>
        <p class="additional-info">Lost password? <span><a href="reset.php">Click Here!</a></span></p>
    </div>
</div>

    
    <footer>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                <img src="./img/facebook.png" alt="" class="fIcon">
                    <a href="https://twitter.com/suptopia0"><img src="./img/twitter.png" alt="" class="fIcon"></a>
                    <a href="https://www.instagram.com/suptopia__/"><img src="./img/instagram.png" alt="https://www.instagram.com/suptopia__/" class="fIcon"></a>
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Supptopia company. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
</body>
</html>