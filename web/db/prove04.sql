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
    start_at_date      DATE NOT NULL,
    start_at_time      TIME NOT NULL,
    end_at_date        DATE,
    end_at_time        TIME,
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
(start_at_date, start_at_time, end_at_date, end_at_time, building, lot_id, member_id)
VALUES
('2019-02-13', '09:00:00', '2019-02-13', '12:00:00', 'Austin', 1, 3),
('2019-02-13', '09:30:00', '2019-02-13', '11:15:00', 'Spori', 5, 2),
('2019-02-13', '10:00:00', '2019-02-13', '14:30:00', 'Snow', 3, 1),
('2019-02-13', '08:00:00', '2019-02-13', '12:45:00', 'STC', 2, 4);