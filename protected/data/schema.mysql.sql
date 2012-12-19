CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);

INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');


CREATE TABLE tbl_employee (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    employee_name VARCHAR(128) NOT NULL,
    address VARCHAR(128) NOT NULL,
    phone int(10) unsigned DEFAULT NULL,
    email VARCHAR(128) NOT NULL,
    status VARCHAR(128) NOT NULL,
);

CREATE TABLE tbl_client1
(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    account_number VARCHAR(128) NOT NULL,
    clinet_email VARCHAR(128) NOT NULL,
    phone int(10) unsigned DEFAULT NULL,
    trader  VARCHAR(128) NOT NULL,
    saleperson VARCHAR(128) NOT NULL
    author_id INTEGER NOT NULL,
    CONSTRAINT FK_client1_author FOREIGN KEY (author_id)
        REFERENCES tbl_employee (id) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE tbl_client
(
	id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
	account_number VARCHAR(128) NOT NULL,
	clinet_email VARCHAR(128) NOT NULL,
	phone int(10) unsigned DEFAULT NULL,
	trader  VARCHAR(128) NOT NULL,
	saleperson VARCHAR(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


CREATE TABLE tbl_currency (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    currency_pair VARCHAR(128) NOT NULL,
    decimals decimals(128) NOT NULL,
    
);

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `emp_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  employee_name VARCHAR(128) NOT NULL,
   address VARCHAR(128) NOT NULL,
    phone int(10) unsigned DEFAULT NULL,
    email VARCHAR(128) NOT NULL,
    status VARCHAR(128) NOT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=558 ;




CREATE TABLE IF NOT EXISTS `tbl_clients` (
  `client_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `address` varchar(30) DEFAULT NULL,
  `account` varchar(128) DEFAULT NULL,
 
  `telephone1` varchar(20) DEFAULT NULL,
 
  `email` varchar(50) DEFAULT NULL,
  `emp_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  KEY `voucher_id` (`emp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=590 ;


CREATE TABLE IF NOT EXISTS `tbl_currencys` (
  `currency_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `currency_pair` VARCHAR(128) NOT NULL,
  `decimals`decimal(50,0) DEFAULT NULL,
 PRIMARY KEY (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=558 ;

CREATE TABLE IF NOT EXISTS `tbl_trades` (
  `trade_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(10) unsigned NOT NULL  ,
  `account` varchar(100) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL ,
  `open_price` decimal(50,0) DEFAULT NULL,
  `close_price`decimal(50,0) DEFAULT NULL,
  `open_date` varchar(10) DEFAULT NULL,
  `close_date` varchar(10) DEFAULT NULL,
  `net_result` decimal(50,0) DEFAULT NULL,
  `currency_id` int(10) unsigned NOT NULL  ,
  
  PRIMARY KEY (`trade_id`),
  KEY `client_id` (`client_id`),
  KEY `currency_id` (`currency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=512 ;



ALTER TABLE `tbl_clients`
  ADD CONSTRAINT `tbl_clients_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `tbl_users` (`emp_id`) ON DELETE SET NULL ON UPDATE SET NULL;

  ALTER TABLE `tbl_trades`
  ADD CONSTRAINT `tbl_trades_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `tbl_clients` (`client_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_trades_ibfk_2` FOREIGN KEY (`currency_id`) REFERENCES `tbl_currencys` (`currency_id`) ON DELETE SET NULL ON UPDATE SET NULL;