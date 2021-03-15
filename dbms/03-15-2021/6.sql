select fname,minit,lname from employee
    where not exists
        (select essn from works_on where ssn = essn);