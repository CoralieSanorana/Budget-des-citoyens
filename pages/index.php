<?php include("../inc/header.php") ?>

<style>
    body {
        background-image: url("../images/back2.png");
        background-size: cover;         
        background-repeat: no-repeat;   
        background-position: center;    
        background-attachment: fixed;   
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.85); 
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        max-width: 700px;
        margin: 80px auto;
    }

    .list-group-item {
        background-color: rgba(255, 255, 255, 0.9);
        border: none;
        border-radius: 8px;
        margin-bottom: 10px;
        transition: 0.3s;
    }

    .list-group-item:hover {
        background-color: #3498db;
        color: white;
        transform: scale(1.03);
    }
</style>

<div class="container mt-5">
    <h1 class="mb-4 text-center titre">Tableaux de données</h1>

    <div class="list-group">
        <a href="Perspectives_economiques.php" class="list-group-item list-group-item-action">Perspectives Économiques</a>
        <a href="Recettes.php" class="list-group-item list-group-item-action">Recettes</a>
        <a href="Depenses.php" class="list-group-item list-group-item-action">Dépenses</a>
        <a href="Deficit_budgetaire.php" class="list-group-item list-group-item-action">Déficit Budgétaire</a>
        <a href="Disp_douan.php" class="list-group-item list-group-item-action">Dispositions Douanières</a>
        <a href="Acronyme.php" class="list-group-item list-group-item-action">Acronymes</a>
    </div>
</div>

</body>
</html>
