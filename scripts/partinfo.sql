use onaopemipo;

DELIMITER //
CREATE PROCEDURE partInfo075(IN ID int)
BEGIN
select partName075, currentPrice075, qoh075
from Parts075
where partno075 = ID;
END;