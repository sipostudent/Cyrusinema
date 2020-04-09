<?php
    if(isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Cyrusinema</title>
    <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
</head>
<body> 
    <div class="signInContainer">

        <div class="column">

            <div class="header">
                <h3>Sign Up</h3>
                <span>to continue to Cyrusinema</span>
            </div>

            <form method="POST">

                <input type="text" name="firstName" placeholder="First name" required>

                <input type="text" name="lastName" placeholder="Last name" required>

                <input type="text" name="userName" placeholder="User name" required>

                <input type="email" name="email" placeholder="Email" required>

                <input type="email" name="email2" placeholder="Confirm email" required>

                <input type="password" name="password" placeholder="Password" required>

                <input type="password2" name="password2" placeholder="Confirm password" required>

                <input type="submit" name="submitButton" value="  SUBMIT">
            
            </form>

        </div>

    </div>
</body>
</html>