<?php
    if(isset($_POST["submitButton"])) {
        
        $firstName = sanitizeFormString($_POST["firstName"]);

    }

    function sanitizeFormString($inputText) {
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        // $inputText = trim($inputText);
        $inputText = strtolower($inputText);
        $inputText = ucfirst($inputText);
        return $inputText;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to Cyrusinema</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img src="assets/images/cyrusinema-logo.png" title="logo" alt="Site logo">
                    <h3>Sign Up</h3>
                    <span>to continue to Cyrusinema</span>
                </div>

                <form method="POST">

                    <input type="text" name="firstName" placeholder="First name" required>

                    <input type="text" name="lastName" placeholder="Last name" required>

                    <input type="text" name="username" placeholder="Username" required>

                    <input type="email" name="email" placeholder="Email" required>

                    <input type="email" name="email2" placeholder="Confirm email" required>

                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>

            </div>

        </div>

    </body>
</html>