<?php

declare(strict_types=0);
ini_set('display_errors', '1');
error_reporting(E_ALL);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/css/style.css">

    <title>INNER JOIN, LEFT JOIN, RIGHT JOIN, Matter</title>

</head>

<body>

<div>
    <ul>
        <li><b><a href="/index.php">Home</a></b></li>
        <li><b><a href="/sql/index.php">SQL</a></b></li>
    </ul>
    <ul>
        <li><b class="topic">INNER JOIN</b> - bir nechta jadvaldan malumotlarni olishda ishlatiladi. <br>
            <img src="/sql/img/8/inner-join-1.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-2.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-3.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-4.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-5.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-6.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-7.png" alt=""> <br><br><br>
            <img src="/sql/img/8/inner-join-8.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">LEFT JOIN</b> - . <br>
            <img src="/sql/img/8/left-join-1.png" alt=""> <br><br><br>
            <img src="/sql/img/8/left-join-2.png" alt=""> <br><br><br>
            <img src="/sql/img/8/left-join-3.png" alt=""> <br><br><br>
            <img src="/sql/img/8/left-join-4.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">RIGHT JOIN</b> - . <br>
            <img src="/sql/img/8/right-join-1.png" alt=""> <br><br><br>
            <img src="/sql/img/8/right-join-2.png" alt=""> <br><br><br>
            <img src="/sql/img/8/right-join-3.png" alt=""> <br><br><br>
        </li>

        <li><b class="topic">JOINlar bo'yicha masalalar:</b> - . <br>
            <img src="/sql/img/8/matter-1.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-2.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-3.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-4.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-5.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-6.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-7.png" alt=""> <br><br><br>
            <img src="/sql/img/8/matter-8.png" alt=""> <br><br><br>
        </li>

        <h3>Homework</h3>
        <img src="/sql/img/8/homework-1.png" alt=""> <br><br><br>
        <div class="pre"><br>
            <pre>
                1) SELECT employees.firstName, employees.lastName, offices.city, offices.phone
                   FROM employees
                   JOIN offices ON employees.officeCode = offices.officeCode;

                2) SELECT customers.contactFirstName, customers.contactLastName,
                   orders.orderNumber, orders.orderDate, orders.requiredDate, orders.shippedDate
                   FROM customers
                   JOIN orders ON customers.customerNumber = orders.customerNumber
                   WHERE orders.customerNumber = 141;

                3) SELECT customers.contactFirstName, customers.contactLastName,
                   payments.checkNumber AS paymentDate, payments.paymentDate AS amount
                   FROM customers
                   JOIN payments ON customers.customerNumber = payments.customerNumber
                   WHERE customers.customerNumber = 141;

                4) SELECT orderdetails.orderNumber, orders.orderDate, orders.status, orderdetails.*
                   FROM orderdetails
                   JOIN orders ON orderdetails.orderNumber = orders.orderNumber;

                5) SELECT orderdetails.orderNumber, orders.orderDate, orders.shippedDate, orders.status,
                   products.productCode, products.productName, products.productVendor,
                   COUNT(orderdetails.quantityOrdered) AS quantityOrdered,
                   SUM(orderdetails.priceEach) AS totalPrice
                   FROM orderdetails
                   JOIN orders ON orderdetails.orderNumber = orders.orderNumber
                   JOIN products ON orderdetails.productCode = products.productCode
                   GROUP BY orderdetails.orderNumber;

            </pre>
            <br>
        </div>
        <br>

        <img src="/sql/img/8/homework-2.1.png" alt=""> <br><br><br>
        <img src="/sql/img/8/homework-2.2.png" alt=""> <br><br><br>
        <img src="/sql/img/8/homework-2.3.png" alt=""> <br><br><br>
        <div class="pre"><br>
            <pre>
                6) SELECT customers.contactFirstName, customers.contactLastName,
                   orders.orderDate, orders.shippedDate,
                   products.productName, products.productCode,
                   COUNT(orderdetails.quantityOrdered) AS quantityOrdered,
                   SUM(orderdetails.priceEach) AS totalPrice
                   FROM customers
                   JOIN orders ON customers.customerNumber = orders.customerNumber
                   JOIN orderdetails ON orders.orderNumber = orderdetails.orderNumber
                   JOIN products ON orderdetails.productCode = products.productCode
                   WHERE customers.customerNumber = 141
                   GROUP BY orders.orderNumber;

                7) SELECT productCode, productName, COUNT(orderNumber) AS quantityOrdered
                   FROM orderdetails
                   GROUP BY productCode, productName
                   ORDER BY COUNT(orderNumber) DESC LIMIT 10;

                8) SELECT orderdetails.productCode, products.productName,
                   COUNT(orderdetails.orderNumber) AS totalOrders,
                   SUM(orderdetails.priceEach * orderdetails.quantityOrdered) AS totalRevenue
                   FROM orderdetails
                   JOIN products ON orderdetails.productCode = products.productCode
                   GROUP BY orderdetails.productCode, products.productName
                   ORDER BY totalOrders ASC LIMIT 10;

                9) SELECT contactFirstName, contactLastName, YEAR(paymentDate) AS year,
                   SUM(amount) AS totalPayment
                   FROM customers
                   JOIN payments ON customers.customerNumber = payments.customerNumber
                   GROUP BY contactFirstName, contactLastName, YEAR(paymentDate)
                   ORDER BY contactLastName, contactFirstName, YEAR(paymentDate);

                10) SELECT customers.contactFirstName AS customerFirstName, customers.contactLastName AS customerLastName,
                    employees.firstName AS employeeFirstName, employees.lastName AS employeeLastName
                    FROM customers
                    JOIN employees ON customers.salesRepEmployeeNumber = employees.employeeNumber
                    ORDER BY customers.contactFirstName;
            </pre>
            <br>
        </div>
        <br>

        <img src="/sql/img/8/homework-3.png" alt=""> <br><br><br>
        <div class="pre"><br>
            <pre>
                11) SELECT orderdetails.productCode, products.productName,
                    COUNT(orderdetails.quantityOrdered) AS totalOrders
                    FROM orderdetails
                    JOIN orders ON orderdetails.orderNumber = orders.orderNumber
                    JOIN products ON orderdetails.productCode = products.productCode
                    WHERE YEAR(orders.orderDate) = 2003 AND MONTH(orders.orderDate) = 11
                    GROUP BY orderdetails.productCode, products.productName
                    HAVING totalOrders > 130;

                12) SELECT customers.contactFirstName, customers.contactLastName,
                    orders.orderDate, orders.orderNumber
                    FROM customers
                    JOIN orders ON customers.customerNumber = orders.customerNumber
                    WHERE YEAR(orders.orderDate) = 2003 AND MONTH(orders.orderDate) = 12
                    ORDER BY orders.orderNumber DESC LIMIT 1;

                13) SELECT customers.contactFirstName, customers.contactLastName,
                    orders.shippedDate, orders.orderNumber
                    FROM customers
                    JOIN orders ON customers.customerNumber = orders.customerNumber
                    WHERE YEAR(orders.orderDate) = 2003 AND MONTH(orders.orderDate) = 12
                    ORDER BY orders.orderNumber ASC LIMIT 1;

                14) SELECT customers.contactFirstName, customers.contactLastName,
                    COUNT(orders.orderNumber) AS totalOrders
                    FROM customers
                    JOIN orders ON customers.customerNumber = orders.customerNumber
                    WHERE YEAR(orders.orderDate) = 2003
                    GROUP BY customers.contactFirstName, customers.contactLastName
                    ORDER BY totalOrders DESC LIMIT 10;

                15) SELECT customers.contactFirstName, customers.contactLastName,
                    SUM(payments.amount) AS totalPayment
                    FROM customers
                    JOIN payments ON customers.customerNumber = payments.customerNumber
                    JOIN orders ON customers.customerNumber = orders.customerNumber
                    WHERE YEAR(payments.paymentDate) = 2004
                    GROUP BY customers.contactFirstName, customers.contactLastName
                    ORDER BY totalPayment DESC LIMIT 10;

                16) SELECT contactFirstName, contactLastName
                    FROM customers
                    WHERE customerNumber NOT IN (SELECT DISTINCT customerNumber FROM orders);
            </pre>
            <br>
        </div>
        <br>
    </ul>
</div>

</body>
</html>

