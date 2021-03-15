select distinct Lname,Fname from employee E, works_on W1, works_on W2
    where W1.Essn=E.Ssn and W2.Essn=E.Ssn and W1.Pno <> W2.Pno;