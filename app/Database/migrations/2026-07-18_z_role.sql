-- Roles can also act as groups in the framework's current permission system.
ALTER TABLE `z_role`
  ADD COLUMN IF NOT EXISTS `is_group` TINYINT(1) NOT NULL DEFAULT 0 AFTER `name`,
  MODIFY COLUMN `name` VARCHAR(255) NOT NULL DEFAULT '',
  ADD UNIQUE KEY IF NOT EXISTS `uq_role_name` (`name`);
