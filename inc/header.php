<?php 

define('ROOT', '/B1CS2/projet/');
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <title><?php
    if(isset($title)){
      echo $title;
    } else {
      echo 'Chez les Quilles dansantes';
    }
    ?></title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= ROOT ?>css/style.css" />
    <link rel="stylesheet" href="<?= ROOT ?>css/mobile.css" />
  </head>
  <body>
<header>
      <h1>
        <a href="<?= ROOT ?>">
            <img src="<?= ROOT ?>images/logo.svg" alt="logo" >
            Chez les Quilles Dansantes
        </a>
      </h1>
      <a href="<?= ROOT ?>pages/connexion.php" class="connexion">Se connecter</a>
      </form>
</header>
