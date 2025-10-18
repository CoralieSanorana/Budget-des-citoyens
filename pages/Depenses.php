<?php 
    include("../inc/functions.php");
    $depenses = get_all_depensesparnature();
?>
<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <div class="contenair">
        <section id="home">
            <header>
                <h2>Depenses Par Nature</h2>
            </header>
        
            <p>
                En 2025, les dépenses publiques atteignent 16 304,9 milliards
                d’ariary, dont 14 416,4 milliards d’Ariary pour le Budget Général
                hors opérations d’ordre et intérêts de la dette. 52,4% de ces dépenses 
                sont consacrés aux investissements et 14,1% aux dépenses
                de fonctionnement hors solde. Par rapport à 2024 (12 782,4 milliards
                d’ariary), cela représente une augmentation de 27,6%. Cette hausse
                est principalement due à la priorisation des investissements dans
                les secteurs sociaux de base, tels que la santé, l’éducation, l’énergie,
                l’eau et les infrastructures.
            </p>
            <p>
                <h2>1. Répartition des dépenses par nature économique</h2>
                <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                    <thead class="table-dark">
                        <tr>
                            <th><a href="#interetdette">Intérêts de la Dette (2024-2025)</a></th>
                            <th><a href="#soldeponsion">Dépenses de soldes et pensions</a></th>
                            <th><a href="#postebudgetaire">POSTES BUDGÉTAIRES AUTORISÉES POUR 2025</a></th>
                            <th><a href="#depensefonctionnement">Dépenses de fonctionnement</a></th>
                            <th><a href="#depenseinvestissement">Dépenses d’investissement</a></th>
                            <th><a href="#par_administration">Répartition des dépenses</a></th>
                        </tr>
                    </thead>
                </table>
            </p>
        
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>Rubriques</th>
                        <th>LF 2024 (En milliards d'Ariary)</th>
                        <th>LF 2025 (En milliards d'Ariary)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($depenses as $dep) { ?>
                        <tr>
                            <td><?= $dep['rubrique']; ?></td>
                            <td><?= $dep['montant_2024']; ?></td>
                            <td><?= $dep['montant_2025']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        
        <section id="interetdette">
            <?php 
            $interet_dette = get_all_InteretsDette();
            $labels = ['2024', '2025'];
            $dette_exterieure = [];
            $dette_interieure = [];
            
            foreach ($interet_dette as $row) {
                if ($row['type_dette'] == 'Intérêts de la dette extérieure') {
                    $dette_exterieure = [$row['montant_2024'], $row['montant_2025']];
                } elseif ($row['type_dette'] == 'Intérêts de la dette intérieure') {
                    $dette_interieure = [$row['montant_2024'], $row['montant_2025']];
                }
            }
            ?>
            <h3>a. Intérêts de la Dette (2024-2025)</h3>
            <canvas id="detteChart" width="400" height="200"></canvas>

            <script>
                const labels = <?php echo json_encode($labels); ?>;
                const detteExterieure = <?php echo json_encode($dette_exterieure); ?>;
                const detteInterieure = <?php echo json_encode($dette_interieure); ?>;
                
                // Configuration du diagramme
                const ctx = document.getElementById('detteChart').getContext('2d');
                new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [
                            {
                                label: 'Intérêts de la dette extérieure',
                                data: detteExterieure,
                                backgroundColor: '#36A2EB',
                                borderColor: '#36A2EB',
                                borderWidth: 1
                            },
                            {
                                label: 'Intérêts de la dette intérieure',
                                data: detteInterieure,
                                backgroundColor: '#FFCE56',
                                borderColor: '#FFCE56',
                                borderWidth: 1
                            }
                        ]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                title: {
                                    display: true,
                                    text: 'Montant (en millions)'
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: 'Année'
                                }
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Intérêts de la Dette par Type et Année'
                            },
                            legend: {
                                display: true,
                                position: 'top'
                            }
                        }
                    }
                });
            </script>
        </section>

        <section id="soldeponsion">
            <?php 
                $solde_pension = get_all_DepensesSoldesPensions();
            ?>
            <h3>b. Dépenses de soldes et pensions</h3>
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>LIBELLES</th>
                        <th>LF 2024 (En milliards d'Ariary)</th>
                        <th>LF 2025 (En milliards d'Ariary)</th>
                        <th>Écart</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($solde_pension as $pension) { ?>
                        <tr>
                            <td><?= $pension['libelle']; ?></td>
                            <td><?= $pension['montant_2024']; ?></td>
                            <td><?= $pension['montant_2025']; ?></td>
                            <td><?= $pension['ecart'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        
        <section id="postebudgetaire">
            <?php 
                $postes = get_all_PostesBudgetaires();
            ?>
            <h3>POSTES BUDGÉTAIRES AUTORISÉES POUR 2025</h3>
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>Ministère</th>
                        <th>Nombre de Postes</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($postes as $poste) { ?>
                        <tr>
                            <td><?= $poste['ministere']; ?></td>
                            <td><?= $poste['nombre_postes']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        
        <section id="depensefonctionnement">
            <?php 
                $depenses_fonctionnement = get_all_DepensesFonctionnement();
            ?>
            <h3>c. Dépenses de fonctionnement des administrations publiques (hors solde)</h3>
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>Categories</th>
                        <th>2024</th>
                        <th>2025</th>
                        <th>Ecart</th>
                        <th>Observation</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($depenses_fonctionnement as $poste) { ?>
                        <tr>
                            <td><?= $poste['categorie']; ?></td>
                            <td><?= $poste['montant_2024']; ?></td>
                            <td><?= $poste['montant_2025']; ?></td>
                            <td><?= $poste['ecart']; ?></td>
                            <td><?= $poste['observations']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        
        <section id="depenseinvestissement">
            <?php 
                $depenses_investissement = get_all_DepensesInvestissement();
            ?>
            <h3>d. Dépenses d’investissement</h3>
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>Source de finance</th>
                        <th>2024</th>
                        <th>2025</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($depenses_investissement as $dep_inv) { ?>
                        <tr>
                            <td><?= $dep_inv['source_financement']; ?></td>
                            <td><?= $dep_inv['montant_2024']; ?></td>
                            <td><?= $dep_inv['montant_2025']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
        
        <section id="par_administration">
            <?php 
                $par_admin = get_all_RepartitionDepensesAdministratif();
            ?>
            <h2>2. Répartition des dépenses selon leur rattachement administratif</h2>
            <table border="1" class="table table-striped table-hover align-middle text-center fs-5">
                <thead class="table-dark">
                    <tr>
                        <th>INSTITUTIONS / MINISTÈRES</th>
                        <th>LF 2024</th>
                        <th>LF 2025</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($par_admin as $admin) { ?>
                        <tr>
                            <td><?= $admin['institution_ministere']; ?></td>
                            <td><?= $admin['montant_2024']; ?></td>
                            <td><?= $admin['montant_2025']; ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>

</body>
</html>