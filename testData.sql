
#Load Admins
insert into Admins (adminUser, adminPass, firstName, lastName) values
	('alos','ao', 'Ali', 'Ostlund'),
	('goye','gy', 'Gouri', 'Yerra'),
	('kygr','kg', 'Kyle', 'Gronberg'),
	('kywa','kw', 'Kyle', 'Ward'),
	('yaal','ya', 'Yasmin', 'Alshafai');

#Load Users
insert into Users (userEmail, firstName, lastName) values
	('skipity@doda.com', 'Jane', 'Doe'),
	('skipity@day.com', 'John', 'Doh');


#load Addresses
insert into Addresses (streetNumber, streetName, unitNumber,
	city, state, zip) values
	(1001, 'Pearl Street', null, 'Boulder', 'CO', '80302'),
	(4800, '28th Street', null, 'Boulder', 'CO', '80301'),
    (NULL, 'Sunshine Canyon Dr.', NULL, 'Boulder', 'CO', '80304');



#Load Attractions
insert into Attractions (attractionName, category, 
	description, picture, phoneNumber, pricing) values
	('PastaJays', 'Food', 'Family oriented Italian-American restar
	aunt', 'pastajays.com', '3034445800', 5),
	('Gateway Park', 'Fun', 'Arcade', 'gateway.com', '3034424386',
	3),
	('Sanitas', 'Outdoors', 'Moderately easy, beautiful hike at the 
		edge of Boulder', 'boulder.com', null, 0);

insert into Comments (userID, attractionID, comment) values
	(1, 1, 'this is a test comment'),
    (2, 2, 'this is test comment number 2');
