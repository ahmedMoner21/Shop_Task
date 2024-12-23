
-- users table
CREATE TABLE users(

	`user_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `username` varchar(30) not null,
    `email` varchar(30) not null UNIQUE,
    `password` varchar(30) not null,
    `phone` varchar(15) not null,
    `address` varchar(50),
    `type` ENUM('user', 'admin') DEFAULT 'user',
    PRIMARY KEY (`user_id`)

);

-- orders table

CREATE TABLE orders(

	`order_Number` int(11) unsigned not null AUTO_INCREMENT ,
    `status` varchar(30),
    `order_date` date not null,
    `comments` text,

	PRIMARY KEY (`order_Number`)

)

-- category table
CREATE TABLE categories (

	`category_id` int(11) unsigned not null AUTO_INCREMENT,
    `Name` varchar(25) not null,

	PRIMARY KEY (`category_id`)



);


-- products table
CREATE TABLE products (

	`product_id` int(11) unsigned not null AUTO_INCREMENT,
    `code` int(25) not null,
    `quantity` int(15) not null,
    `details` text,
    `category_id` int(11) unsigned not null,

	PRIMARY KEY (`product_id`),
    FOREIGN KEY (`category_id`) REFERENCES categories(category_id)


);


-- orderDetails table
CREATE TABLE orderDetails(

	`order_id` int(11) unsigned not null,
    `product_id` int(11) unsigned not null, 
    `price` DECIMAL(10,2) not null,
    `orderDetails` text,
    
    PRIMARY KEY (`order_id`, `product_id`),
    FOREIGN KEY (`order_id`) REFERENCES orders(order_Number),
    FOREIGN KEY (`product_id`) REFERENCES products(product_id)

);


-- review table
CREATE TABLE reviews(

    `review_id` int(11) unsigned not null AUTO_INCREMENT,
    `review_details` text not null,
    `user_id` int(11) unsigned not null,
    
    PRIMARY KEY (`review_id`),
    FOREIGN KEY (`user_id`) REFERENCES users(user_id)


);


-- cart table

CREATE TABLE cart(

	`user_id` int(11) unsigned not null,
    `product_id` int(11) unsigned not null,
    
    PRIMARY KEY(`user_id`, `product_id`),
    FOREIGN KEY (`user_id`) REFERENCES users(user_id),
	FOREIGN KEY (`product_id`) REFERENCES products(product_id)

);