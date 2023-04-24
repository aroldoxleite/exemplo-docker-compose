CREATE TABLE IF NOT EXISTS users (
  id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL
);

INSERT INTO users (name, email) VALUES
  ('Aroldo Xavier', 'aroldo@email.com'),
  ('Bob Marley', 'bob@email.com'),
  ('Elis Regina', 'elis@email.com');
