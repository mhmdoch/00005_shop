<?php

class ItemController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {
        $examples = "test";

        return $res->render("item/index", [
            "examples" => $examples,
        ]);
    }
}
