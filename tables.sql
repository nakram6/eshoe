CREATE TABLE IF NOT EXISTS `shoes` (
  `shoe_id` int(11) NOT NULL AUTO_INCREMENT,
  `shoe_name` varchar(100) NOT NULL,
  `shoe_size` varchar(100) NOT NULL,
  `shoe_description` varchar(255) NOT NULL,
  `shoe_image` varchar(255) NOT NULL,
  `shoe_image2` varchar(255) NOT NULL,
  `shoe_image3` varchar(255) NOT NULL,
  `shoe_image4` varchar(255) NOT NULL,
  `shoe_price` decimal(6,2) NOT NULL, 
  `shoe_special_offer` integer(2) NOT NULL,
  `shoe_color` varchar(100) NOT NULL,
  PRIMARY KEY (`shoe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_price` decimal(6,2) NOT NULL,
  `order_status` varchar(100) NOT NULL DEFAULT 'on_hold',
  `user_id` int(11) NOT NULL,
  `user_phone` int(11) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `order_items` (
  `item_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `shoe_id` varchar(255) NOT NULL,
  `shoe_name` varchar(255) NOT NULL,
  `shoe_image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_date` DATETIME  NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
   `last_name` varchar(100) NOT NULL,
   `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `UX_Constraint` (`user_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE IF NOT EXISTS `admins` (
'admin_id' INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
'name' VARCHAR(100) NOT NULL,
'email' VARCHAR(100) NOT NULL,
'password' VARCHAR(100) NOT NULL,

);

