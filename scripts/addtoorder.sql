use onaopemipo;

DELIMITER //
CREATE PROCEDURE addToOrder075(IN poNo int, IN partNo int, IN qty int, IN price decimal(10,2))
BEGIN
insert into Lines075 (poNo075, partNo075, qty075, priceOrdered075)
values (poNo, partNo, qty, price);
END;