<?php

use App\Helper\AppHelper;

return ["layout" => function ($opt, $body, $head) { ?>
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
                <a class="navbar-brand" href="/">daShop</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample07">
                    <ul class="navbar-nav mr-auto">
                        <li class='nav-item <?= \App\Helper\AppHelper::navClass($opt["request"]->store["menuCategory"], "") ?>'>
                            <a class="nav-link" href="/">Willkommen <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown  <?= \App\Helper\AppHelper::navClass($opt["request"]->store["menuCategory"], "catalog") ?>">
                            <a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Katalog</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown07">
                                <a class="dropdown-item" href="/catalog">Alle Produkte</a>
                                <?php foreach ($opt["request"]->store["sideBarElements"] ?? [] as $category) { ?>

                                    <a class="dropdown-item" href="#"><?= e($category["name"]) ?></a>

                                <?php } ?>
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
                    <div class="my-2 my-md-0 login-form-top">
                        <?php if ($opt["user"]->isLoggedIn) : ?>
                            <span class="text-right">
                                <?= e($opt["user"]->fields["email"]) ?>
                                -
                                <a href="<?= $opt["root"] ?>login/logout">Logout</a>
                            </span>
                        <?php else : ?>
                            <div id="login-error-label" data-test="error"></div>
                            <div class="login-fields">
                                <input type="email" id="username" data-test="username">
                                <input type="password" id="password" data-test="password">
                                <button id="btnLogin" data-test="btn-login">Login</button>
                            </div>
                            <div class="login-links">
                                <a href="<?= $opt["root"]; ?>login/signup">Registrieren</a>
                                -
                                <a href="<?= $opt["root"]; ?>login/forgot-password">Passwort vergessen?</a>
                            </div>
                            <script>
                                function login() {
                                    Z.Presets.Login("username", "password", "login-error-label");
                                }

                                $("#btnLogin").click(() => {
                                    login();
                                });

                                $("#username, #password").keyup((e) => {
                                    if (e.keyCode == 13) login();
                                });
                            </script>
                        <?php endif; ?>
                    </div>
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