select Dname,count(Ssn) from employee,department
    where Dno=Dnumber group by Dname having avg(Salary)>=80000;