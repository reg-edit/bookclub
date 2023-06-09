<?php
    include_once 'header.php'
?>


<section class="signup-form">
    <h2>Sign Up</h2>
    <div class="signup-form-form">
        <form action="includes/signup.inc.php" method="post">
            <input type="text" name="name" placeholder="Full name...">
            <input type="text" name="email" placeholder="Email...">
            <input type="text" name="uid" placeholder="Username...">
            <input type="password" name="pwd" placeholder="Password...">
            <input type="password" name="pwdRepeat" placeholder="Repeat password...">
            <button type="submit" name="submit">Sign Up</button>

        </form>
    </div>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_get["error"] == "invaliduid") {
            echo "<p>Username should contain only alphanumericals!</p>";
        }
        else if ($_get["error"] == "invalidemail") {
            echo "<p>Enter valid email address! </p>";
        }
        else if ($_get["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match! </p>";
        }
        else if ($_get["error"] == "usernametaken") {
            echo "<p>Username already exists! </p>";
        }
        else if ($_get["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again! </p>";
        }
        else if ($_get["error"] == "none") {
            echo "<p>You have signed up! </p>";
        }   

    }


    ?>
</section>




<?php
    include_once 'footer.php'
?>