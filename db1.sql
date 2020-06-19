CREATE TABLE cat(
cat_id INT(11) NOT NULL AUTO_INCREMENT,
cat_name VARCHAR(100) NOT NULL,
text VARCHAR(100) NOT NULL,
PRIMARY KEY(cat_id)
);

CREATE TABLE post (
post_id INT(11) NOT NULL AUTO_INCREMENT,
date DATE,
slug VARCHAR(25) NOT NULL,
title VARCHAR(100) NOT NULL,
text TEXT,
cat_id INT(11) NOT NULL,
PRIMARY KEY(post_id),
FOREIGN KEY(cat_id)
REFERENCES cat(cat_id)
);

CREATE TABLE photo (
photo_id INT(11) NOT NULL AUTO_INCREMENT,
date DATE,
title VARCHAR(100) NOT NULL,
text TEXT,
post_id INT(11) NOT NULL,
PRIMARY KEY(photo_id),
FOREIGN KEY(post_id)
REFERENCES post(post_id)
);

CREATE TABLE album(
album_id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(100) NOT NULL,
text VARCHAR(100) NOT NULL,
photo_id INT(11) NOT NULL,
PRIMARY KEY(album_id),
FOREIGN KEY(photo_id)
REFERENCES photo(photo_id)
);

CREATE TABLE login (
username VARCHAR(50) NOT NULL,
password VARCHAR(20) NOT NULL
);


