# Write your MySQL query statement below
SELECT x1.name
FROM Customer x1
JOIN Customer x2
ON x1.id = x2.id
WHERE x2.referee_id IS NULL
OR x2.referee_id != 2;