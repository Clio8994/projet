<?php
define('TITLE', 'Classement Bowling');
include '../inc/header.php';
include '../inc/nav.php';

$joueurs = [
    ['nom' => 'Dupont', 'prenom' => 'Claire', 'score' => 278],
    ['nom' => 'Morel', 'prenom' => 'Julien', 'score' => 265],
    ['nom' => 'Nguyen', 'prenom' => 'Sophie', 'score' => 250],
    ['nom' => 'Rossi', 'prenom' => 'Luca', 'score' => 248],
    ['nom' => 'Legrand', 'prenom' => 'Emma', 'score' => 243],
];

usort($joueurs, fn($a, $b) => $b['score'] <=> $a['score']);
?>

<main>
    <section class="classement">
        <h1>🏅 Classement Bowling - Top Joueurs</h1>

        <table class="classement-table">
            <thead>
                <tr>
                    <th>Rang</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Score</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($joueurs as $i => $joueur): ?>
                    <tr>
                        <td><?= $i + 1 ?></td>
                        <td><?= htmlspecialchars($joueur['nom']) ?></td>
                        <td><?= htmlspecialchars($joueur['prenom']) ?></td>
                        <td><?= $joueur['score'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php include '../inc/footer.php'; ?>
