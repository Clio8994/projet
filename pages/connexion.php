<?php include '../inc/header.php';
include '../inc/nav.php'; ?>

<main>
    <form action="login.php" method="post">
        <h1>Page de connexion</h1><br><br>
        <p>Email</p>
        <input type="email" name="email" id="email">
        <p>Mot de passe</p>
        <input type="password" name="mdp" id="mdp">
        <input type="submit" value="S'inscrire">
    </form>
</main>

<?php include '../inc/form.php'; ?>
<?php include '../inc/footer.php'; ?>