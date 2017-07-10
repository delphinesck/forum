CREATE DATABASE TP_forumPHP;

CREATE TABLE user(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30),
email VARCHAR(255),
upassword VARCHAR(255),
avatar VARCHAR(255),
datecreate DATETIME
);

CREATE TABLE post(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
content VARCHAR (9999)
);

CREATE TABLE message(
id INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255),
content VARCHAR (9999)
);