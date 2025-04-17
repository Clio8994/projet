<?php
include '../inc/header.php';
include '../inc/nav.php';   
?>
<main>
    <form action="modif.php" method="post">
        <?php
        include "../inc/key.php";

        $id = $_POST['id']; 
        $sql = "SELECT * FROM tournois WHERE id = $id";
        $tournois = $connexion->query($sql);

        foreach ($tournois as $t):
        ?>
            <p>Nom du tournoi</p>
            <input type="text" name="nom" id="nom" value="<?= $t['nom'] ?>"><br>

            <p>Date</p>
            <input type="date" name="date" id="date" value="<?= $t['date'] ?>"><br>

            <p>Lieu</p>
            <input type="text" name="lieu" id="lieu" value="<?= $t['lieu'] ?>"><br>

            <p>Description</p>
            <textarea name="description" id="description" rows="4" cols="50"><?= $t['description'] ?></textarea><br>

            <input type="hidden" name="id" value="<?= $t['id'] ?>">
            <input type="submit" value="Modifier">
        <?php endforeach; ?>
    </form>

</main>
    <?php include '../inc/footer.php'; ?>
