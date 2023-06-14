<?php
    include_once 'header.php'
?>

<body>
    
    <div class="wrapper">

        <section class="index-intro">
            <h1>Welcome to The Sexy Book Club</h1>
            <p>Didn't know it was called that? Well it is. It's on the internet now, there's literaly nothing I can do about it.</p>
        </section>

        <section class="index-categories">
            <h2>Profile Page</h2>
            <p>
            <?php 
                $welcome = "Hi there, user: ";
                echo $welcome; 
                echo $_SESSION["useruid"]
            ?>
            </p>

        </section>
    </div>

</body>
</html>
<script src="js/script.js"></script> 