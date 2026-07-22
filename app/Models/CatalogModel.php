<?php

class CatalogModel extends z_model
{

    public function getAllCatalogs(): array
    {
        $sql = "SELECT * FROM `catalog` ORDER BY `id` ASC";
        return $this->exec($sql)->resultToArray();
    }

    public function getCatalogById($catalogId): array
    {
        $sql = "SELECT *, `catalog`.id AS catalog_id
            FROM `catalog`
            WHERE `catalog`.id = ?";

        return $this->exec($sql, "i", $catalogId)->resultToLine();
    }
}
