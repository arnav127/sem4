select Fname, Minit, Lname from employee
    where not exists
        (select Pnumber from project where not exists
            (select Pno from works_on where Pnumber=Pno and Essn=Ssn));