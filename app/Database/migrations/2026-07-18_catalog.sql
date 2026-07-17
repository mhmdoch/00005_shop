-- Catalog ist das eigentlich im Shop gelistete Item.

CREATE TABLE `catalog` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `enabled` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
