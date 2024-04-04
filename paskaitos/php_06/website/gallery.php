<?php include 'header.php' ?>

    <div>
        <img src="<?php echo randomImageUrl(500, 250); ?>" alt="">
        <h2>Galerija</h2>

        <?php

            for ($i = 0; $i < 20; $i++) {

                $imageUrl = randomImageUrl();

                echo "<img src='$imageUrl' alt=''>";
            }
        ?>

    </div>

<?php include 'footer.php'; ?>