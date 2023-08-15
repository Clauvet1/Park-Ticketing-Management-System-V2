CREATE TABLE normal_ticket(
    normal_id int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    customer_name varchar(20) not null,
	num_of_adults int(10),
    num_of_children int(10),
    ticket_for varchar(20) NOT NULL,
    total_cost int(20) NOT NULL,
    customer_change int(20) NOT NULL
);

CREATE TABLE manage_ticket(
    manage_id int(11) AUTO_INCREMENT PRIMARY KEY  NOT NULL,
    adult_price int(10),
	adult_sit_num int(10),
    child_price int(10),
    child_sit_num int(10)
);