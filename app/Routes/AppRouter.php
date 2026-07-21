<?php

use ZubZet\Framework\Routing\Route;

Route::get("/userprofile", [UserProfileController::class, "action_index"])
    ->middleware([GeneralController::class, "sidebar"]);

Route::group("", function () {})
    ->middleware([GeneralController::class, "sidebar"]);
