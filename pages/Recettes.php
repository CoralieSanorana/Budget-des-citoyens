
<?php
include("../inc/header.php");
$recete_int = get_all_recettes_fiscales_interieurs();
$recete_douane = get_all_recette_douaniere();
$recete_nonFisc = get_all_recette_nonFisc();
$Dons = get_all_Dons();
?>

<style>
    #total {
    background: linear-gradient(90deg, #2c3e50, #27ae60);
    color: white;
    font-weight: bold;
    text-align: center;
    transition: all 0.3s ease;
    }

    #total:hover {
        transform: scale(1.02);
        box-shadow: 0 0 10px rgba(39, 174, 96, 0.5);
    }
</style>

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
            <?php 
                $total_recettefiscale = get_total_Recettes("RecettesFiscalesInterieures"); 
            ?>
           <?php foreach($total_recettefiscale as $total){ ?>
                <tr id="total">
                    <td>Total</td>
                    <td><?= $total['total_2024'] ?></td>
                    <td><?= $total['total_2025'] ?></td>
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
           <?php $total_recettedouaniere = get_total_Recettes("RecettesDouanieres"); ?>
           <?php foreach($total_recettedouaniere as $total){ ?>
                <tr id="total">
                    <td>Total</td>
                    <td><?= $total['total_2024'] ?></td>
                    <td><?= $total['total_2025'] ?></td>
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
           <?php $total_recettedouaniere = get_total_Recettes("RecettesNonFiscales"); ?>
           <?php foreach($total_recettedouaniere as $total){ ?>
                <tr id="total">
                    <td>Total</td>
                    <td><?= $total['total_2024'] ?></td>
                    <td><?= $total['total_2025'] ?></td>
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
           <?php $total_recettedouaniere = get_total_Recettes("Dons"); ?>
           <?php foreach($total_recettedouaniere as $total){ ?>
                <tr id="total">
                    <td>Total</td>
                    <td><?= $total['total_2024'] ?></td>
                    <td><?= $total['total_2025'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>


</body>
</html>