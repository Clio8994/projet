<aside>
    <form action="inscription.php" method="post">
        <p>Nom</p>
        <input type="text" name="nom" id="nom" required>
        <p>Prénom</p>
        <input type="text" name="prenom" id="prenom" required>
        <p>Âge</p>
        <input type="number" name="age" id="age" min="5" required>
        <p>Pseudo</p>
        <input type="text" name="pseudo" id="pseudo" required>
        <p>Email</p>
        <input type="email" name="email" id="email" required>
        <p>Mot de passe</p>
        <input type="password" name="mdp" id="mdp" required>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
</aside>