-- Item Ball
-- Hier sind alle Bälle gelistet. Die Tabelle kriegt "balltypische" Eigenschaften

CREATE TABLE `item_ball` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `name` VARCHAR(255) NOT NULL,
  `color` VARCHAR(100) DEFAULT NULL,
  `material` VARCHAR(100) DEFAULT NULL,
  `diameter` DECIMAL(6,2) DEFAULT NULL,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
