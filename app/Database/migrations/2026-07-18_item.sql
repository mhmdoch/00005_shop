-- Jedes Item besteht verlinkt zu einem spezifischem Item.
-- Hier werden die Preise etc festgelegt und ob das Item aktiv ist

CREATE TABLE `item` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `catalog_id` INT NOT NULL,
  `itemable_type` VARCHAR(50) NOT NULL,
  `itemable_id` INT NOT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  `price` DECIMAL(10,2) NOT NULL,
  `currency` CHAR(3) NOT NULL DEFAULT 'EUR',
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),

  CONSTRAINT `fk_item_catalog`
    FOREIGN KEY (`catalog_id`)
    REFERENCES `catalog` (`id`)
    ON DELETE RESTRICT,

  KEY `idx_item_catalog_active` (`catalog_id`, `active`),
  KEY `idx_itemable` (`itemable_type`, `itemable_id`)
);
