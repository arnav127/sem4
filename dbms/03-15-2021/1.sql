select Fname,Minit,LName from employee,works_on,project
    where Ssn=Essn and Pno=Pnumber and Dno=5 and hours>=10 and Pname='ProductX';