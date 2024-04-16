<?php include '../parts/header.php'; ?>
<?php include '../parts/navbar.php'; ?>

<?php

if (
    isset($_POST['name'])
    && isset($_POST['author_name'])
    && isset($_POST['author_surname'])
    && isset($_POST['page_number'])
    && isset($_POST['price'])
    && isset($_POST['genre'])
) {

    $name = $_POST['name'];
    $authorName = $_POST['author_name'];
    $authorSurname = $_POST['author_surname'];
    $pageNumber = $_POST['page_number'];
    $price = $_POST['price'];
    $genre_id = $_POST['genre'];


    $sql = "SELECT * FROM `autoriai` WHERE `vardas` = '$authorName' AND `pavarde` = '$authorSurname';";
    $authorResult = $conn->query($sql);

    if ($authorResult->num_rows > 0) {

        $authorId = $authorResult->fetch_assoc()['id'];

    } else {

        $sql = "INSERT INTO `autoriai` (`vardas`, `pavarde`) VALUES ('$authorName', '$authorSurname')";
        $authorCreateResult = $conn->query($sql);

        if ($authorCreateResult) {

            $authorId = $conn->insert_id;

        } else {

            $authorId = null;
        }
    }


    // Teksines reiksmes reikia buti idejus i viengumas kabutes kaip '$name'
    $sql = "INSERT INTO `knygos` (`pavadinimas`, `puslapiu_skaicius`, `kaina`, `zanro_id`)
        VALUES ('$name', $pageNumber, $price, $genre_id);";
    $bookCreateResponse = $conn->query($sql);

    $relationshipCreateResponse = false;

    if ($authorId != null ) {

        $newBookId = $conn->insert_id;

        $sql = "INSERT INTO `knygu_autoriai` (`knygos_id`, `autoriaus_id`) VALUES ($newBookId, $authorId);";
        $relationshipCreateResponse = $conn->query($sql);
    }

    if ($bookCreateResponse && $relationshipCreateResponse) {
        
        header('Location: ../knygos.php?created=success');

    } else {

        echo 'Kažkas blogai. Pabandykite dar kartą.';
    }
}


$sql = "SELECT * FROM `zanrai`;";
$result = $conn->query($sql);

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
                                <label for="authorNameInput" class="form-label">Autoriaus Vardas</label>
                                <input type="text" class="form-control" id="authorNameInput" name="author_name">
                            </div>
                            <div class="mb-3">
                                <label for="authorSurnameInput" class="form-label">Autoriaus pavardė</label>
                                <input type="text" class="form-control" id="authorSurnameInput" name="author_surname">
                            </div>

                            <?php if ($result->num_rows > 0) { ?>

                            <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <select class="form-select" name="genre">
                                    <option selected>Pasirinkite žanrą:</option>

                                    <?php while ($zanras = $result->fetch_assoc()) { ?>

                                        <option value="<?php echo $zanras['id']; ?>"><?php echo $zanras['pavadinimas']; ?></option>
                                    
                                    <?php } ?>

                                </select>
                            </div>

                            <?php } ?>

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
