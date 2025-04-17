<?php
$title = "Données Bowling";
include 'inc/header.php';
include 'inc/nav.php';
include 'inc/key.php';
?>

<main>
    <h2>📊 Données du bowling</h2>

    <?php
    $total_joueurs = $connexion->query("SELECT COUNT(*) AS total FROM joueurs")->fetch_assoc()['total'];
    $total_pistes = $connexion->query("SELECT COUNT(*) AS total FROM pistes")->fetch_assoc()['total'];
    $total_resa = $connexion->query("SELECT COUNT(*) AS total FROM reservations")->fetch_assoc()['total'];
    ?>

    <section style="background-color:#eee; padding:1em; margin-bottom:1em;">
        <p><strong>Total de joueurs inscrits :</strong> <?= $total_joueurs ?></p>
        <p><strong>Nombre de pistes disponibles :</strong> <?= $total_pistes ?></p>
        <p><strong>Réservations enregistrées :</strong> <?= $total_resa ?></p>
    </section>

    <h3>📅 Détail des Réservations</h3>
    <table border="1" cellpadding="8" cellspacing="0">
        <thead style="background-color:#f2f2f2;">
            <tr>
                <th>Nom du joueur</th>
                <th>Piste</th>
                <th>Date</th>
                <th>Nombre de parties</th>
                <th>Accessibilité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT j.nom, j.prenom, p.numero AS piste, p.accessible, r.date, r.parties
                    FROM reservations r
                    JOIN joueurs j ON r.joueur_id = j.id
                    JOIN pistes p ON r.piste_id = p.id
                    ORDER BY r.date DESC";

            $result = $connexion->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['prenom']) . " " . htmlspecialchars($row['nom']) . "</td>";
                    echo "<td>Piste #" . $row['piste'] . "</td>";
                    echo "<td>" . date('d/m/Y', strtotime($row['date'])) . "</td>";
                    echo "<td>" . $row['parties'] . "</td>";
                    echo "<td>" . ($row['accessible'] ? "✅ Oui" : "❌ Non") . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Aucune réservation trouvée.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</main>

<?php include 'inc/footer.php'; ?>
