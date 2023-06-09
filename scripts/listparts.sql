use onaopemipo;

DELIMITER //
CREATE PROCEDURE listParts075()
BEGIN
select partno075, partName075, currentPrice075
from Parts075;
END;