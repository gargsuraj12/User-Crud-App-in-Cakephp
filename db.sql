DROP TABLE user_db.users;

CREATE TABLE user_db.users (
    id int NOT NULL AUTO_INCREMENT,
    fname varchar(255) NOT NULL,
    lname varchar(255) NOT NULL,
    details varchar(255),
    PRIMARY KEY (ID)
);

INSERT INTO user_db.users(fname, lname, details) VALUES ("Rahul", "Kumar", "Friend");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Shubham", "Chawla", "Team Lead");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Vibhor", "Garg", "Manager");
INSERT INTO user_db.users(fname, lname, details) VALUES ("Lalit", "Bhise", "CEO");