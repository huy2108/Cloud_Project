CREATE DATABASE BookStore;
USE BookStore;

CREATE TABLE Book (
    BookID INT AUTO_INCREMENT PRIMARY KEY,
    BookTitle VARCHAR(200),
    BookContent VARCHAR(500),
    Author VARCHAR(128),
    Image VARCHAR(128)
);



INSERT INTO Book(BookTitle, BookContent, Author ,Image) VALUES ('Lonely Planet Australia (Travel Guide)','Lonely Planet','Unknown','images/travel.jpg');
INSERT INTO Book(BookTitle, BookContent, Author ,Image) VALUES ('Crew Resource Management, Second Edition','Barbara Kanki','Unknown','images/technical.jpg');
INSERT INTO Book(BookTitle, BookContent, Author ,Image) VALUES ('CCNA Routing and Switching 200-125 Official Cert Guide Library','Cisco Press ','Unknown','images/technology.jpg');
INSERT INTO Book(BookTitle, BookContent, Author ,Image) VALUES ('Easy Vegetarian Slow Cooker Cookbook','Rockridge Press','Unknown','images/food.jpg');

