Select Fname, Minit, Lname, Address from (employee join works_on on Ssn=Essn)
    where Pno in (Select Pnumber from project where Plocation='Houston') and
        Dno not in (Select Dnumber from dept_locations where Dlocation='Houston');