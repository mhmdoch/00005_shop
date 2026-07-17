<?php

class ItemModel extends z_model
{

    public function getItems(): array
    {
        $sql = "SELECT * FROM `item`";
        return $this->exec($sql)->resultToArray();
    }
}
