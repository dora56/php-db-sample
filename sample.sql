SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE sample (
ID int(1) PRIMARY KEY,
Name varchar(10)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO sample VALUES (1,'tanaka'),
                          (2,'yamada');
