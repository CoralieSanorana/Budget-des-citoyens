<?php
include('../inc/header.php');
$gloss = get_all_glossaire();
?>

<div class="container mt-5">
    <h1 class="mb-4 text-center titre">Liste des Glossaire</h1>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($gloss as $a) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($a['terme']); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($a['definition']); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>