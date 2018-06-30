
#Load Admins
insert into Admins (adminID, adminPass, firstName, lastName) values
	(1, 'ao', 'Ali', 'Ostlund'),
	(2, 'gy', 'Gouri', 'Yerra'),
	(3, 'kg', 'Kyle', 'Gronberg'),
	(4, 'kw', 'Kyle', 'Ward'),
	(5, 'ya', 'Yasmin', 'Alshafai');

#Load Users
insert into Users (userID, userEmail, firstName, lastName) values
	(1, 'skipity@doda.com', 'Jane', 'Doe'),
	(2, 'skipity@day.com', 'John', 'Doh');


#load Addresses
insert into Addresses (AddressID, streetNumber, streetName, unitNumber,
	city, state, zip) values
	(1, 1001, 'Pearl Street', null, 'Boulder', 'CO', '80302'),
	(2, 4800, '28th Street', null, 'Boulder', 'CO', '80301');



#Load Attractions
insert into Attractions (attractionID, attractionName, category, 
	description, addressID, picture, phoneNumber, pricing, commentID) values
	(1, 'PastaJays', 'food', 'Family oriented Italian-American restar
	aunt', 1, 'pastajays.com', '3034445800', 5, 1),
	(2, 'Gateway Park', 'fun', 'Arcade', 2, 'gateway.com', '3034424386',
	3, 2),
	(3, 'Sanitas', 'outdoors', 'Moderately easy, beautiful hike at the 
		edge of Boulder', null, 'boulder.com', null, 0, null);

