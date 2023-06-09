use onaopemipo;

DELIMITER //
CREATE PROCEDURE createOrder075(IN poNo int, IN clientNo int, IN dateOf datetime, IN statusOf varchar(45))
BEGIN
insert into POs075 (poNO075, clientCompId075, dateOfPO075, status075)
values (poNo, clientNo, dateOf, statusOf);
END;