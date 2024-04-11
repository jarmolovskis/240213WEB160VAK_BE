<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

    $bookId = $_GET['id'];

    $sql = "SELECT * FROM `knygos` WHERE `id` = $bookId";
    $result = $conn->query($sql);

    $bookData = $result->fetch_assoc();

?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos "<?php echo $bookData['pavadinimas']; ?>" informacija</h1>
                        <p class="lead">Informacija apie knygą</p>
                    </div>
                </div>
            </div>
        </header>

        

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><strong>Knygos pavadinimas: </strong> <?php echo $bookData['pavadinimas']; ?></p>
                        <p><strong>Autorius: </strong> Kol kas palikim</p>
                        <p><strong>Puslapių sk.: </strong> <?php echo $bookData['puslapiu_skaicius']; ?></p>
                        <p><strong>Kaina: </strong> <?php echo $bookData['kaina']; ?> €</p>
                        <p>
                            <a href="<?php echo $linksBaseDir; ?>/books/atnaujinti.php" class="btn btn-warning">Atnaujinti</a>
                            <a href="<?php echo $linksBaseDir; ?>/books/salinti.php" class="btn btn-danger">Šalinti</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

<?php include '../parts/footer.php'; ?>
