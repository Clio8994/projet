<?php include '../inc/header.php';
include '../inc/nav.php'; ?>

<main>
    <form action="connect.php" method="post">
        <p>Email</p>
        <input type="email" name="email" id="email">
        <p>Mot de passe</p>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="S'inscrire">
    </form>
</main>

<?php include '../inc/form.php'; ?>
<?php include '../inc/footer.php'; ?>