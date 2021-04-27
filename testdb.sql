-- admin table
CREATE TABLE `users_admin` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `type_user` varchar(100) NOT NULL,
    `username` varchar(100) NOT NULL,
    `first_name` varchar(100) NOT NULL,
    `last_name` varchar(100) NOT NULL,
    `email` varchar(100) NOT NULL,
    `mobile` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    `address` varchar(100) NOT NULL,
    `country` varchar(100) NOT NULL,
    `abn` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- customer table
CREATE TABLE `users_customer` (
    `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `c_username` varchar(100) NOT NULL,
    `c_first_name` varchar(100) NOT NULL,
    `c_last_name` varchar(100) NOT NULL,
    `c_email` varchar(100) NOT NULL,
    `c_mobile` varchar(100) NOT NULL,
    `c_password` varchar(100) NOT NULL,
    `c_address` varchar(100) NOT NULL,
    `c_country` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- booking table
CREATE TABLE `booking` (
    `booking id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `Location` varchar(100) NOT NULL,
    `checkin` varchar(100) NOT NULL,
    `checkout` varchar(100) NOT NULL,
    `guest` varchar(100) NOT NULL,
    `price` varchar(100) NOT NULL,
    `b_first_name` varchar(100) NOT NULL,
    `b_last_name` varchar(100) NOT NULL,
    `b_email` varchar(100) NOT NULL,
    `b_mobile` varchar(100) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = latin1;
-- room table
INSERT INTO `room` (`r_id`, `r_type`, `r_bedding`, `r_status`, `r_inventory`)
VALUES (1, 'Superior Room', 'Single', 'Free', 2),
    (2, 'Superior Room', 'Double', 'Free', 5),
    (3, 'Superior Room', 'Triple', 'Free', 2),
    (4, 'Single Room', 'Quad', 'Free', 1),
    (5, 'Superior Room', 'Quad', 'Unavailable', 0),
    (6, 'Deluxe Room', 'Single', 'Free', 6),
    (7, 'Deluxe Room', 'Double', 'Free', 3),
    (8, 'Deluxe Room', 'Triple', 'Free', 8),
    (9, 'Deluxe Room', 'Quad', 'Free', 2),
    (10, 'Guest House', 'Single', 'Free', 3),
    (11, 'Guest House', 'Double', 'Free', 1),
    (12, 'Guest House', 'Quad', 'Free', 4),
    (13, 'Single Room', 'Single', 'Free', 2),
    (14, 'Single Room', 'Double', 'Unavailable', 0),
    (15, 'Single Room', 'Triple', 'Free', 2);