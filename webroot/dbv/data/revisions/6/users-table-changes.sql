ALTER TABLE `users` ADD `is_active` TINYINT NOT NULL DEFAULT '1' AFTER `terms_and_conditions_check`;
ALTER TABLE `users` ADD `created` DATETIME NULL DEFAULT NULL AFTER `is_active`, ADD `modified` DATETIME NULL DEFAULT NULL AFTER `created`;