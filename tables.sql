-- database : ` blog `

-----------------------------------------------------------------------

--table for autheur

CREATE TABLE `admin` (

    `id` int primary key not null AUTO_INCREMENT,
    `fname` varchar (100) not null,
    `lname` varchar (100) not null,
    `email` varchar(100) not null,
    `password` varchar (100) not null
)

-- table for article

CREATE TABLE `article`(

    `id` int primary key not null AUTO_INCREMENT,
    `title` varchar (100) not null,
    `date` varchar (100) not null,
    `content` varchar (100) not null,
    `photo` varchar (100) not null
)