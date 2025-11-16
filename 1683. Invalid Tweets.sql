# Write your MySQL query statement below
select tweet_id from tweets
WHERE LENGTH(tweets.content) > 15;