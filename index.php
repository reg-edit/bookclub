

<?php
    include_once 'header.php'
?>

        <section class="index-intro">
            <h1>Welcome to The Sexy Book Club</h1>
            <p>Didn't know it was called that? Well it is. It's on the internet now, there's literaly nothing I can do about it.</p>
        </section>
        <?php
        if (isset($_SESSION["useruid"])){
        echo "<section class'index-categories'>
                <h2>Categories</h2>
                <div class='index-categories-list'>
                    <div>
                        <h3>Suggest a book</h3>
                    </div>
                    <div>
                        <h3>Vote for a book</h3>
                    </div>
                    <div>
                        <h3>Choose your availability</h3>
                    </div>
                </div>
            </section>";
        }
        ?>
    </div>

<?php
    include_once 'footer.php'
?>