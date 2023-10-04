CREATE TABLE Account(
    Username VARCHAR(40) NOT NULL PRIMARY KEY,
    Password VARCHAR(50) NOT NULL,
    FirstName VARCHAR(20) NOT NULL,
    LastName VARCHAR(20) NOT NULL,
    Email VARCHAR(50) NOT NULL,
    PhoneNumber VARCHAR(20) NOT NULL,
    Role VARCHAR(20) NOT NULL
);

insert into Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) values ('sforcer0', 'mP(x''2C9"tsY', 'Susann', 'Forcer', 'sforcer0@baidu.com', '173-969-2038', 'User');
insert into Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) values ('jpedden1', '1LY"I.?>9DM', 'Johnathan', 'Pedden', 'jpedden1@comcast.net', '931-943-2804', 'User');
insert into Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) values ('tsnarie2', '<Ur%w)P|NQw''kW', 'Tann', 'Snarie', 'tsnarie2@ifeng.com', '823-711-5627', 'Admin');
insert into Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) values ('dgounel3', 'eyEE''0q9KSdCX', 'Derron', 'Gounel', 'dgounel3@ed.gov', '778-445-9533', 'User');
insert into Account(Username, Password, FirstName, LastName, Email, PhoneNumber, Role) values ('wfabler4', '%)/lvvQKskpS"', 'Wayland', 'Fabler', 'wfabler4@miibeian.gov.cn', '741-751-7272', 'User');

CREATE TABLE Place(
    PlaceID INT NOT NULL PRIMARY KEY,
    PlaceName VARCHAR(100) NOT NULL,
    PlaceLocation VARCHAR(100) NOT NULL,
    PlaceDescription VARCHAR(1000) NOT NULL,
    PlaceType VARCHAR(50) NOT NULL,
    PlacePrice INT NOT NULL,
    PlaceOpenTime TIME NOT NULL,
    PlaceCloseTime TIME NOT NULL,
    PlaceContact VARCHAR(20) NOT NULL,
    PlaceEmail VARCHAR(50) NOT NULL,
    PlaceWebsite VARCHAR(500) NOT NULL
);

CREATE TABLE PlaceImage(
    PlaceID INT NOT NULL,
    PlaceImg LONGBLOB NOT NULL,
    FOREIGN KEY (PlaceID) REFERENCES Place(PlaceID)
);

CREATE TABLE PlaceVideo(
    PlaceID INT NOT NULL,
    PlaceVideo LONGBLOB,
    FOREIGN KEY (PlaceID) REFERENCES Place(PlaceID)
);

CREATE TABLE TravelPlan(
    TravelPlanID INT NOT NULL PRIMARY KEY,
    Username VARCHAR(40) NOT NULL,
    DateStart DATE NOT NULL,
    DateEnd DATE NOT NULL,
    TotalPrice INT NOT NULL,
    FOREIGN KEY (Username) REFERENCES Account(Username)
);

CREATE TABLE PlaceList(
    PlaceListID INT NOT NULL PRIMARY KEY,
    TravelPlanID INT NOT NULL,
    PlaceID INT NOT NULL,
    DateStart DATE NOT NULL,
    DateEnd DATE NOT NULL,
    TimeStart TIME NOT NULL,
    TimeEnd TIME NOT NULL,
    FOREIGN KEY (TravelPlanID) REFERENCES TravelPlan(TravelPlanID),
    FOREIGN KEY (PlaceID) REFERENCES Place(PlaceID)
);

CREATE TABLE PaymentDetail(
    PaymentID INT NOT NULL PRIMARY KEY,
    PaymentMethod VARCHAR(20) NOT NULL,
    PaymentAmount INT NOT NULL,
    PaymentDate DATE NOT NULL
);

CREATE TABLE HistoryTransaction(
    TransactionID INT NOT NULL PRIMARY KEY,
    PaymentID INT NOT NULL,
    TravelPlanID INT NOT NULL,
    Username VARCHAR(40) NOT NULL,
    FOREIGN KEY (PaymentID) REFERENCES PaymentDetail(PaymentID),
    FOREIGN KEY (TravelPlanID) REFERENCES TravelPlan(TravelPlanID),
    FOREIGN KEY (Username) REFERENCES Account(Username)
);


insert into Place(PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) values (1, 'Sample Place 1', 'City A', 'A wonderful place to visit.', 'Attraction', 20000, '09:00:00', '18:00:00', '123-456-7890', 'sample1@example.com', 'www.sampleplace1.com');
insert into Place(PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) values (2, 'Sample Place 2', 'City B', 'Explore the beauty of nature.', 'Park', 0, '07:00:00', '21:00:00', '987-654-3210', 'sample2@example.com', 'www.sampleplace2.com');
insert into Place(PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) values (3, 'Sample Place 3', 'City C', 'A historical landmark.', 'Museum', 15000, '10:00:00', '17:00:00', '555-123-4567', 'sample3@example.com', 'www.sampleplace3.com');
insert into Place(PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) values (4, 'Sample Place 4', 'City D', 'A family-friendly amusement park.', 'Amusement Park', 30000, '11:00:00', '20:00:00', '111-222-3333', 'sample4@example.com', 'www.sampleplace4.com');
insert into Place(PlaceID, PlaceName, PlaceLocation, PlaceDescription, PlaceType, PlacePrice, PlaceOpenTime, PlaceCloseTime, PlaceContact, PlaceEmail, PlaceWebsite) values (5, 'Sample Place 5', 'City E', 'Experience fine dining.', 'Restaurant', 50000, '18:00:00', '23:00:00', '777-888-9999', 'sample5@example.com', 'www.sampleplace5.com');

