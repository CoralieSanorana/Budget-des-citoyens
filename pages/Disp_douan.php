<?php
include('../inc/header.php');
$gloss = get_all_disp_douan();
?>

<div class="container mt-5">
    <h2 class="mb-4 text-center titre">Extraits de disposition fiscales et douanieres</h2>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <?php foreach ($gloss as $a) { ?>
            <div class="col">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title"><?= htmlspecialchars($a['type_impot']); ?></h5>
                        <p class="card-text"><?= htmlspecialchars($a['description']); ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</body>
</html>