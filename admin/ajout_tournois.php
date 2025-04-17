<?php include '../inc/header.php'; ?>
<?php include '../inc/nav.php'; ?>

<main>
    <h2>Ajouter un tournoi</h2>
    <form action="insert.php" method="post">
        <p>Nom du tournoi</p>
        <input type="text" name="nom" required><br>

        <p>Date</p>
        <input type="date" name="date" required><br>

        <p>Lieu</p>
        <input type="text" name="lieu" required><br>

        <p>Description</p>
        <textarea name="description" rows="4" cols="50"></textarea><br>

        <input type="submit" value="Ajouter le tournoi">
    </form>
</main>

<?php include '../inc/footer.php'; ?>
