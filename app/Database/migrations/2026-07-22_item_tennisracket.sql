-- Item Tennisracket
-- Hier stehen die tennisschlägerspezifischen Eigenschaften.
-- Der sichtbare Produktname liegt im zugehörigen Catalog-Eintrag.

CREATE TABLE `item_tennisracket` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `brand` VARCHAR(100) NOT NULL,
  `model` VARCHAR(100) NOT NULL,
  `material` VARCHAR(100) DEFAULT NULL,
  `weight` DECIMAL(6,2) DEFAULT NULL,
  `head_size` DECIMAL(7,2) DEFAULT NULL,
  `grip_size` VARCHAR(20) DEFAULT NULL,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
