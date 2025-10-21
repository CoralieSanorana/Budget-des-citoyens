
<?php
include("../inc/header.php");
$recete_int = get_all_recettes_fiscales_interieurs();
$recete_douane = get_all_recette_douaniere();
$recete_nonFisc = get_all_recette_nonFisc();
$Dons = get_all_Dons();
?>

<div class="container mt-5">
    <h1 class="mb-4 text-center titre">Recettes</h1>
    <br>
    <h2 class="mb-4">Recettes Fiscales Interieurs (en milliard d'ariary)</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nature d'Impots</th>
                <th>LFR 2024</th>
                <th>LFR 2025</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recete_int as $recette) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($recette['nature_impot']); ?></strong></td>
                    <td><?= number_format($recette['montant_2024'], 1, ',', ' '); ?></td>
                    <td><?= number_format($recette['montant_2025'], 1, ',', ' '); ?></td>
                </tr>
           <?php } ?>
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <br>
    <h2 class="mb-4">Recettes douanieres (en milliard d'ariary)</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Nature des droits et taxes</th>
                <th>LFR 2024</th>
                <th>LFR 2025</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recete_douane as $recette) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($recette['nature_droit_taxe']); ?></strong></td>
                    <td><?= number_format($recette['montant_2024'], 1, ',', ' '); ?></td>
                    <td><?= number_format($recette['montant_2025'], 1, ',', ' '); ?></td>
                </tr>
           <?php } ?>
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <br>
    <h2 class="mb-4">Recettes non fiscales (en milliard d'ariary)</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Recettes non fiscales</th>
                <th>LFR 2024</th>
                <th>LFR 2025</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($recete_nonFisc as $recette) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($recette['categorie']); ?></strong></td>
                    <td><?= number_format($recette['montant_2024'], 1, ',', ' '); ?></td>
                    <td><?= number_format($recette['montant_2025'], 1, ',', ' '); ?></td>
                </tr>
           <?php } ?>
        </tbody>
    </table>
</div>

<div class="container mt-5">
    <br>
    <h2 class="mb-4">Dons (en milliard d'ariary)</h2>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Dons </th>
                <th>LFR 2024</th>
                <th>LFR 2025</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($Dons as $recette) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($recette['type_don']); ?></strong></td>
                    <td><?= number_format($recette['montant_2024'], 1, ',', ' '); ?></td>
                    <td><?= number_format($recette['montant_2025'], 1, ',', ' '); ?></td>
                </tr>
           <?php } ?>
        </tbody>
    </table>
</div>


</body>
</html>