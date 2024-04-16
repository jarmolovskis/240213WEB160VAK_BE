<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

<?php

    $filtrationQuery = "";

    if (isset($_GET['genre']) && $_GET['genre'] != 0) {

        $genreId = $_GET['genre'];

        $filtrationQuery = "WHERE `zanrai`.`id` = $genreId";
    }

    $sql = "SELECT
        `knygos`.`id`,
        `knygos`.`pavadinimas` AS 'knygos_pavadinimas',
        `puslapiu_skaicius`,
        `kaina`,
        GROUP_CONCAT(CONCAT(`vardas`, ' ', `pavarde`) SEPARATOR ', ') AS 'autorius',
        `zanrai`.`pavadinimas` AS 'zanro_pavadinimas'
        FROM `knygos`
        LEFT JOIN `knygu_autoriai` ON `knygos`.`id` = `knygu_autoriai`.`knygos_id`
        LEFT JOIN `autoriai` ON `knygu_autoriai`.`autoriaus_id` = `autoriai`.`id`
        JOIN `zanrai` ON `zanrai`.`id` = `knygos`.`zanro_id`
        $filtrationQuery
        GROUP BY `knygos`.`id`;";
        
    $result = $conn->query($sql);

?>

<header class="bg-light text-dark pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-1">Knygos</h1>
                <p class="lead">Visos suvestos knygos</p>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col">
            <?php

                if (isset($_GET['edited']) && $_GET['edited'] == 'success') {
                    echo '<p class="text-success">Knygos duomenys atnaujinti sėkmingai.</p>';
                }

                if (isset($_GET['created']) && $_GET['created'] == 'success') {
                    echo '<p class="text-success">Nauja knyga pridėta sėkmingai.</p>';
                }

                if (isset($_GET['deleted']) && $_GET['deleted'] == 'success') {
                    echo '<p class="text-danger">Knyga sėkmingai pašalinta.</p>';
                }

            ?>
        </div>
    </div>
</div>

<div class="content pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="books/nauja.php" class="btn btn-success">Nauja knyga</a></p>
            </div>
        </div>

        <?php

            $sql = "SELECT * FROM `zanrai`;";
            $genreResult = $conn->query($sql);

            if ($genreResult->num_rows > 0) {

        ?>

        <div class="row">
            <div class="col">
                <form>
                    <select name="genre" id="genreInput">
                        <option value="0" selected>Pasirinkite žanrą:</option>
                        
                        <?php while ($zanras = $genreResult->fetch_assoc()) { ?>

                            <option value="<?php echo $zanras['id']; ?>"><?php echo $zanras['pavadinimas']; ?></option>

                        <?php } ?>

                    </select>
                    <button type="submit" class="btn btn-secondary">Filtruoti</button>
                </form>
            </div>
        </div>

        <?php } ?>



        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pavadinimas</th>
                            <th scope="col">Autorius</th>
                            <th scope="col">Žanras</th>
                            <th scope="col">Puslapių sk.</th>
                            <th scope="col">Kaina, €</th>
                            <th scope="col">Veiksmai</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                            
                        ?>

                            <tr>
                                <td scope="row"><?php echo $row['id']; ?></td>
                                <td><?php echo $row['knygos_pavadinimas']; ?></td>
                                <td><?php echo $row['autorius']; ?></td>
                                <td><?php echo $row['zanro_pavadinimas']; ?></td>
                                <td><?php echo $row['puslapiu_skaicius']; ?></td>
                                <td><?php echo $row['kaina']; ?></td>
                                <td>
                                    <a href="books/perziureti.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Žiūrėti</a>
                                    <a href="books/atnaujinti.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Atnaujinti</a>
                                    <a href="books/salinti.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Šalinti</a>
                                </td>
                            </tr>

                        <?php
                                }
                            } else {
                        ?>

                            <tr>
                                <td class="text-center" colspan='6'>Deja, bet duomenų neturime.</td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'parts/footer.php'; ?>
