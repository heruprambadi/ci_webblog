DROP TABLE IF EXISTS `cms_nordrassil_column_option`; 
DROP TABLE IF EXISTS `cms_nordrassil_table_option`; 
DROP TABLE IF EXISTS `cms_nordrassil_column`; 
DROP TABLE IF EXISTS `cms_nordrassil_table`; 
DROP TABLE IF EXISTS `cms_nordrassil_project`; 

#
# TABLE STRUCTURE FOR: cms_nordrassil_project
#

CREATE TABLE `cms_nordrassil_project` (
  `project_id` int(20) NOT NULL AUTO_INCREMENT,
  `template_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `db_server` varchar(50) DEFAULT NULL,
  `db_port` varchar(50) DEFAULT NULL,
  `db_schema` varchar(50) DEFAULT NULL,
  `db_user` varchar(50) DEFAULT NULL,
  `db_password` varchar(50) DEFAULT NULL,
  `db_table_prefix` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`project_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `cms_nordrassil_project` (`project_id`, `template_id`, `name`, `db_server`, `db_port`, `db_schema`, `db_user`, `db_password`, `db_table_prefix`) VALUES ('1', '1', 'example', 'localhost', '3306', 'town', 'root', 'toor', 'twn');


#
# TABLE STRUCTURE FOR: cms_nordrassil_table
#

CREATE TABLE `cms_nordrassil_table` (
  `table_id` int(20) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `caption` varchar(50) DEFAULT NULL,
  `priority` int(10) DEFAULT NULL,
  PRIMARY KEY (`table_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('1', '1', 'twn_citizen', 'Citizen', '6');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('2', '1', 'twn_citizen_hobby', 'Citizen Hobby', '9');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('3', '1', 'twn_city', 'City', '5');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('4', '1', 'twn_city_commodity', 'City Commodity', '7');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('5', '1', 'twn_city_tourism', 'City Tourism', '8');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('6', '1', 'twn_commodity', 'Commodity', '3');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('7', '1', 'twn_country', 'Country', '2');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('8', '1', 'twn_hobby', 'Hobby', '1');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('9', '1', 'twn_job', 'Job', '0');
INSERT INTO `cms_nordrassil_table` (`table_id`, `project_id`, `name`, `caption`, `priority`) VALUES ('10', '1', 'twn_tourism', 'Tourism', '4');


#
# TABLE STRUCTURE FOR: cms_nordrassil_column
#

CREATE TABLE `cms_nordrassil_column` (
  `column_id` int(20) NOT NULL AUTO_INCREMENT,
  `table_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `caption` varchar(50) DEFAULT NULL,
  `data_type` varchar(50) DEFAULT NULL,
  `data_size` int(10) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `lookup_table_id` int(10) DEFAULT NULL,
  `lookup_column_id` int(10) DEFAULT NULL,
  `relation_table_id` int(10) DEFAULT NULL,
  `relation_table_column_id` int(10) DEFAULT NULL,
  `relation_selection_column_id` int(10) DEFAULT NULL,
  `relation_priority_column_id` int(10) DEFAULT NULL,
  `selection_table_id` int(10) DEFAULT NULL,
  `selection_column_id` int(10) DEFAULT NULL,
  `priority` int(10) DEFAULT NULL,
  `value_selection_mode` varchar(50) DEFAULT NULL,
  `value_selection_item` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`column_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('1', '1', 'citizen_id', 'Citizen Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('2', '1', 'city_id', 'City', 'int', '10', 'lookup', '3', '11', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('3', '1', 'name', 'Name', 'varchar', '50', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('4', '1', 'birthdate', 'Birthdate', 'date', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('5', '1', 'job_id', 'Job', 'int', '10', 'lookup', '9', '25', NULL, NULL, NULL, NULL, NULL, NULL, '4', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('6', '2', 'id', 'Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('7', '2', 'citizen_id', 'Citizen Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('8', '2', 'hobby_id', 'Hobby Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('9', '3', 'city_id', 'City Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('10', '3', 'country_id', 'Country', 'int', '10', 'lookup', '7', '21', NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('11', '3', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('12', '4', 'id', 'Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('13', '4', 'city_id', 'City Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('14', '4', 'commodity_id', 'Commodity Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('15', '5', 'id', 'Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('16', '5', 'city_id', 'City Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('17', '5', 'tourism_id', 'Tourism Id', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('18', '6', 'commodity_id', 'Commodity Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('19', '6', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('20', '7', 'country_id', 'Country Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('21', '7', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('22', '8', 'hobby_id', 'Hobby Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('23', '8', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('24', '9', 'job_id', 'Job Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('25', '9', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('26', '10', 'tourism_id', 'Tourism Id', 'int', '10', 'primary', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('27', '10', 'name', 'Name', 'varchar', '20', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('28', '1', 'hobby', 'Hobby', '', NULL, 'detail many to many', '0', NULL, '2', '7', '8', NULL, '8', '23', '5', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('29', '3', 'tourism', 'Tourism', '', NULL, 'detail many to many', '0', NULL, '5', '16', '17', NULL, '10', '27', '3', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('30', '4', 'priority', 'Priority', 'int', '10', '', '0', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('31', '3', 'commodity', 'Commodity', '', NULL, 'detail many to many', '0', NULL, '4', '13', '14', '30', '6', '19', '4', NULL, NULL);
INSERT INTO `cms_nordrassil_column` (`column_id`, `table_id`, `name`, `caption`, `data_type`, `data_size`, `role`, `lookup_table_id`, `lookup_column_id`, `relation_table_id`, `relation_table_column_id`, `relation_selection_column_id`, `relation_priority_column_id`, `selection_table_id`, `selection_column_id`, `priority`, `value_selection_mode`, `value_selection_item`) VALUES ('32', '3', 'citizen', 'Citizen', '', NULL, 'detail one to many', '0', NULL, '1', '2', NULL, NULL, NULL, NULL, '5', NULL, NULL);


#
# TABLE STRUCTURE FOR: cms_nordrassil_table_option
#

CREATE TABLE `cms_nordrassil_table_option` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `option_id` int(10) DEFAULT NULL,
  `table_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `cms_nordrassil_table_option` (`id`, `option_id`, `table_id`) VALUES ('1', '1', '2');
INSERT INTO `cms_nordrassil_table_option` (`id`, `option_id`, `table_id`) VALUES ('2', '1', '4');
INSERT INTO `cms_nordrassil_table_option` (`id`, `option_id`, `table_id`) VALUES ('3', '1', '5');
INSERT INTO `cms_nordrassil_table_option` (`id`, `option_id`, `table_id`) VALUES ('4', '1', '1');
INSERT INTO `cms_nordrassil_table_option` (`id`, `option_id`, `table_id`) VALUES ('5', '3', '3');


#
# TABLE STRUCTURE FOR: cms_nordrassil_column_option
#

CREATE TABLE `cms_nordrassil_column_option` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `option_id` int(10) DEFAULT NULL,
  `column_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('1', '5', '3');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('2', '6', '3');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('3', '5', '11');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('4', '6', '11');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('5', '5', '19');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('6', '6', '19');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('7', '5', '21');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('8', '6', '21');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('9', '5', '23');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('10', '6', '23');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('11', '5', '25');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('12', '6', '25');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('13', '5', '27');
INSERT INTO `cms_nordrassil_column_option` (`id`, `option_id`, `column_id`) VALUES ('14', '6', '27');


