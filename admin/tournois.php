<<?php
    include '../inc/header.php';
    include 'nav.php';
    ?>
    <main>
    <section>
        <p>Format et règles
        <p>Chaque équipe joue 2 parties lors de la phase de qualification.</p>

        Les 4 meilleures équipes (score cumulé) accèdent à la finale.

        En finale, chaque joueur joue 1 partie : le score total de l'équipe détermine le classement final.

        En cas d'égalité : départage avec une frame décisive par capitaine d'équipe.

        Matériel fourni sur place (boules et chaussures).


    </section>
    <table border="1">
        <thead>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Description</th>
            <th>Update</th>
            <th>Delete</th>
            <th>Add</th>
        </thead>
        <?php
        include "../inc/key.php";
        $sql = "SELECT * FROM tournois ORDER BY date DESC";
        $tournois = $connexion->query($sql);
        foreach ($tournois as $b):
        ?>
            <tbody>
                <td><?= $b["nom"]; ?></td>
                <td><?= $b["date"]; ?></td>
                <td><?= $b["lieu"]; ?></td>
                <td><?= $b["description"]; ?></td>
                <td>
                    <form action="update.php" method="post">
                        <input type="hidden" name="id" value="<?= $b["id"] ?>">
                        <input type="image" src="../images/modifier.svg" alt="SEO">
                    </form>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="image" src="../images/close.svg" alt="SEO">
                        <input type="hidden" name="id" value="<?= $b["id"] ?>">
                    </form>
                </td>
                <td>
                    <form action="ajout_tournois.php" method="post">
                        <input type="image" src="../images/add.svg" alt="SEO">
                        <input type="hidden" name="id" value="<?= $b["id"] ?>">
                    </form>
                </td>
            </tbody>
        <?php endforeach; ?>
    </table>

    </main>
    <?php include '../inc/footer.php'; ?>