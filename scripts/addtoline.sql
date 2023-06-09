use onaopemipo;

DELIMITER //
CREATE PROCEDURE addToLine075(IN poNo int, IN partNo int, IN qty int)
BEGIN
UPDATE Lines075
SET qty075 = qty075 + qty
where poNo075 = poNo and partNo075 = partNo;
END;