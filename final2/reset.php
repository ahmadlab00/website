<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="all.css">
    <title>Reset Password - Supptopia</title>
    <link rel="shortcut icon" type="x-icon" href="./img/supptopia.png">

</head>
<body>
    <nav>
        <div class="navTop">
            <div class="navItem">
                <a href="mainin.php" style="color: white; text-decoration: none;"><h1>Supptopia.</h1></a>
            </div>
            
        </div>
    </nav>
    <div class="container">
        <div class="form-box">
            <h1>Reset Password</h1>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Database connection parameters
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "suptopia_users";

                // Create a connection
                $conn = new mysqli($servername, $username, $password, $database);

                // Check the connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Get user's email and new password from the form
                $email = $_POST["email"];
                $newPassword = password_hash($_POST["new_password"], PASSWORD_DEFAULT);

                // Update the user's password in the 'signup' table
                $update_password_query = "UPDATE signup SET password = ? WHERE email = ?";
                if ($stmt = $conn->prepare($update_password_query)) {
                    $stmt->bind_param("ss", $newPassword, $email);
                    if ($stmt->execute()) {
                        echo "<p>Password changed successfully</p>";
                        header("Location: mainout.php");
                        exit(); 
                    } else {
                        echo "<p>Error updating password: " . $stmt->error . "</p>";
                    }
                    $stmt->close();
                } else {
                    echo "<p>Error preparing statement: " . $conn->error . "</p>";
                }

                // Close the connection
                $conn->close();
            }
            ?>
             <form id="resetForm" method="post" action="">
                <div class="input-group">
                    <div class="input-field">
                        <input type="email" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="input-group">
                    <div class="input-field">
                        <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required>
                    </div>
                </div>
                <button id="submitBtn" type="submit" >Reset Password</button>
            </form>
           
        </div>
    </div>

    
    <footer>
        <div class="footerRight">
            <div class="footerRightMenu">
                <h1 class="fMenuTitle">Follow Us</h1>
                <div class="fIcons">
                <img src="./img/facebook.png" alt="" class="fIcon">
                    <a href="https://twitter.com/suptopia0">
                        <img src="./img/twitter.png" alt="" class="fIcon"></a>
                    <a href="https://www.instagram.com/suptopia__/">
                        <img src="./img/instagram.png" alt="https://www.instagram.com/suptopia__/" class="fIcon"></a>
                </div>
            </div>
            <div class="footerRightMenu">
                <span class="copyright">Supptopia company. All rights reserved. 2023.</span>
            </div>
        </div>
    </footer>
</body>
</html>
