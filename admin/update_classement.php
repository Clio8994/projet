<?php
include '../inc/header.php';
include 'nav.php';   
?>
<main>
    <form action="modif_joueur.php" method="post">
        <?php
        include "../inc/key.php";

        $id = $_POST['id']; 
        $sql = "SELECT * FROM joueur WHERE id = $id";
        $joueurs = $connexion->query($sql);

        foreach ($joueurs as $j):
        ?>
            <p>Nom</p>
            <input type="text" name="nom" id="nom" value="<?= $j['nom'] ?>"><br>

            <p>Prénom</p>
            <input type="text" name="prenom" id="prenom" value="<?= $j['prenom'] ?>"><br>

            <p>Score total</p>
            <input type="number" name="score_total" id="score_total" value="<?= $j['score_total'] ?>"><br>

            <input type="hidden" name="id" value="<?= $j['id'] ?>">
            <input type="submit" value="Modifier">
        <?php endforeach; ?>
    </form>
</main>
<?php include '../inc/footer.php'; ?>
