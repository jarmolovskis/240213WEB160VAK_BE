<?php include 'parts/header.php'; ?>
<?php include 'parts/navbar.php'; ?>

<?php

    $sql = 'SELECT * FROM `knygos`;';
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

<div class="content pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <p><a href="nauja.html" class="btn btn-success">Nauja knyga</a></p>
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
                                <td>Autorius (susitvarkysim kiek vėliau)</td>
                                <!-- <td>Stulpelis</td> -->
                                <td><?php echo $row['puslapiu_skaicius']; ?></td>
                                <td><?php echo $row['kaina']; ?></td>
                                <td>
                                    <a href="books/perziureti.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Žiūrėti</a>
                                    <a href="<?php echo $linksBaseDir; ?>/books/atnaujinti.php" class="btn btn-warning">Atnaujinti</a>
                                    <a href="<?php echo $linksBaseDir; ?>/books/salinti.php" class="btn btn-danger">Šalinti</a>
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
