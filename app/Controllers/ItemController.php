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

    public function action_indexball(Request $req, Response $res)
    {
        $balls = $req->getModel("Item")->getItemBalls();

        return $res->render("item/showball", [
            "ball" => $balls
        ]);
    }


    public function action_showball(Request $req, Response $res)
    {
        $ballId = $req->getParameters(0, 1);
        $ball = $req->getModel("Item")->getItemBallById($ballId);


        return $res->render("item/showball", [
            "ball" => $ball
        ]);
    }
}
