-- Create a new database called 'eduwork'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'eduwork'
)
CREATE DATABASE'eduwork'
GO

CREATE TABLE products (
    ID INT(3) PRIMARY KEY,
    NAMA VARCHAR(255) NOT NULL,
    HARGA INT(100) NOT NULL,
    STOK INT(100) NOT NULL
);

CREATE TABLE user (
    ID INT(3) PRIMARY KEY,
    NAMA VARCHAR(255) NOT NULL,
    EMAIL VARCHAR(255) NOT NULL UNIQUE,
    PASSWORD VARCHAR(255) NOT NULL
);

CREATE TABLE orders (
    ORDER_ID INT(3) PRIMARY KEY,
    USER_ID INT(3) NOT NULL,
    PRODUCT_ID INT(3) NOT NULL,
    QUANTITY INT(100) NOT NULL,
    TOTAL INT(100) NOT NULL,
    FOREIGN KEY (USER_ID) REFERENCES user(ID),
    FOREIGN KEY (PRODUCT_ID) REFERENCES products(ID)
);


INSERT INTO products (ID, NAMA, HARGA, STOK) VALUES
(1, 'Laptop', 15000000, 10),
(2, 'Mouse', 150000, 50),
(3, 'Keyboard', 300000, 30),
(4, 'Monitor', 2000000, 20),
(5, 'Printer', 2500000, 15),
(6, 'Webcam', 500000, 25),
(7, 'Headset', 400000, 40),
(8, 'External HDD', 1000000, 10),
(9, 'USB Flash Drive', 100000, 100),
(10, 'Smartphone', 5000000, 8);


INSERT INTO user (ID, NAMA, EMAIL, PASSWORD) VALUES
(1, 'Alice', 'alice@example.com', 'password123'),
(2, 'Bob', 'bob@example.com', 'password123'),
(3, 'Charlie', 'charlie@example.com', 'password123'),
(4, 'David', 'david@example.com', 'password123'),
(5, 'Eve', 'eve@example.com', 'password123'),
(6, 'Frank', 'frank@example.com', 'password123'),
(7, 'Grace', 'grace@example.com', 'password123'),
(8, 'Hank', 'hank@example.com', 'password123'),
(9, 'Ivy', 'ivy@example.com', 'password123'),
(10, 'Jack', 'jack@example.com', 'password123');


INSERT INTO orders (ORDER_ID, USER_ID, PRODUCT_ID, QUANTITY, TOTAL) VALUES
(1, 1, 1, 1, 15000000),
(2, 2, 2, 2, 300000),
(3, 3, 3, 1, 300000),
(4, 4, 4, 1, 2000000),
(5, 5, 5, 1, 2500000),
(6, 6, 6, 2, 1000000),
(7, 7, 7, 1, 400000),
(8, 8, 8, 1, 1000000),
(9, 9, 9, 5, 500000),
(10, 10, 10, 1, 5000000);

select * from products;
select * from user;
select * from orders;

update products set stok = 5 where id=1;

delete from products where id=10;
-- gak bisa soalnya kepake di orders yang id 10nya

insert into products (ID, NAMA, HARGA, STOK) values (11, 'Smartwatch', 2000000, 20);
delete from products where id=11;