insert into PlaceImage(PlaceID, PlaceImg) values (1, '0x831241247');
insert into PlaceImage(PlaceID, PlaceImg) values (2, '0x222144364');
insert into PlaceImage(PlaceID, PlaceImg) values (3, '0x112341249');
insert into PlaceImage(PlaceID, PlaceImg) values (4, '0x313658671');
insert into PlaceImage(PlaceID, PlaceImg) values (5, '0x241456457');

insert into PlaceVideo(PlaceID, PlaceVideo) values (1, '0x831241244');
insert into PlaceVideo(PlaceID, PlaceVideo) values (2, '0x222144362');
insert into PlaceVideo(PlaceID, PlaceVideo) values (3, '0x112341244');
insert into PlaceVideo(PlaceID, PlaceVideo) values (4, '0x313658677');
insert into PlaceVideo(PlaceID, PlaceVideo) values (5, '0x241456452');

insert into TravelPlan(TravelPlanID, Username, DateStart, DateEnd, TotalPrice) values (1, 'sforcer0', '2019-12-01', '2019-12-06', 1000000);
insert into TravelPlan(TravelPlanID, Username, DateStart, DateEnd, TotalPrice) values (2, 'jpedden1', '2019-12-02', '2019-12-07', 2000000);
insert into TravelPlan(TravelPlanID, Username, DateStart, DateEnd, TotalPrice) values (3, 'tsnarie2', '2019-12-03', '2019-12-08', 3000000);
insert into TravelPlan(TravelPlanID, Username, DateStart, DateEnd, TotalPrice) values (4, 'dgounel3', '2019-12-04', '2019-12-09', 4000000);
insert into TravelPlan(TravelPlanID, Username, DateStart, DateEnd, TotalPrice) values (5, 'wfabler4', '2019-12-05', '2019-12-10', 5000000);

insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (1, 1, 1, '2019-12-01', '2019-12-06', '08:00:00', '10:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (2, 2, 2, '2019-12-02', '2019-12-07', '08:00:00', '10:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (3, 3, 3, '2019-12-03', '2019-12-08', '08:00:00', '10:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (4, 4, 4, '2019-12-04', '2019-12-09', '08:00:00', '10:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (5, 5, 5, '2019-12-05', '2019-12-10', '08:00:00', '10:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (6, 1, 5, '2019-12-01', '2019-12-06', '11:00:00', '13:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (7, 2, 4, '2019-12-02', '2019-12-07', '11:00:00', '13:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (8, 3, 2, '2019-12-03', '2019-12-08', '11:00:00', '13:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (9, 4, 3, '2019-12-04', '2019-12-09', '11:00:00', '13:00:00');
insert into PlaceList(PlaceListID, TravelPlanID, PlaceID, DateStart, DateEnd, TimeStart, TimeEnd) values (10, 5, 1, '2019-12-05', '2019-12-10', '11:00:00', '13:00:00');

insert into PaymentDetail(PaymentID, PaymentMethod, PaymentAmount, PaymentDate) values (1, 'Credit Card', 1000000, '2019-11-01');
insert into PaymentDetail(PaymentID, PaymentMethod, PaymentAmount, PaymentDate) values (2, 'Debit Card', 2000000, '2019-11-02');
insert into PaymentDetail(PaymentID, PaymentMethod, PaymentAmount, PaymentDate) values (3, 'Credit Card', 3000000, '2019-11-03');
insert into PaymentDetail(PaymentID, PaymentMethod, PaymentAmount, PaymentDate) values (4, 'Debit Card', 4000000, '2019-11-04');
insert into PaymentDetail(PaymentID, PaymentMethod, PaymentAmount, PaymentDate) values (5, 'Cash', 5000000, '2019-11-05');

insert into HistoryTransaction(TransactionID, PaymentID, TravelPlanID, Username) values (1, 1, 1, 'sforcer0');
insert into HistoryTransaction(TransactionID, PaymentID, TravelPlanID, Username) values (2, 2, 2, 'jpedden1');
insert into HistoryTransaction(TransactionID, PaymentID, TravelPlanID, Username) values (3, 3, 3, 'tsnarie2');
insert into HistoryTransaction(TransactionID, PaymentID, TravelPlanID, Username) values (4, 4, 4, 'dgounel3');
insert into HistoryTransaction(TransactionID, PaymentID, TravelPlanID, Username) values (5, 5, 5, 'wfabler4');