-- Required by the framework's current user handling.
ALTER TABLE `z_user`
  ADD COLUMN IF NOT EXISTS `active` TINYINT(1) NOT NULL DEFAULT 1 AFTER `verified`,
  ADD COLUMN IF NOT EXISTS `updated` TIMESTAMP DEFAULT CURRENT_TIMESTAMP() ON UPDATE CURRENT_TIMESTAMP() AFTER `active`,
  MODIFY COLUMN `email` VARCHAR(255) NULL,
  ADD UNIQUE KEY IF NOT EXISTS `uq_user_email` (`email`);
