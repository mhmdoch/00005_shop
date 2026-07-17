-- Permissions assigned directly to individual users.
CREATE TABLE IF NOT EXISTS `z_user_permission` (
  `id` INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `user` INT NOT NULL,
  `name` VARCHAR(255) NOT NULL,
  `active` TINYINT(1) NOT NULL DEFAULT 1,
  `created` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP()
);
