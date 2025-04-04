<<?php
include '../inc/header.php';
include '../inc/nav.php';   

$host = 'localhost';
$dbname = 'bowling_db';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $date = $_POST['date'];
    $lieu = $_POST['lieu'];
    $participants = (int)$_POST['participants'];
    $stmt = $pdo->prepare("INSERT INTO tournois (nom, date, lieu, participants) VALUES (?, ?, ?, ?)");
    $stmt->execute([$nom, $date, $lieu, $participants]);
    header("Location: tournois.php");
    exit();
}
$query = $pdo->query("SELECT * FROM tournois ORDER BY date DESC");
$tournois = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tournois</title>
    <link rel="stylesheet" href="<?= BASE ?>style.css">
<main>
    <h1>Liste des Tournois</h1>
    
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Date</th>
            <th>Lieu</th>
            <th>Participants</th>
        </tr>
        <?php foreach ($tournois as $t): ?>
        <tr>
            <td><?= htmlspecialchars($t['nom']) ?></td>
            <td><?= date('d/m/Y', strtotime($t['date'])) ?></td>
            <td><?= htmlspecialchars($t['lieu']) ?></td>
            <td><?= (int)$t['participants'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Ajouter un tournoi</h2>
<form method="post">
        <label>Nom : <input type="text" name="nom" required></label><br>
        <label>Date : <input type="date" name="date" required></label><br>
        <label>Lieu : <input type="text" name="lieu" required></label><br>
        <label>Participants : <input type="number" name="participants" min="1" required></label><br>
        <input type="submit" value="Ajouter">
    </form>
</main>
<?php include '../inc/footer.php'; ?> 
?