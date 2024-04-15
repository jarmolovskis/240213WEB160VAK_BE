<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

if (
    isset($_POST['name'])
    && isset($_POST['author'])
    && isset($_POST['page_number'])
    && isset($_POST['price'])
) {

    $name = $_POST['name'];
    $author = $_POST['author'];
    $pageNumber = $_POST['page_number'];
    $price = $_POST['price'];

    // Teksines reiksmes reikia buti idejus i viengumas kabutes kaip '$name'
    $sql = "INSERT INTO `knygos` (`pavadinimas`, `puslapiu_skaicius`, `kaina`) VALUES ('$name', $pageNumber, $price);";

    $respnse = $conn->query($sql);

    if ($respnse) {
        
        header('Location: ../knygos.php?created=success');

    } else {
        echo 'Kažkas blogai. Pabandykite dar kartą.';
    }
}

?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Nauja knyga</h1>
                        <p class="lead">Sukurkite naują norimą knygą</p>
                    </div>
                </div>
            </div>
        </header>

        <div class="content pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form method="POST">
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Knygos pavadinimas</label>
                                <input type="text" class="form-control" id="nameInput" name="name">
                            </div>
                            <div class="mb-3">
                                <label for="authorInput" class="form-label">Autorius</label>
                                <input type="text" class="form-control" id="authorInput" name="author">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <input type="text" class="form-control" id="genreInput">
                            </div> -->
                            <div class="mb-3">
                                <label for="pagesInput" class="form-label">Puslapių sk.</label>
                                <input type="number" class="form-control" id="pagesInput" name="page_number">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Kaina, €</label>
                                <input type="text" class="form-control" id="priceInput" name="price">
                            </div>
                            <button type="submit" class="btn btn-success">Sukurti knygą</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include '../parts/footer.php'; ?>
