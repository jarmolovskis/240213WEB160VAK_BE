<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

    if (isset($_GET['id'])) {

        $bookId = $_GET['id'];

        $sql = "SELECT *
            FROM `knygos`
            JOIN `knygu_autoriai` ON `knygu_autoriai`.`knygos_id` = `knygos`.`id`
            JOIN `autoriai` ON `autoriai`.`id` = `knygu_autoriai`.`autoriaus_id`
            WHERE `knygos`.`id` = $bookId";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $bookData = $result->fetch_all(MYSQLI_ASSOC);

            // print_r($bookData);
            // $bookData = $result->fetch_assoc();

            $updateUrl = "$linksBaseDir/books/atnaujinti.php?id=$bookId";
            $deleteUrl = "$linksBaseDir/books/salinti.php?id=$bookId";
?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos "<?php echo $bookData[0]['pavadinimas']; ?>" informacija</h1>
                        <p class="lead">Informacija apie knygą</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><strong>Knygos pavadinimas: </strong> <?php echo $bookData[0]['pavadinimas']; ?></p>

                        <?php
                        
                            foreach ($bookData as $index => $singleBookData) {

                                if (count($bookData) > 1) {
                                    $authorLabel = 'Autorius ' . ++$index;
                                } else {
                                    $authorLabel = 'Autorius';
                                }
                        
                        ?>

                            <p><strong><?php echo $authorLabel; ?>: </strong> <?php echo $singleBookData['vardas'] . ' ' . $singleBookData['pavarde']; ?></p>

                        <?php } ?>

                        <p><strong>Puslapių sk.: </strong> <?php echo $bookData[0]['puslapiu_skaicius']; ?></p>
                        <p><strong>Kaina: </strong> <?php echo $bookData[0]['kaina']; ?> €</p>
                        <p>
                            <a href="<?php echo $updateUrl; ?>" class="btn btn-warning">Atnaujinti</a>
                            <a href="<?php echo $deleteUrl; ?>" class="btn btn-danger">Šalinti</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php

        } else {

            // Jeigu tokio id duomenų bazėje neradome (pvz.: 999), nukreipiam vartotoją į knygos.php failą
            // header("Location: ../knygos.php");

            $notFound = true;

        }

    } else {

        // Jeigu id parametro nuorodoje iš viso nėra, nukreipiam vartotoją į knygos.php failą
        // header("Location: ../knygos.php");

        $notFound = true;

    }


    if (isset($notFound) && $notFound == true) {

?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knyga nerasta</h1>
                        <a href="../knygos.php">Grįžti į knygų sąrašą</a>
                    </div>
                </div>
            </div>
        </header>

<?php

    }

?>

<?php include '../parts/footer.php'; ?>
