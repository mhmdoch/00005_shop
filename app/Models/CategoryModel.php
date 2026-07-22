<?php

class CategoryModel extends z_model
{




    public function getNavCategories(): array
    {
        $sql = "SELECT * FROM `category` WHERE parent_id IS NULL ORDER BY name ASC";
        return $this->exec($sql)->resultToArray();
    }
}
