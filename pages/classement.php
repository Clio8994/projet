<?php
define('TITLE', 'Classement Bowling');
include '../inc/header.php';
include '../inc/nav.php';
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
            <tr>
                <th>Rang</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "../inc/key.php";
            $sql = "SELECT * FROM joueur ORDER BY score_total DESC";
            $joueur = $connexion->query($sql);
            $i = 0;
            foreach ($joueur as $j): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $j['nom'] ?></td>
                    <td><?= $j['prenom'] ?></td>
                    <td><?= $j['score_total'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</main>
<?php include '../inc/form.php'; ?>
<?php include '../inc/footer.php'; ?>