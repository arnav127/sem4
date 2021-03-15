select distinct Pno from employee, works_on
    where Ssn=Essn and Lname='Smith'
    union
    select distinct Pnumber from employee,project,department
        where Dnum=Dnumber and Mgr_ssn=Ssn and Lname='Smith';