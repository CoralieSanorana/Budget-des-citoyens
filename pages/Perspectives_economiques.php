<!DOCTYPE html>
<?php 
    include("../inc/functions.php");
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perspectives Econimmiques</title>
</head>
<?php 
    $all_perspect_economiq = get_all_perspect_economiq();
    $taux_croissance_sectorielle = get_all_taux_croissance_sectorielle();
?>
<body>
    <header>
        <h2>Perspectives Economiques</h2>
    </header>

    <p>
        Les grands agrégats macroéconomiques sont présentés dans le tableau
        ci-après :
    </p>
    
    <table border="1">
        <tr>
            <th>ANNEES</th>
            <th>PIB nominal (milliards d’Ariary)</th>
            <th>Taux de croissance économique</th>
            <th>Indice des prix à la consommation (fin de période)</th>
            <th>Ratio de dépenses publiques (% PIB)</th>
            <th>Solde global (base caisse)</th>
            <th>Solde primaire (base caisse)</th>
            <th>Dollars/Ariary</th>
            <th>Euro/Ariary</th>
            <th>Public</th>
            <th>Privé</th>
            <th>Taux de pression fiscale (% PIB)</th>
        </tr>
        <?php foreach ($all_perspect_economiq as $perspect) { ?>
            <tr>
                <td><strong><?= $perspect['annee']; ?></strong></td>
                <td><?= $perspect['pib_nominal']; ?></td>
                <td><?= $perspect['taux_croissance']; ?></td>
                <td><?= $perspect['indice_prix_consommation']; ?></td>
                <td><?= $perspect['ratio_depenses_publiques_pib']; ?></td>
                <td><?= $perspect['solde_global_base_caisse']; ?></td>
                <td><?= $perspect['solde_primaire_base_caisse']; ?></td>
                <td><?= $perspect['taux_change_dollar_ariary']; ?></td>
                <td><?= $perspect['taux_change_euro_ariary']; ?></td>
                <td><?= $perspect['taux_investissement_public_pib']; ?></td>
                <td><?= $perspect['taux_investissement_prive_pib']; ?></td>
                <td><?= $perspect['taux_pression_fiscale_pib']; ?></td>
            </tr>
       <?php } ?>
    </table>

    <header>
        <h2>Taux de croissance sectorielle</h2>
    </header>

    <p>
        En 2025, l’économie malgache devrait connaître une croissance
        de 5,0%, soutenue par des performances solides dans plusieurs
        secteurs stratégiques :
    </p>

    <table border="1">
        <tr>
            <th>Secteur</th>
            <th>2024</th>
            <th>2025</th>
        </tr>
        <?php foreach ($taux_croissance_sectorielle as $taux) { ?>
            <tr>
                <td><?= $taux['secteur']; ?></td>
                <td><?= $taux['taux_croissance_2024']; ?></td>
                <td><?= $taux['taux_croissance_2025']; ?></td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>