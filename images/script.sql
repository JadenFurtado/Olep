CREATE DATABASE olep;

CREATE TABLE users(
	email VARCHAR(100),
	password VARCHAR(100),
	primary key (email)
);

CREATE TABLE posts(
	email VARCHAR(100),
	title VARCHAR(100),
	post_date date,
	post_time TIME,
	content TEXT,
	url VARCHAR(255),
	CONSTRAINT users FOREIGN KEY (email) REFERENCES users(email)
);

ALTER TABLE users ADD name VARCHAR(100);

ALTER TABLE posts ADD category VARCHAR(20);
ALTER TABLE posts ADD description VARCHAR(255);


CREATE TABLE images(
	email VARCHAR(100),
	post_date date,
	post_time TIME,
	description VARCHAR(255),
	url VARCHAR(255),
    CONSTRAINT users1 FOREIGN KEY (email) REFERENCES users(email)
);

CREATE TABLE ppc_members(
	id INT AUTO_INCREMENT PRIMARY KEY,
	name VARCHAR(255),
	zone VARCHAR(20),
	community VARCHAR(20),
	designation VARCHAR(50),
	image_url VARCHAR(200)
);

CREATE TABLE home_page_header(
	title VARCHAR(255),
	description VARCHAR(255)
);

CREATE TABLE mass_timings(
	timings VARCHAR(255),
	days VARCHAR(255)
);

CREATE TABLE parish_priest(
	priest_name VARCHAR(255),
	parish_priest VARCHAR(10)
);

CREATE TABLE parish_office_timings(
	id INT AUTO_INCREMENT PRIMARY KEY,
	days VARCHAR(255),
	timings VARCHAR(100)
);

CREATE TABLE popular_posts(
	post_url VARCHAR(255),
	CONSTRAINT pop_post FOREIGN KEY (post_url) REFERENCES posts(url) 
);

CREATE TABLE home_page(
	name VARCHAR(100),
	content VARCHAR(255)
);

INSERT INTO home_page(name,content) 
VALUES('welcome_message','Our Lady of Egypt, Kalina');

INSERT INTO home_page(name,content) 
VALUES('welcome_message_description','Welcome to the website of our parish :)');

INSERT INTO home_page(name,content) 
VALUES('mass_timings','All masses suspended till further notice.');

INSERT INTO home_page(name,content) 
VALUES('parish_vision','OLEP family, centred on the Eucharist, reaching out in love');

INSERT INTO home_page(name,content) 
VALUES('mass_timings','All masses suspended till further notice.');

/* ppc memebers */

INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Fr. Rui Comello","","","PPC head","WhatsApp Image 2021-06-24 at 00.27.56.jpeg"
);

INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Vinay Coutinho","","","PPC Vice President","2016-01-10 19.34.49-1.jpg"
);

INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Grahm Quiney","2","Our Lady of Vailankanni","PPC Secretary","DSC_3577.jpg"
);

INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Selsa Colaco","","","PPC Vice President","e216eb8705f84f3db052636d592f5f52-0001.jpg"
);

INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Fr. Albert Gonsalves","","","Parish team","WhatsApp Image 2021-06-24 at 00.27.30.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Fr. Evan D'Souza","","","Parish team","WhatsApp Image 2021-06-24 at 00.27.03.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Fr. J. Sravan Kumar","","","Parish team","WhatsApp Image 2021-06-24 at 00.27.16.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Sr. Sharmila","","","Sisters of Mary Immaculate","Sr. Sharmila D'souza Sisters of Mary Immaculate.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Mr. Xavier Pereira","","","Head of Eucharistic Ministers","WhatsApp Image 2021-06-16 at 20.43.54.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Judith Quiney","","","Head of Ladies Sodality","WhatsApp Image 2021-06-19 at 18.20.02.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Dora Fernandes","","","Head of Christian Life community","WhatsApp Image 2021-06-19 at 18.17.14.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Ann Barretto","","","Head of Choirs","WhatsApp Image 2021-06-16 at 20.42.54.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Justin Morais","1","Holy Trinity","co-ordinator","WhatsApp Image 2021-06-18 at 19.39.13.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Wilfred Lobo","1","Morning Star","animator","WhatsApp Image 2021-06-21 at 14.06.16.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Placid Mendonca","1","St Ann","animator","WhatsApp Image 2021-06-19 at 18.25.04.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Theresa Godinho","1","St. Michael","animator","WhatsApp Image 2021-06-19 at 18.27.26.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Mary D'Souza","2","St Anne","animator","WhatsApp Image 2021-06-18 at 23.40.12.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Vira D'Souza","2","Immaculate Conception","animator","WhatsApp Image 2021-06-18 at 23.41.01.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Dominica Fernandes","2","St John","animator","WhatsApp Image 2021-06-19 at 17.18.23.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Daisy Rodrigues","2","St Sebastian","animator","WhatsApp Image 2021-06-19 at 17.23.08.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Leena Rodrigues","2","Holy Cross","animator","WhatsApp Image 2021-06-19 at 17.13.25.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Loretta Silveria","3 A","Divine Angel","Co-ordinator","WhatsApp Image 2021-06-24 at 00.27.56.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Sharon Pinto","3 A","Ave Maria","animator","WhatsApp Image 2021-06-24 at 00.27.56.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Beena Carlos","3 B","Holy Cross","animator","WhatsApp Image 2021-06-24 at 00.27.56.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Poonam Galbano","3 B","Our Lady of Nazareth","animator","WhatsApp%20Image%202021-06-19%20at%2017.46.55.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Sanorita Rodrigues","3 B","Mother Theresa","animator","WhatsApp%20Image%202021-06-19%20at%2011.40.05.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Louisa Monteiro","3 B","St Jude","animator","WhatsApp%20Image%202021-06-16%20at%2020.40.45.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Alphonse Joseph","4 A","","co-ordinator","alphonse_joseph.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Genevieve Rodrigues","4 A","Servers","animator","Photo%20Genevieve%20Rodrigues%20%20(1).jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Necvis Sheryl D'sa","4 A","St Luke","animator","WhatsApp Image 2021-06-19 at 17.39.19.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Bharati Fernandes","4 A","Don Bosco","animator","WhatsApp%20Image%202021-06-19%20at%2017.04.18.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Christine Pereira","4 B","St Dominic Savio","co-ordinator","Christine%20Photo.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Carol DeSouza","4 B","St Anthony","animator","WhatsApp%20Image%202021-06-18%20at%2019.34.13.jpeg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Sandra Colaco","4 B","St. Joseph","animator","WhatsApp%20Image%202021-06-18%20at%2023.41.48.jpg"
);
INSERT INTO ppc_members(name,zone,community,designation,image_url)
VALUES("Maryann Francis","4 B","St Peter","animator","WhatsApp%20Image%202021-06-18%20at%2023.42.42.jpeg"
);

/* mass timings */
INSERT INTO mass_timings(
	timings,
	days 
) VALUES("All masses suspended until further notice","");

/* parish office timings */
INSERT INTO parish_office_timings(
	days,
	timings
) VALUES("Weekdays","9:30-12:30 and 17:00-18:00"),("Saturdays","16:30-19:00");