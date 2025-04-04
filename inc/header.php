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
      echo 'bowling';
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
            Tournois de bowling
        </a>
      </h1>
      <form action="<?= ROOT ?>pages/recherche.php" method="get">
        <input
          type="search"
          name="recherche"
          id="recherche"
          placeholder="Recherche"
          maxlength="200"
        />
        <input type="image" src="<?= ROOT ?>images/loupe.svg" />
      </form>
</header>
