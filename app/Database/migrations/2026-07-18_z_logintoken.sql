ALTER TABLE `z_logintoken`
  ADD COLUMN IF NOT EXISTS `extended_seconds` INT NULL DEFAULT NULL AFTER `userId_exec`,
  ADD COLUMN IF NOT EXISTS `active` TINYINT(1) NOT NULL DEFAULT 1 AFTER `extended_seconds`;
