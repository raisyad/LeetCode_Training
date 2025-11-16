# Write your MySQL query statement below
SELECT distinct author_id as id FROM Views
WHERE Views.author_id = Views.viewer_id ORDER BY Views.author_id asc;