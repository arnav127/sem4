Select Dname,avg(salary) from employee,department
    where Dno=Dnumber group by Dname;