-- Catalog ist das eigentlich im Shop gelistete Item.

CREATE TABLE `catalog` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `enabled` TINYINT(1) NOT NULL DEFAULT 1,
  `titlethumb` VARCHAR(255) DEFAULT NULL, 
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
