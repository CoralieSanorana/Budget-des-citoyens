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
            <th>Agrégat_Macroéconomique</th>
            <th>2024</th>
            <th>2025</th>
            <th>2026</th>
        </tr>
        <?php foreach ($all_perspect_economiq as $perspect) { ?>
            <tr>
                <td><strong><?= $perspect['Agrégat_Macroéconomique']; ?></strong></td>
                <td><?= $perspect['2024']; ?></td>
                <td><?= $perspect['2025']; ?></td>
                <td><?= $perspect['2026']; ?></td>
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