-- Allow file sizes greater than the signed INT range.
ALTER TABLE `z_file`
  MODIFY COLUMN `size` BIGINT NOT NULL;
