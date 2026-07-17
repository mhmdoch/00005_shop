<?php

class CatalogController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {
        $examples = "test";

        return $res->render("catalog/index", [
            "examples" => $examples,
        ]);
    }
}
