
#Load Admins
insert into Admins (adminPass, firstName, lastName) values
	('ao', 'Ali', 'Ostlund'),
	('gy', 'Gouri', 'Yerra'),
	('kg', 'Kyle', 'Gronberg'),
	('kw', 'Kyle', 'Ward'),
	('ya', 'Yasmin', 'Alshafai');

#Load Users
insert into Users (userEmail, firstName, lastName) values
	('skipity@doda.com', 'Jane', 'Doe'),
	('skipity@day.com', 'John', 'Doh');


#load Addresses
insert into Addresses (streetNumber, streetName, unitNumber,
	city, state, zip) values
	(1001, 'Pearl Street', null, 'Boulder', 'CO', '80302'),
	(4800, '28th Street', null, 'Boulder', 'CO', '80301'),
    (NULL, NULL, NULL, NULL, NULL, NULL);



#Load Attractions
insert into Attractions (attractionName, category, 
	description, addressID, picture, phoneNumber, pricing) values
	('PastaJays', 'Food', 'Family oriented Italian-American restar
	aunt', 1, 'pastajays.com', '3034445800', 5),
	('Gateway Park', 'Fun', 'Arcade', 2, 'gateway.com', '3034424386',
	3),
	('Sanitas', 'Outdoors', 'Moderately easy, beautiful hike at the 
		edge of Boulder', 3, 'boulder.com', null, 0);

insert into Comments (userID, attractionID) values
	(1, 1),
    (2, 2);
