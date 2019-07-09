# CodeIgniter-Tutorial-Project
Tutorial for beginners in PHP framework CodeIgniter.

Use it for creating database and tables:

```
CREATE SCHEMA ci_active_record;

USE ci_active_record;

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `item` varchar(245) DEFAULT NULL,
  `quantity` int(11) DEFAULT '0',
  `price` decimal(10,2) DEFAULT '0.00',
  `sub_total` decimal(10,2) DEFAULT '0.00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT = 1;

CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT NULL,
  `customer_name` varchar(245) DEFAULT NULL,
  `customer_address` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT = 1;

CREATE TABLE `pals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city_id` int(11) DEFAULT NULL,
  `contact_name` varchar(245) DEFAULT NULL,
  `contact_number` varchar(245) DEFAULT NULL,
  `email_address` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(245) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ;
```
