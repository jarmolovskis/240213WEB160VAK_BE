<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

<?php

    $sql = "SELECT `knygos`.`id`, `pavadinimas`, `puslapiu_skaicius`, `kaina`, GROUP_CONCAT(CONCAT(`vardas`, ' ', `pavarde`) SEPARATOR ', ') AS 'autorius'
        FROM `knygos`
        JOIN `knygu_autoriai` ON `knygos`.`id` = `knygu_autoriai`.`knygos_id`
        JOIN `autoriai` ON `knygu_autoriai`.`autoriaus_id` = `autoriai`.`id`
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
        <div class="row">
            <div class="col">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Pavadinimas</th>
                            <th scope="col">Autorius</th>
                            <!-- <th scope="col">Žanras</th> -->
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
                                <td><?php echo $row['pavadinimas']; ?></td>
                                <td><?php echo $row['autorius']; ?></td>
                                <!-- <td>Stulpelis</td> -->
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
