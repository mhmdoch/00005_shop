<?php use App\Helper\AppHelper; return ["layout" => function ($opt, $body, $head) { ?>
    <!doctype html>
    <html class="no-js">

    <head>
        <?php $opt["layout_essentials_head"]($opt); ?>

        <?php $head($opt); ?>


        <!-- Custom styles for this template -->
        <link href="<?php $opt["generateResourceLink"]("assets/css/app.css"); ?>" rel="stylesheet">
    </head>

    <body id="top" data-test="dashboard-top">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">daShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Willkommen <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Sport</a>
                                <a class="dropdown-item" href="#">Spielzeug</a>
                                <a class="dropdown-item" href="#">Bekleidung</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-md-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container py-5">
            <?php $body($opt); ?>
        </div>
        <?php $opt["layout_essentials_body"]($opt); ?>
    </body>

    </html>
<?php }]; ?>
