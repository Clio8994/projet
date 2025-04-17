<<?php
    include '../inc/header.php';
    include '../inc/nav.php';
    ?>
    <main>
        <section>
            <p>📋 Format et règles
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
        </thead>
        <?php
        include "../inc/key.php";
        $sql = "SELECT * FROM tournois";
        $book = $connexion->query($sql);
        foreach ($book as $b):
        ?>
            <tbody>
                <td><?= $b["nom"]; ?></td>
                <td><?= $b["date"]; ?></td>
                <td><?= $b["lieu"]; ?></td>
                <td><?= $b["description"]; ?></td>
            </tbody>
        <?php endforeach; ?>
    </table>
    
    </main>
    <?php include '../inc/form.php'; ?>
    <?php include '../inc/footer.php'; ?>