# Write your MySQL query statement below
SELECT a1.player_id, a1.event_date as first_login
FROM Activity a1
LEFT JOIN Activity a2
    ON a1.player_id = a2.player_id
    AND a2.event_date < a1.event_date
WHERE a2.player_id IS NULL;