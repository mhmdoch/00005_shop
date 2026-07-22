<?php return ["body" => function ($opt) { ?>
    <?php $loopHelpCounter = 0; ?>

    <div class="card-deck mb-4">
        <?php foreach ($opt["catalogs"] as $catalog) { ?>
            <?php $loopHelpCounter++; ?>

            <a href="<?= $opt["root"]; ?>catalog/show/<?= e($catalog["catalog_id"]) ?>" class="card text-dark text-decoration-none">
                <img src="<?php $opt["generateResourceLink"]("assets/img/{$catalog['titlethumb']}"); ?>" class="card-img-top" alt="<?= e($catalog["titlethumb"]) ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= e($catalog["name"]) ?></h5>
                    <p class="card-text">Produktbeschreibung ab <b><?= number_format(e($catalog["price"]), 2, ",", ".") ?>-</b> <?= e($catalog["currency"]) ?></p>
                </div>
            </a>

            <?php if ($loopHelpCounter % 3 === 0 && $loopHelpCounter < count($opt["catalogs"])) { ?>
    </div>
    <div class="card-deck mb-4">
    <?php } ?>
<?php } ?>

<?php $missingCards = (3 - ($loopHelpCounter % 3)) % 3; ?>

<?php for ($i = 0; $i < $missingCards; $i++) { ?>
    <div class="card invisible" aria-hidden="true"></div>
<?php } ?>
    </div>
<?php }]; ?>