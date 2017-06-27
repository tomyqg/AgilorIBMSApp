CREATE DATABASE IF NOT EXISTS ibmsappdb;

USE ibmsappdb;

CREATE TABLE IF NOT EXISTS point (

	point_id INT NOT NULL AUTO_INCREMENT,
	point_name VARCHAR(64) NOT NULL,
	point_url VARCHAR(255) NOT NULL,
	point_type VARCHAR(64) NOT NULL,
	point_value_type VARCHAR(64) NOT NULL,

	PRIMARY KEY ( point_id ),
	UNIQUE ( point_name )
);

INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_SCENE_706','http://localhost/AgilorReader/devices/BIAD_LIGHT_SCENE_DEVICES/LIG_SCENE_706','SCENE','ENUM');
INSERT INTO point ( point_name, point_url, point_type, point_value_type ) VALUES ('LIG_SCENE_703','http://localhost/AgilorReader/devices/BIAD_LIGHT_SCENE_DEVICES/LIG_SCENE_703','SCENE','ENUM');

