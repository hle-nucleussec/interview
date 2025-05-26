CREATE TABLE customers
(
    id    INT PRIMARY KEY,
    name  VARCHAR(100),
    email VARCHAR(100) UNIQUE
);

CREATE TABLE orders
(
    id           INT PRIMARY KEY,
    customer_id  INT,
    total_amount DECIMAL(10, 2),
    order_date   DATE,
    FOREIGN KEY (customer_id) REFERENCES customers (id)
);

-- Time limit: 5 mins
-- Assume the above tables are already populated with data

-- Write a query to retrieve all customer names have either no order or with the total order amounts less than 10
-- sort by customer name