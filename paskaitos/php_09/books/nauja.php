<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

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
                        <form>
                            <div class="mb-3">
                                <label for="nameInput" class="form-label">Knygos pavadinimas</label>
                                <input type="text" class="form-control" id="nameInput">
                            </div>
                            <div class="mb-3">
                                <label for="authorInput" class="form-label">Autorius</label>
                                <input type="text" class="form-control" id="authorInput">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <input type="text" class="form-control" id="genreInput">
                            </div> -->
                            <div class="mb-3">
                                <label for="pagesInput" class="form-label">Puslapių sk.</label>
                                <input type="number" class="form-control" id="pagesInput">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Kaina, €</label>
                                <input type="text" class="form-control" id="priceInput">
                            </div>
                            <button type="submit" class="btn btn-success">Sukurti knygą</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include 'parts/footer.php'; ?>
