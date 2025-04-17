<?php
define('TITLE', 'Classement Bowling');
include '../inc/header.php';
include 'nav.php';

?>

<main>
    <section>
        <h2>📋 Comment fonctionne le classement ?</h2>
        <p>Les joueurs sont classés selon leur score total cumulé lors des différents tournois.</p>
        <p>Le score est mis à jour automatiquement après chaque tournoi.</p>
    </section>

    <h2>🏅 Classement général</h2>
    <table border="1">
        <thead>
            <th>Rang</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Score</th>
            <th>Delete</th>
            <th>Update</th>
        </thead>
        <?php
        include "../inc/key.php";
        $sql = "SELECT * FROM joueur ORDER BY score_total DESC";
        $joueur = $connexion->query($sql);
        $i = 0;
        foreach ($joueur as $j): ?>
            <tbody>
                <td><?= $i++ ?></td>
                <td><?= $j['nom'] ?></td>
                <td><?= $j['prenom'] ?></td>
                <td><?= $j['score_total'] ?></td>
                <td>
                    <form action="delete_classement.php" method="post">
                        <input type="hidden" name="id" value="<?= $j["id"] ?>">
                        <input type="image" src="../images/close.svg" alt="SEO">
                    </form>
                </td>
                <td>
                    <form action="update_classement.php" method="post">
                        <input type="hidden" name="id" value="<?= $j["id"] ?>">
                        <input type="image" src="../images/modifier.svg" alt="SEO">
                    </form>
                </td>
            <?php endforeach; ?>
            </tbody>
    </table>
</main>

<?php include '../inc/footer.php'; ?>