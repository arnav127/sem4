select employee.Fname, employee.Lname, mgr.Fname, mgr.Lname
    from employee join employee mgr on employee.Super_ssn = mgr.Ssn;