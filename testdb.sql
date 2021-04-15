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