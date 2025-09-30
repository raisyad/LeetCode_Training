# Write your MySQL query statement below
DELETE x
FROM Person x
JOIN Person y
ON x.email = y.email
AND x.id > y.id;