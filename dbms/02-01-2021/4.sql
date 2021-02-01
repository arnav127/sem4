alter table department
   add constraint foreign key (Mgr_ssn) references employee (Ssn);

alter table employee
   add constraint foreign key (Super_ssn) references employee (Ssn);

alter table employee
   add constraint foreign key (Dno) references department (Dnumber);

