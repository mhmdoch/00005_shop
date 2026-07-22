<?php

class ItemModel extends z_model
{

    public function getItems(): array
    {
        $sql = "SELECT * FROM `item`";
        return $this->exec($sql)->resultToArray();
    }

    public function getItemBalls(): array
    {
        $sql = "SELECT * FROM `item_ball`";
        return $this->exec($sql)->resultToArray();
    }

    public function getItemBallById($id): array
    {
        $sql = "SELECT * FROM `item_ball`";
        return $this->exec($sql)->resultToArray();
    }
}
