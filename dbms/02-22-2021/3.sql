select Pnumber, Dnumber, Lname, Address, Bdate
    from project join department d on d.Dnumber = project.Dnum join employee e on e.Ssn = d.Mgr_ssn
        where Plocation='Stafford';