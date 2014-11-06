CREATE TABLE varas (
	id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
	comarca_id  INT UNSIGNED NOT NULL,
	name VARCHAR(200) NOT NULL,
	INDEX ix_comarca_id (comarca_id),
	CONSTRAINT fk_comarca_id FOREIGN KEY (comarca_id) references comarcas(id) on delete cascade
) ENGINE = innodb