select E1.Fname,E1.Lname from Employee E1,Employee E2
    where E1.Super_ssn=E2.Ssn and E2.Fname='Franklin' and E2.Lname='Wong';