<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

        <header class="bg-light text-dark pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class="display-1">Atnaujinti knygą: pavadinimas</h1>
                        <p class="lead">Atnaujinkite pasirinktos knygos informaciją</p>
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
                                <input type="text" class="form-control" id="nameInput" value="Pavadinimas">
                            </div>
                            <div class="mb-3">
                                <label for="authorInput" class="form-label">Autorius</label>
                                <input type="text" class="form-control" id="authorInput" value="Autorius toks ir toks">
                            </div>
                            <!-- <div class="mb-3">
                                <label for="genreInput" class="form-label">Žanras</label>
                                <input type="text" class="form-control" id="genreInput" value="Fantastika">
                            </div> -->
                            <div class="mb-3">
                                <label for="pagesInput" class="form-label">Puslapių sk.</label>
                                <input type="number" class="form-control" id="pagesInput" value="250">
                            </div>
                            <div class="mb-3">
                                <label for="priceInput" class="form-label">Kaina, €</label>
                                <input type="text" class="form-control" id="priceInput" value="20">
                            </div>
                            <button type="submit" class="btn btn-success">Atnaujinti knygą</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include 'parts/footer.php'; ?>