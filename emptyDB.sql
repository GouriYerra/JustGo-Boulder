CREATE SCHEMA JustGoBoulder;
USE JustGoBoulder;
CREATE TABLE Admins (
	adminID int auto_increment, 
    adminPass varchar(25), 
    firstName varchar(100), 
    lastName varchar(100),
    PRIMARY KEY (adminID)
    );
CREATE TABLE Users (
	userID int auto_increment, 
    userEmail varchar(100), 
    firstName varchar(100), 
    lastName varchar(100), 
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
CREATE TABLE Comments(
	commentID int auto_increment,
    commentTime timestamp DEFAULT current_timestamp,
    primary key (commentID)
    );
CREATE TABLE Attractions (
	attractionID int auto_increment, 
    attractionName varchar(100), 
    category varchar(25),
    description varchar(256),
    addressID int,
    picture varchar(256),
    phoneNumber varchar(13),
    pricing int,
    commentID int,
    PRIMARY KEY (attractionID),
    FOREIGN KEY (addressID) REFERENCES Addresses(addressID),
    FOREIGN KEY (commentID) REFERENCES Comments(commentID)
    );
CREATE TABLE UsersAttractionsInfo (
	userID int,
    attractionID int,
    FOREIGN KEY (userID) references Users(userID),
    FOREIGN KEY (attractionID) references Attractions(attractionID)
    );
    