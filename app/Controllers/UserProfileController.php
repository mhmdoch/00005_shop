<?php

class UserProfileController extends z_controller
{
    public function action_index(Request $req, Response $res)
    {
        $req->checkPermission("userprofile.index");

        $profiles = $req->getModel("UserProfile")->getProfiles();

        return $res->render("userprofile/index", [
            "profiles" => $profiles,
        ]);
    }
}
