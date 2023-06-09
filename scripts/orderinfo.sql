use onaopemipo;

DELIMITER //
CREATE PROCEDURE orderInfo075(IN ID int)
BEGIN
select partname075, qty075, priceOrdered075
from Lines075 join Parts075 using (partno075)
where pono075 = ID;
END;