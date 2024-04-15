<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

    if (isset($_GET['id'])) {

        $bookId = $_GET['id'];

        if (
            isset($_POST['id'])
            && isset($_POST['name'])
            && isset($_POST['author'])
            && isset($_POST['page_number'])
            && isset($_POST['price'])
        ) {

            $id = $_POST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $pageNumber = $_POST['page_number'];
            $price = $_POST['price'];

            // Teksines reiksmes reikia buti idejus i viengumas kabutes kaip '$name'
            $sql = "UPDATE `knygos` SET `pavadinimas` = '$name', `puslapiu_skaicius` = $pageNumber, `kaina` = $price WHERE `id` = $id;";

            $respnse = $conn->query($sql);

            if ($respnse) {
                
                header('Location: ../knygos.php?edited=success');

            } else {
                echo 'Kažkas blogai. Pabandykite dar kartą.';
            }
        }



        $sql = "SELECT * FROM `knygos` WHERE `id` = $bookId";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $bookData = $result->fetch_assoc();
?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Atnaujinti knygą: <?php echo $bookData['pavadinimas']; ?></h1>
                        <p class="lead">Atnaujinkite pasirinktos knygos informaciją</p>
                    </div>
                </div>
            </div>
        </header>
        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <!-- <form action="atnaujinti.php?id=<?php echo $bookData['id']; ?>"> -->
                        <form method="POST">
                            <div class="mb-3 d-none">
                                <label for="idInput" class="form-label">Id</label>
                                <input type="number" class="form-control" id="idInput" value="<?php echo $bookData['id']; ?>" name='id'>
                            </div>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Knygos pavadinimas</label>
                                <input type="text" class="form-control" id="nameInput" value="<?php echo $bookData['pavadinimas']; ?>" name='name'>
                            </div>
                            <div class="mb-3">
                                <label for="authorInput" class="form-label">Autorius</label>
                                <input type="text" class="form-control" id="authorInput" value="Autorius toks ir toks" name='author'>
                            </div>
                            <!-- <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <input type="text" class="form-control" id="genreInput" value="Fantastika">
                            </div> -->
                            <div class="mb-3">
                                <label for="pagesInput" class="form-label">Puslapių sk.</label>
                                <input type="number" class="form-control" id="pagesInput" value="<?php echo $bookData['puslapiu_skaicius']; ?>" name='page_number'>
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Kaina, €</label>
                                <input type="text" class="form-control" id="priceInput" value="<?php echo $bookData['kaina']; ?>" name='price'>
                            </div>
                            <button type="submit" class="btn btn-success">Atnaujinti knygą</button>
                        </form>
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