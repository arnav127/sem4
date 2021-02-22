select Fname, Salary*1.1 New_Salary from employee
    where Ssn in (select Essn from works_on
        where Pno = (select Pnumber from project
            where Pname = 'ProductX'));