<?php
include('connexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>

   <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BUDGET DES CITOYENS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Perspectives_economiques.php">Perspectives Économiques</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Recettes.php">Recettes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Depenses.php">Dépenses</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Deficit_budgetaire.php">Déficit Budgétaire</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Disp_douan.php">Dispositions Douanières</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="../pages/Acronyme.php">Acronymes</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
