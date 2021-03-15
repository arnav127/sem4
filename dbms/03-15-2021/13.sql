select E1.Fname,E1.Lname from Employee E1
    where E1.salary > (select avg(E2.salary) from employee E2 where E1.Dno=E2.Dno);