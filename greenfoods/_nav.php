<?php
    require_once 'bdd/connexionBdd.php';
    require 'panier/panier.class.php';
    $panier = new panier($mysqli);