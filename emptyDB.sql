DROP DATABASE IF EXISTS JustGoBoulder;
CREATE SCHEMA JustGoBoulder;
USE JustGoBoulder;
CREATE TABLE Admins (
	adminID int auto_increment, 
    adminUser varchar(25) NOT NULL,
    adminPass varchar(25) NOT NULL, 
    firstName varchar(100) NOT NULL, 
    lastName varchar(100) NOT NULL,
    PRIMARY KEY (adminID)
    );
CREATE TABLE Users (
	userID int auto_increment, 
    userEmail varchar(100) NOT NULL, 
    firstName varchar(100) NOT NULL, 
    lastName varchar(100) NOT NULL, 
    PRIMARY KEY (userID)
    );
CREATE TABLE AdminsUsersInfo (
	adminID int,
    userID int,
    FOREIGN KEY (adminID) REFERENCES Admins(adminID),
    FOREIGN KEY (userID) REFERENCES Users(userID)
    );
CREATE TABLE Addresses(
	addressID int auto_increment,
    streetNumber int,
    streetName varchar(50),
    unitNumber varchar(10),
    city varchar(25),
    state varchar(2),
    zip varchar(5),
    PRIMARY KEY (addressID)
    );
CREATE TABLE Attractions (
	attractionID int auto_increment, 
    attractionName varchar(100) NOT NULL, 
    category varchar(25) NOT NULL,
    description varchar(256) NOT NULL,
    picture varchar(256),
    phoneNumber varchar(13),
    pricing int NOT NULL,
    PRIMARY KEY (attractionID),
    FOREIGN KEY (attractionID) REFERENCES Addresses(addressID)
    );
CREATE TABLE Comments(
	commentID int auto_increment,
    commentTime timestamp DEFAULT current_timestamp,
    userID int,
    attractionID int,
    comment varchar(256),
    primary key (commentID),
    foreign key (userID) references Users(userID),
    FOREIGN KEY (attractionID) references Attractions(attractionID)
    );
CREATE TABLE UsersAttractionsInfo (
	userID int,
    attractionID int,
    FOREIGN KEY (userID) references Users(userID),
    FOREIGN KEY (attractionID) references Attractions(attractionID)
    );
    