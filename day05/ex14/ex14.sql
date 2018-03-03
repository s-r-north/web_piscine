SELECT floor_number AS 'floor', SUM(nb_seats) as 'seats' FROM cinema
GROUP BY floor_number ORDER BY SUM(nb_seats) DESC;
