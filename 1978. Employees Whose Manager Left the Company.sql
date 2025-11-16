# Write your MySQL query statement below
SELECT employee_id
FROM Employees
WHERE manager_id not in (SELECT employee_id FROM Employees) AND salary < 30000
ORDER BY employee_id;