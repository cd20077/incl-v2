
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

-- ---------------------------------------------------------------------
-- auth_level_status
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `auth_level_status`;

CREATE TABLE `auth_level_status`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `name` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- file
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `file`;

CREATE TABLE `file`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `origin_name` VARCHAR(255),
    `encrypt_name` VARCHAR(255),
    `size` INTEGER DEFAULT 0,
    `user_id` INTEGER,
    `group_id` INTEGER,
    `file_type` VARCHAR(255),
    `parent_directory_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `user_id` (`user_id`),
    INDEX `group_id` (`group_id`),
    INDEX `parent_directory_id` (`parent_directory_id`),
    CONSTRAINT `file_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`),
    CONSTRAINT `file_FK_2`
        FOREIGN KEY (`group_id`)
        REFERENCES `group` (`id`),
    CONSTRAINT `file_FK_3`
        FOREIGN KEY (`parent_directory_id`)
        REFERENCES `file` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- group
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `name` VARCHAR(255),
    `maxcapa` INTEGER DEFAULT 209715200,
    `precapa` INTEGER DEFAULT 0,
    `backimg` VARCHAR(255),
    `ranid` VARCHAR(255),
    `user_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `user_id` (`user_id`),
    CONSTRAINT `group_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- group_member
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `group_member`;

CREATE TABLE `group_member`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `user_id` INTEGER,
    `group_id` INTEGER,
    `auth_level_status_id` INTEGER DEFAULT 1,
    PRIMARY KEY (`id`),
    INDEX `user_id` (`user_id`),
    INDEX `group_id` (`group_id`),
    INDEX `auth_level_status_id` (`auth_level_status_id`),
    CONSTRAINT `group_member_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`),
    CONSTRAINT `group_member_FK_2`
        FOREIGN KEY (`group_id`)
        REFERENCES `group` (`id`),
    CONSTRAINT `group_member_FK_3`
        FOREIGN KEY (`auth_level_status_id`)
        REFERENCES `auth_level_status` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- mail
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `mail`;

CREATE TABLE `mail`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `title` VARCHAR(255),
    `text` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- send_mail_status
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `send_mail_status`;

CREATE TABLE `send_mail_status`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `name` TEXT,
    `snum` TEXT,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- send_mails
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `send_mails`;

CREATE TABLE `send_mails`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `title` VARCHAR(255),
    `name` TEXT,
    `from_name` TEXT,
    `to_name` TEXT,
    `to_address` TEXT,
    `subject` TEXT,
    `body` TEXT,
    `group_code` TEXT,
    `from_address` TEXT,
    `finish_dt` DATETIME,
    `result` TINYINT(1),
    `send_date` DATE,
    `send_time` TIME,
    `fw_to` TEXT,
    `server_ip` TEXT,
    `server_name` TEXT,
    `send_mail_status_id` BIGINT DEFAULT 1,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `name` VARCHAR(255),
    `mail` VARCHAR(255),
    `password` VARCHAR(255),
    `userimg` VARCHAR(255),
    `backimg` VARCHAR(255),
    `maxcapa` INTEGER DEFAULT 209715200,
    `precapa` INTEGER DEFAULT 0,
    `user_status_id` INTEGER DEFAULT 1,
    `randnum` VARCHAR(255),
    `randid` VARCHAR(255),
    `langid` INTEGER DEFAULT 1,
    PRIMARY KEY (`id`),
    INDEX `user_status_id` (`user_status_id`),
    CONSTRAINT `user_FK_1`
        FOREIGN KEY (`user_status_id`)
        REFERENCES `user_status` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user_log
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_log`;

CREATE TABLE `user_log`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `title` VARCHAR(255),
    `user_id` INTEGER,
    `group_id` INTEGER,
    PRIMARY KEY (`id`),
    INDEX `user_id` (`user_id`),
    INDEX `group_id` (`group_id`),
    CONSTRAINT `user_log_FK_1`
        FOREIGN KEY (`user_id`)
        REFERENCES `user` (`id`),
    CONSTRAINT `user_log_FK_2`
        FOREIGN KEY (`group_id`)
        REFERENCES `group` (`id`)
) ENGINE=InnoDB;

-- ---------------------------------------------------------------------
-- user_status
-- ---------------------------------------------------------------------

DROP TABLE IF EXISTS `user_status`;

CREATE TABLE `user_status`
(
    `id` INTEGER NOT NULL AUTO_INCREMENT,
    `is_deleted` TINYINT DEFAULT 0 NOT NULL,
    `updated_at` DATETIME,
    `deleted_at` DATETIME,
    `created_at` DATETIME NOT NULL,
    `name` VARCHAR(255),
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
