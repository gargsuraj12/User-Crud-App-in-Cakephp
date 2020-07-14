DROP TABLE user_db.users;

CREATE TABLE user_db.users (
    id int NOT NULL AUTO_INCREMENT,
    username varchar(255) UNIQUE NOT NULL,
    password varchar(255) NOT NULL,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    details varchar(255),
    PRIMARY KEY (ID)
);

INSERT INTO user_db.users(fname, lname, details) VALUES ("rahulch", "123456","Rahul", "Kumar", "Friend");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Shubham", "Chawla", "Team Lead");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Vibhor", "Garg", "Manager");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Lalit", "Bhise", "CEO");