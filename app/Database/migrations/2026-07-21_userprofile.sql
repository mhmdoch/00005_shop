CREATE TABLE `userprofile` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `user_id` INT NOT NULL,
  `first_name` VARCHAR(255) NOT NULL,
  `last_name` VARCHAR(255) NOT NULL,
  `birthday` DATE NOT NULL,

  CONSTRAINT `fk_userprofile_user`
    FOREIGN KEY (`user_id`)
    REFERENCES `z_user` (`id`)
    ON DELETE CASCADE,

  UNIQUE KEY `uq_userprofile_user` (`user_id`)
);
