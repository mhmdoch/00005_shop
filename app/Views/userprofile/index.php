<?php return ["body" => function ($opt) { ?>
    <h1>User profile</h1>

    <?php if (empty($opt["profiles"])) { ?>
        <p>keine profile aktuell</p>
    <?php } else { ?>
        <?php foreach ($opt["profiles"] as $profile) { ?>
            <dl>
                <dt>First name</dt>
                <dd><?= e($profile["first_name"]) ?></dd>

                <dt>Last name</dt>
                <dd><?= e($profile["last_name"]) ?></dd>

                <dt>Birthday</dt>
                <dd><?= e($profile["birthday"]) ?></dd>
            </dl>
        <?php } ?>
    <?php } ?>
<?php }]; ?>