create table CSE as
    select Enrollment_Number, First_Name, Middle_Name, Last_Name from student
    where Branch = 'CSE';

select * from CSE;