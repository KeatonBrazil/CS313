DROP TABLE movie_actor;
DROP TABLE actor;
DROP TABLE movie;

CREATE TABLE actor (
    actor_id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL 
);

CREATE TABLE movie (
    movie_id SERIAL PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    year SMALLINT
);

CREATE TABLE movie_actor (
    movie_id INT NOT NULL REFERENCES movie(movie_id),
    actor_id INT NOT NULL REFERENCES actor(actor_id)
);

INSERT INTO movie(title, year) VALUES('Return of the Jedi', 1983);

INSERT INTO movie(title, year) VALUES
('Harry Potter and the Chamber of Secrets', 2002),
('The Wizard of Oz', 1939),
('The Return of the King', 2003);

INSERT INTO actor(name) VALUES
('Jackie Chan'), ('Gimli'), ('Orlando Bloom'), ('Jack Sparrow'), ('Tom Cruise');

INSERT INTO movie_actor(movie_id, actor_id) VALUES(1, 2), (1, 3), (4, 5), (3, 4), (2, 2), (2, 3), (4, 3);