<?php return ["body" => function ($opt) { ?>
    <?php $loopHelpCounter = 0; ?>

    <div class="card-deck mb-4">
        <?php foreach ($opt["catalogs"] as $catalog) { ?>
            <?php $loopHelpCounter += 1; ?>

            <div class="card">
                <img src="<?php $opt["generateResourceLink"]("assets/img/{$catalog['titlethumb']}"); ?>" class="card-img-top" alt="<?= e($catalog["titlethumb"]) ?>">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div>

            <?php if ($loopHelpCounter % 3 === 0 && $loopHelpCounter < count($opt["catalogs"])) { ?>
    </div>
    <div class="card-deck mb-4">
    <?php } ?>
<?php } ?>
    </div>
<?php }]; ?>