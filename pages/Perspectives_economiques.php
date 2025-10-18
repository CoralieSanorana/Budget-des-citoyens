<?php 
    include("../inc/header.php");
    $all_perspect_economiq = get_all_perspect_economiq();
    $taux_croissance_sectorielle = get_all_taux_croissance_sectorielle();
?>
   <div class="container mt-5">
    <header class="mb-3">
        <h2>Perspectives Économiques</h2>
    </header>

    <p>
        Les grands agrégats macroéconomiques sont présentés dans le tableau ci-après :
    </p>
    
    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Agrégat Macroéconomique</th>
                <th>2024</th>
                <th>2025</th>
                <th>2026</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_perspect_economiq as $perspect) { ?>
                <tr>
                    <td><strong><?= htmlspecialchars($perspect['Agrégat_Macroéconomique']); ?></strong></td>
                    <td><?= number_format($perspect['2024'], 1, ',', ' '); ?></td>
                    <td><?= number_format($perspect['2025'], 1, ',', ' '); ?></td>
                    <td><?= number_format($perspect['2026'], 1, ',', ' '); ?></td>
                </tr>
           <?php } ?>
        </tbody>
    </table>

    <header class="mt-5 mb-3">
        <h2>Taux de croissance sectorielle</h2>
    </header>

    <p>
        En 2025, l’économie malgache devrait connaître une croissance de 5,0%, soutenue par des performances solides dans plusieurs secteurs stratégiques :
    </p>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Secteur</th>
                <th>2024</th>
                <th>2025</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taux_croissance_sectorielle as $taux) { ?>
                <tr>
                    <td><?= htmlspecialchars($taux['secteur']); ?></td>
                    <td><?= number_format($taux['taux_croissance_2024'], 1, ',', ' '); ?>%</td>
                    <td><?= number_format($taux['taux_croissance_2025'], 1, ',', ' '); ?>%</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

</body>
</html>