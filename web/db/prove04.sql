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


