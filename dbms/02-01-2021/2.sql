create table employee
(
	Fname varchar(30) not null,
	Minit char not null,
	Lname varchar(30) not null,
	Ssn bigint not null,
	Bdate date,
	Address text,
	Sex char,
	Salary decimal,
	Super_ssn bigint,
	Dno int not null,
		primary key (Ssn)
);


create table department
(
	Dname varchar(30) not null,
	Dnumber int not null,
	Mgr_ssn bigint not null,
	Mgr_start_date date null,
    unique (Dname),
    primary key (Dnumber),
    foreign key (Mgr_ssn) references employee (Ssn)
);

create table dept_locations
(
	Dnumber int not null,
	Dlocation varchar(30) not null,
    primary key (Dnumber, Dlocation),
    foreign key (Dnumber) references department (Dnumber)
);

create table project
(
	Pname varchar(30) not null,
	Pnumber int not null,
	Plocation varchar(30) not null,
	Dnum int not null,
    unique(Pname),
    primary key (Pnumber),
    foreign key (Dnum) references department (Dnumber)
);

create table works_on
(
	Essn bigint not null,
	Pno int not null,
	Hours decimal not null,
    primary key (Essn, Pno),
    foreign key (Essn) references employee (Ssn),
    foreign key (Pno) references project (Pnumber)
);

create table dependent
(
	Essn bigint not null,
	Dependent_name varchar(30) not null,
	Sex char not null,
	Bdate date null,
	Relationship varchar(30) null,
    primary key (Essn, Dependent_name),
    foreign key (Essn) references employee (Ssn)
);

