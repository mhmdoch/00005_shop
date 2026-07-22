<?php

class CatalogController extends z_controller
{

    public function action_index(Request $req, Response $res)
    {

        $catalogs = $req->getModel("Catalog")->getAllCatalogs();



        return $res->render("catalog/index", [
            "catalogs" => $catalogs,
        ]);
    }
}
