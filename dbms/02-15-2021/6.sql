select * from employee 
    where Dno in (select Dnumber from department 
        where Dname in ('Research', 'Headquaters'));
