<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

    if (isset($_GET['id'])) {

        $bookId = $_GET['id'];

        if (isset($_GET['confirm']) && $_GET['confirm'] == 'true') {
            
            $sql = "DELETE FROM `knygos` WHERE `id` = $bookId;";

            $response = $conn->query($sql);

            if ($response) {
                header("Location: ../knygos.php?deleted=success");
            } else {
                echo 'Kažkass negerai. Pabandykite dar kartą.';
            }

        }

        $sql = "SELECT `pavadinimas` FROM `knygos` WHERE `id` = $bookId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $bookData = $result->fetch_assoc();

            $deleteUrl = "salinti.php?id=$bookId&confirm=true";
?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Knygos "<?php echo $bookData['pavadinimas']; ?>" šalinimas</h1>
                        <p class="lead">Knygos šalinimas</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p><strong>Ar tikrai norite šalinti šią knygą?</strong></p>
                        <p>
                            <a href="<?php echo $deleteUrl; ?>" class="btn btn-danger">Taip</a>
                            <a href="../knygos.php" class="btn btn-light">Ne</a>
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
                    <h1 class="display-1">Tokios knygos nėra</h1>
                    <a href="../knygos.php">Grįžti į knygų sąrašą</a>
                </div>
            </div>
        </div>
    </header>

<?php

}

?>

<?php include '../parts/footer.php'; ?>
