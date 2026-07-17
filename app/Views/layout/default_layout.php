<?php return ["layout" => function ($opt, $body, $head) { ?>
    <!doctype html>
    <html class="no-js">

    <head>
        <?php $opt["layout_essentials_head"]($opt); ?>
        <?php $head($opt); ?>


        <!-- Custom styles for this template -->
        <link href="<?php $opt["generateResourceLink"]("assets/css/app.css"); ?>" rel="stylesheet">
    </head>

    <body id="top" data-test="dashboard-top">
        <div class="container py-5">
            <?php $body($opt); ?>
        </div>
        <?php $opt["layout_essentials_body"]($opt); ?>
    </body>

    </html>
<?php }]; ?>