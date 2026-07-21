-- Categories can be nested.
-- parent_id = NULL marks a root category without a parent.

CREATE TABLE `category` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `parent_id` INT DEFAULT NULL,
  `name` VARCHAR(255) NOT NULL,

  CONSTRAINT `fk_category_parent`
    FOREIGN KEY (`parent_id`)
    REFERENCES `category` (`id`)
    ON DELETE SET NULL,

  KEY `idx_category_parent` (`parent_id`)
);
