<<?php
    include '../inc/header.php';
    include '../inc/nav.php';
    ?>
    <main>
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
                <td><?= $b["Nom"]; ?></td>
                <td><?= $b["Date"]; ?></td>
                <td><?= $b["Lieu"]; ?></td>
                <td><?= $b["Description"]; ?></td>
            </tbody>
        <?php endforeach; ?>
    </table>
    
    </main>
    <?php include '../inc/form.php'; ?>
    <?php include '../inc/footer.php'; ?>