-- create database test_db;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `rooms` varchar(60) NOT NULL,
  `price` varchar(60) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);
CREATE TABLE `login_user` (
  `userid` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(30) NOT NULL,
  `fullname` VARCHAR(60) NOT NULL,
  `emailid` VARCHAR(60) NOT NULL,
     PRIMARY KEY (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;