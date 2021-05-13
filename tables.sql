

-- ias admin
CREATE TABLE `top_class_ias`.`ias_admin` ( `a_id` INT(255) NOT NULL AUTO_INCREMENT , `a_name` VARCHAR(255) NOT NULL , `a_mail` VARCHAR(255) NOT NULL , `a_phone` VARCHAR(255) NOT NULL , `a_pass` VARCHAR(255) NOT NULL , `a_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`a_id`)) ENGINE = InnoDB;


-- ias course
CREATE TABLE `top_class_ias`.`ias_course` ( `c_id` INT(255) NOT NULL AUTO_INCREMENT , `c_name` VARCHAR(255) NOT NULL , `c_fee` VARCHAR(255) NOT NULL , `c_desc` VARCHAR(255) NOT NULL , `c_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , `c_url` VARCHAR(255) NOT NULL , PRIMARY KEY (`c_id`)) ENGINE = InnoDB;


-- cource data
CREATE TABLE `top_class_ias`.`ias_course_data` ( `cd_id` INT(255) NOT NULL AUTO_INCREMENT , `c_id` INT NOT NULL , `c_url` VARCHAR(255) NOT NULL , `c_file_name` VARCHAR(255) NOT NULL , PRIMARY KEY (`cd_id`)) ENGINE = InnoDB;



-- ias notification
CREATE TABLE `top_class_ias`.`ias_notificarion` ( `n_id` INT NOT NULL AUTO_INCREMENT , `n_desc` VARCHAR(255) NOT NULL , `n_url` VARCHAR(255) NOT NULL , `n_time` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`n_id`)) ENGINE = InnoDB;