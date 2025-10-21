<?php
include('../inc/header.php');

// Récupération des données depuis la base
$conn = dbconnect();
$sql = "SELECT type_financement, montant FROM DeficitBudgetaire";
$result = mysqli_query($conn, $sql);

$labels = [];
$montants = [];

while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['type_financement'];
    $montants[] = $row['montant'];
}
?>
    <style>
        body {
            background: linear-gradient(135deg, #eaf2f8, #d1f2eb);
            font-family: "Poppins", Arial, sans-serif;
            text-align: center;
            padding: 40px;
        }

        h1 {
            color: #2c3e50;
            text-transform: uppercase;
            margin-bottom: 30px;
            letter-spacing: 1px;
        }

        .chart-container {
            width: 500px;
            margin: 0 auto;
            background: #fff;
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        }

        canvas {
            max-width: 100%;
            height: auto;
        }
    </style>

<body>
    <div class="contenair">
        <h1>Répartition du déficit budgétaire</h1>

        <div class="chart-container">
            <canvas id="deficitChart"></canvas>
        </div>

        <script>
            const ctx = document.getElementById('deficitChart');

            const data = {
                labels: <?= json_encode($labels) ?>,
                datasets: [{
                    label: 'Montant (en milliards MGA)',
                    data: <?= json_encode($montants) ?>,
                    backgroundColor: [
                        '#3498db', // bleu
                        '#2ecc71', // vert
                        '#f1c40f'  // jaune
                    ],
                    borderColor: '#fff',
                    borderWidth: 2,
                    hoverOffset: 15
                }]
            };

            const config = {
                type: 'pie',
                data: data,
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                color: '#2c3e50',
                                font: { size: 14 }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: (tooltipItem) => {
                                    return tooltipItem.label + ': ' + tooltipItem.formattedValue + ' milliards MGA';
                                }
                            }
                        },
                        title: {
                            display: true,
                            text: 'Répartition du financement',
                            color: '#2c3e50',
                            font: { size: 16, weight: 'bold' }
                        }
                    }
                }
            };

            new Chart(ctx, config);
        </script>
    </div>
</body>
</html>
