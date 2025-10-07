# Write your MySQL query statement below
SELECT DISTINCT p1.customer_number
FROM Orders p1
JOIN Orders p2
ON p1.customer_number = p2.customer_number
WHERE p2.order_number > p1.order_number
GROUP BY p1.customer_number
ORDER BY COUNT(p1.customer_number) DESC
LIMIT 1;