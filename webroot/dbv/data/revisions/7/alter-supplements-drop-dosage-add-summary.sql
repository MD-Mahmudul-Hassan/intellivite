ALTER TABLE `supplements` DROP COLUMN `dosage`;
ALTER TABLE `supplements` ADD `summary` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL AFTER `name`;