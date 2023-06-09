use onaopemipo;

DELIMITER //
CREATE PROCEDURE listOrders075()
BEGIN
select * from POs075;
END;