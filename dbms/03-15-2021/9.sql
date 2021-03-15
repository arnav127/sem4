Select Lname from employee,department
    where Ssn = Mgr_ssn and not exists (select dependent_name from dependent where Mgr_ssn=Ssn);