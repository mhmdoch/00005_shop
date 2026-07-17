-- Item Shoe
-- Hier sind alle Schuhe gelistet. Die Tabelle kriegt "schuhtypische" Eigenschaften

CREATE TABLE `item_shoe` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `brand` VARCHAR(100) DEFAULT NULL,
  `model` VARCHAR(100) DEFAULT NULL,
  `color` VARCHAR(100) DEFAULT NULL,
  `size` DECIMAL(4,1) DEFAULT NULL,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
