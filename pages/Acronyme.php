<?php
include('../inc/header.php');
$acro = get_all_acronyme();
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center">Liste des Acronymes</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($acro as $a) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($a['acronyme']); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($a['definition']); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>
