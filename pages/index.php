<?php 
include("../inc/header.php");
$depense_total = get_total_depense();
$recette_total = get_total_recette();
?>

<div class="container mt-5">
    <h1 class="mb-4 text-center titre">Tableaux de données</h1>

    <div class="grid-links">
        <div class="link-card">
            <a href="Perspectives_economiques.php">Perspectives Économiques</a>
        </div>
        <div class="link-card">
            <a href="Recettes.php">Recettes</a>
            <p>
                Total 2025: <?= $recette_total[0]['montant_2025']; ?>
            </p>
        </div>
        <div class="link-card">
            <a href="Depenses.php">Dépenses</a>
            <p>
                Total 2025: <?= $depense_total[0]['montant_2025']; ?>
            </p>
        </div>
        <div class="link-card">
            <a href="Deficit_budgetaire.php">Déficit Budgétaire</a>
        </div>
        <div class="link-card">
            <a href="Disp_douan.php">Dispositions Douanières</a>
        </div>
        <div class="link-card">
            <a href="Acronyme.php">Acronymes</a>
        </div>
    </div>
</div>

</body>
</html>
