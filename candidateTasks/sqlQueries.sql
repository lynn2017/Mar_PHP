-- Tables (pseudocode):

-- user {
-- id integer auto_increment,
-- name vachar
-- }

-- salary {
-- id integer auto_increment,
-- userId integer, # link to user table
-- dateofSalary timestamp, # date/time when user received salary
-- sum decimal
-- }

-- Task:
-- All tasks should be resolved by ONE SQL query (no php loops),
-- user name should be listed in results of query


-- a) Design SQL which lists user(s) with biggest total salary from April to November.
-- Show user name and overall salary amount
-- b) Design SQL which shows users who haven't received salary yet



CREATE DATABASE mydb;

CREATE TABLE `user`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(255) NOT NULL,
PRIMARY KEY (`id`)
);

CREATE TABLE `salary`(
`id` int(11) NOT NULL AUTO_INCREMENT,
`userId` int(11) NOT NULL,
`dateofSalary` timestamp(6) NOT NULL,
`sum` decimal(10,2) NOT NULL, 
PRIMARY KEY (`id`),
FOREIGN KEY (`userId`) REFERENCES `user`(`id`) 
);


-- INSERT INTO `user` (`id`, `name`) VALUES ('1', 'John'), ('2', 'Lily'), ('3', 'Ann');

-- INSERT INTO `salary` (`id`, `userId`, `dateofSalary`, `sum`) VALUES ('1', '2', '2015-04-01', '10'), ('2', '2', '2015-05-22', '20'), ('3', '2', '2015-05-22', '20'), ('4', '3', '2015-05-22', '20'), ('5', '1', '2015-05-22', '20');


SELECT user.name, SUM(salary.sum) AS `Total` FROM `user`,`salary`
	WHERE user.id = salary.userId
	AND salary.dateofSalary >= '2015-04-01'
	AND salary.dateofSalary <= '2015-11-01'
	GROUP BY user.id
	--HAVING `Total`=MAX(`Total`);

SELECT user.name, user.id FROM `user`
	WHERE user.id NOT IN
	(SELECT user.id FROM `salary`,`user`
	WHERE user.id=salary.userId);

-- SELECT user.name, user.id FROM `user`
-- 	WHERE NOT EXISTS
-- 	(SELECT user.id FROM `salary`,`user`
-- 	WHERE user.id=salary.userId);

-- SELECT user.name, user.id
-- FROM `user`
-- LEFT JOIN `salary` on user.id = salary.userId
-- WHERE salary.userId IS NULL;
