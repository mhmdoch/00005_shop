<?php

class CatalogModel extends z_model
{

    public function getAllCatalogs(): array
    {
        $sql = "SELECT
                `catalog`.*,
                `catalog`.`id` AS `catalog_id`,
                `item`.`price`,
                `item`.`currency`
            FROM `catalog`
            LEFT JOIN `item`
                ON `item`.`id` = (
                    SELECT `cheapest_item`.`id`
                    FROM `item` AS `cheapest_item`
                    WHERE `cheapest_item`.`catalog_id` = `catalog`.`id`
                        AND `cheapest_item`.`active` = 1
                    ORDER BY `cheapest_item`.`price` ASC, `cheapest_item`.`id` DESC
                    LIMIT 1
                )
            ORDER BY `catalog`.`id` ASC";

        return $this->exec($sql)->resultToArray();
    }

    public function getCatalogById($catalogId): array
    {
        $sql = "SELECT
            `catalog`.*,
            `catalog`.`id` AS `catalog_id`,
            `item`.`price`,
            `item`.`currency`
        FROM `catalog`
        LEFT JOIN `item`
            ON `item`.`catalog_id` = `catalog`.`id`
            AND `item`.`active` = 1
        WHERE `catalog`.`id` = ?
        ORDER BY `item`.`price` ASC, `item`.`id` DESC
        LIMIT 1";

        return $this->exec($sql, "i", $catalogId)->resultToLine();
    }
}
