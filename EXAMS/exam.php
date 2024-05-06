<?php

JOIN:// inner join  match value ### "SELECT u.* , l.* FROM myadmin u INNER JOIN users l ON u.username = l.username"
JOINnormal:// "SELECT column FROM table1 INNER JOIN table2 ON  table1.column = table2.column"; 
JOINleft:// LEFT join  match value and not match on left table first tabl "SELECT column FROM tabl1  INNER JOIN table2  ON tabl1.column = table2.column";
JOINright:// right join  match value and not match on right table last tabl "SELECT column FROM tabl1  INNER JOIN table2  ON tabl1.column = table2.column"
ORDERBY://  select * from tbname order by prise
ORDERBy://3aks tijah tartib select * from tbname order by prise DESC
NOTE://  select * from tbname WHERE NOT username='samir';
NOTLIKE://  SELECT * from tbname WHERE  username NOT LIKE 'samir%';
NOTBETWEEN://SELECT * FROM tbname WHERE id NOT BETWEEN 10 AND 60;
ISNULL:// SELECT * FROM data6  WHERE username IS NOT NULL
MINMAX://select MIN(prise) from tbname // select MAX(prise) from tbname
COUNT://SELECT COUNT(DISTINCT PRISE) FROM tbname; ## xhal kyn d khitilafat f prise ky3tik number
SUM://SELECT SUM(id) FROM data6  ##sum majmo3 
AVG:// SELECT AVG(Price) FROM tbname ## 9IMA MOTAASITA
LIKE://select * frim tbname WHERE username LIKE 'sa%'  '%ami%' '%ir' &  '_abcd'#aniy harf  'L___on' '[asdfasd]%'#aniy harf '[a-f]%'#mn ila ;
AAS://SELECT CustomerID AS id FROM Customers; ## fake name




UPDATE://"UPDATE tbname SET lastname='Doe' WHERE id=2";
INSERT://INSERT INTO tbname (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com');";
DELET://"DELETE FROM tbname WHERE id=3"
LIMIT://KATRTB KOLX "SELECT * FROM Orders LIMIT 30"

?>
