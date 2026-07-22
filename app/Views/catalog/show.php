<?php return ["body" => function ($opt) { ?>
    <?php $catalog = $opt["catalog"]; ?>

    <?php if (empty($catalog)) { ?>
        <div class="alert alert-warning" role="alert">
            Der Katalogeintrag wurde nicht gefunden.
        </div>
    <?php } else { ?>
        <div class="card w-100">
            <div class="card-header">
                <h1 class="h3 mb-0">Katalog #<?= (int) $catalog["catalog_id"] ?></h1>
            </div>

            <div class="row no-gutters mb-0">
                <div class="col-md-8 p-3 bg-white border-0">
                    <img
                        src="<?php $opt["generateResourceLink"]("assets/img/{$catalog['titlethumb']}"); ?>"
                        class="img-fluid w-100"
                        alt="Hauptbild von Katalog <?= (int) $catalog["catalog_id"] ?>">
                </div>

                <div class="col-md-4 p-3 bg-white border-0 d-flex flex-column">
                    <h2 class="h6 mb-3">Weitere Bilder</h2>

                    <div class="d-flex flex-wrap mx-n1 mb-3">
                        <?php for ($imageNumber = 1; $imageNumber <= 4; $imageNumber++) { ?>
                            <div class="w-50 px-1 mb-2">
                                <img
                                    src="<?php $opt["generateResourceLink"]("assets/img/{$catalog['titlethumb']}"); ?>"
                                    class="img-thumbnail w-100"
                                    alt="Vorschaubild <?= $imageNumber ?> von Katalog <?= (int) $catalog["catalog_id"] ?>">
                            </div>
                        <?php } ?>
                    </div>

                    <div class="mt-auto border-top pt-3">
                        <p class="h4 text-right mb-3">PREIS</p>

                        <div class="form-group mb-2">
                            <label for="catalog-quantity">Menge</label>
                            <select id="catalog-quantity" class="form-control">
                                <option>1</option>
                                <option>2</option>

                            </select>
                        </div>

                        <button type="button" class="btn btn-primary btn-block">
                            In den Warenkorb
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body border-top">
                <h2 class="h5 mb-3">Produktdaten</h2>

                <div class="table-responsive">
                    <table class="table table-bordered mb-0">
                        <tbody>
                            <tr>
                                <th scope="row">Katalog-ID</th>
                                <td><?= (int) $catalog["catalog_id"] ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Titelbild</th>
                                <td><?= e($catalog["titlethumb"]) ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Erstellt</th>
                                <td><?= e($catalog["created"]) ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } ?>
<?php }]; ?>