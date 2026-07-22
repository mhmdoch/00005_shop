<?php

class CatalogModel extends z_model
{

    public function getAllCatalogs(): array
    {
        $sql = "SELECT * FROM `catalog` ORDER BY `id` ASC";
        return $this->exec($sql)->resultToArray();
    }
}
