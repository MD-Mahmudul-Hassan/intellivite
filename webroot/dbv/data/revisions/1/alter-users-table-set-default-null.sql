ALTER TABLE `users` CHANGE `reset_password_token` `reset_password_token` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `users` CHANGE `role` `role` TINYINT(3) NULL COMMENT '1=>admin, 2=>user';

ALTER TABLE `users` CHANGE `dob` `dob` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `users` CHANGE `billing_street_address` `billing_street_address` VARCHAR(120) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `billiig_city` `billiig_city` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `billing_state` `billing_state` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL, CHANGE `billing_zip` `billing_zip` VARCHAR(20) CHARACTER SET utf8 COLLATE utf8_general_ci NULL;

ALTER TABLE `users` CHANGE `billiig_city` `billing_city` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL;