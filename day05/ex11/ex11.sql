SELECT UPPER(last_name) AS 'NAME', first_name, subscription.price FROM member
INNER JOIN user_card ON user_card.id_user = member.id_member
INNER JOIN subscription ON subscription.id_sub = member.id_sub
WHERE subscription.price >= 42 ORDER BY last_name ASC, first_name ASC;
