DROP TABLE parking_info;
DROP TABLE parking_lot;
DROP TABLE member;

CREATE TABLE parking_lot (
    lot_id          SERIAL PRIMARY KEY,
    lot_location    VARCHAR (50) NOT NULL,
    parking_pass    VARCHAR (25) NOT NULL
);

CREATE TABLE member (
    member_id       SERIAL PRIMARY KEY,
    username        VARCHAR (20) UNIQUE NOT NULL,
    pass_word       VARCHAR (20) NOT NULL,
    email           VARCHAR (30) UNIQUE NOT NULL,
    school_relation VARCHAR (15) NOT NULL,
    major           VARCHAR (50) NOT NULL,
    apt_name        VARCHAR (50) NOT NULL,
    pregnant        BOOLEAN NOT NULL
);

CREATE TABLE parking_info (
    info_id         SERIAL PRIMARY KEY,
    start_date_time TIMESTAMP NOT NULL,
    end_date_time   TIMESTAMP NOT NULL,
    building        VARCHAR (50) NOT NULL,
    lot_id          INT NOT NULL REFERENCES parking_lot(lot_id),
    member_id       INT NOT NULL REFERENCES member(member_id)
);

INSERT INTO parking_lot 
(lot_location, parking_pass)
VALUES 
('Taylor', 'North'), ('STC', 'South'), ('Snow', 'Administrator'), ('Kymball', 'North'), ('Kymball', 'Administrator'), ('I-Center', 'North');

INSERT INTO member 
(username, pass_word, email, school_relation, major, apt_name, pregnant)
VALUES
('Bob', 'turkey', 'bob@gmail.com', 'Faculty', 'Music', 'none', 'False'), 
('Julie', 'baby', 'julie@gmail.com', 'Faculty', 'Communications', 'none', 'True'), 
('Josh', 'robots', 'josh@gmail.com', 'Student', 'Engineering', 'The Loft', 'False'), 
('Anna', 'preggy', 'anna@gmail.com', 'Student', 'Computer Science', 'Campus Courtyard', 'True');

INSERT INTO parking_info 
(start_date_time, end_date_time, building, lot_id, member_id)
VALUES
('02/13/2019 09:00:00', '02/13/2019 12:00:00', 'Austin', 1, 3),
('02/13/2019 09:30:00', '02/13/2019 11:15:00', 'Spori', 5, 2),
('02/13/2019 10:00:00', '02/13/2019 14:30:00', 'Snow', 3, 1),
('02/13/2019 08:00:00', '02/13/2019 12:45:00', 'STC', 2, 4);