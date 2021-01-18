alter table CSE
    add email_id varchar(20);

alter table CSE
    modify column email_id varchar(40);

alter table CSE
    drop column email_id;