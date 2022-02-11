<?

$tabl="CREATE TABLE IF NOT EXISTS posts(
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    body TEXT,
    author VARCHAR(255),
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP)
    ENGINE = InnoDB;";
    



   // INSERT into posts( title, body, author,date_created) VALUES('post one','this is the post one','darko',now());