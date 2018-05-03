ALTER DATABASE mfigueroa14 CHARACTER SET utf8 COLLATE utf8_unicode_ci;

DROP TABLE IF EXISTS senator;

CREATE TABLE senator (
	senatorId BINARY (16) NOT NULL,
	senatorName VARCHAR (64) NOT NULL,
	senatorNumLives TINYINT UNSIGNED NOT NULL,
	PRIMARY KEY(senatorId)

);

