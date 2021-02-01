\newpage

# 1. Create Company Database
Create company database

## 1.1. Source Code
```sql
create database `Company-191112034`;
```

## 1.2. Output
![Create Database](s1.png)

---

# 2. Create Tables

![Database Tables](database.png)

---

\newpage

## 2.1. Employee Table

### 2.1.1. Source Code
```sql
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
```

### 2.1.2. Output
![Table employee](s2.png)

---

\newpage

## 2.2. Department Table

### 2.2.1. Source Code
```sql
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
```

### 2.2.2. Output
![Table department](s3.png)

---

\newpage

## 2.3. Department Locations Table

### 2.3.1. Source Code
```sql
create table dept_locations
(
	Dnumber int not null,
	Dlocation varchar(30) not null,
    primary key (Dnumber, Dlocation),
    foreign key (Dnumber) references department (Dnumber)
);
```

### 2.3.2. Output
![Table dept_locations](s4.png)

---

\newpage

## 2.4. Project Table

### 2.4.1. Source Code
```sql
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
```

### 2.4.2. Output
![Table project](s5.png)

---

\newpage

## 2.5. Works On Table

### 2.5.1. Source Code
```sql
create table works_on
(
	Essn bigint not null,
	Pno int not null,
	Hours decimal not null,
    primary key (Essn, Pno),
    foreign key (Essn) references employee (Ssn),
    foreign key (Pno) references project (Pnumber)
);
```

### 2.5.2. Output
![Table works_on](s6.png)

---

\newpage

## 2.6. Dependent Table

### 2.6.1. Source Code
```sql
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
```

### 2.6.2. Output
![Table dependent](s7.png)

---

\newpage

## 2.7. Additional Foreign Keys

### 2.7.1. Source Code
```sql
alter table department
   add constraint foreign key (Mgr_ssn) references employee (Ssn);

alter table employee
   add constraint foreign key (Super_ssn) references employee (Ssn);

alter table employee
   add constraint foreign key (Dno) references department (Dnumber);
```

### 2.7.2. Output
![Foreign Keys](s14.png)

---

\newpage

# 3. Database ER Diagram
![ER Diagram](diagram.png)

\newpage

# 4. Add Records

![Data](data.png)

---

\newpage

## 4.1. Employee Table

### 4.1.1. Source Code
```sql
insert into employee
values
        ('John','B','Smith',123456789,'1965-01-09','731 Fondren, Houston TX','M',30000,333445555,5),
        ('Franklin','T','Wong',333445555,'1965-12-08','638 Voss, Houston TX','M',40000,888665555,5),
        ('Alicia','J','Zelaya',999887777,'1968-01-19','3321 Castle, Spring TX','F',25000,987654321,4),
        ('Jennifer','S','Wallace',987654321,'1941-06-20','291 Berry, Bellaire TX','F',43000,888665555,4),
        ('Ramesh','K','Narayan',666884444,'1962-09-15','975 Fire Oak, Humble TX','M',38000,333445555,5),
        ('Joyce','A','English',453453453,'1972-07-31','5631 Rice, Houston TX','F',25000,333445555,5),
        ('Ahmad','V','Jabbar',987987987,'1969-03-29','980 Dallas, Houston TX','M',25000,987654321,4),
        ('James','E','Borg',888665555,'1937-11-10','450 Stone, Houston TX','M',55000,null,1);
```

### 4.1.2. Output
![Table employee](s8.png)

---

\newpage

## 4.2. Department Table

### 4.2.1. Source Code
```sql
insert into department
values
       ('Research',5,333445555,'1988-05-22'),
       ('Administration',4,987654321,'1995-01-01'),
       ('Headquarters',1,888665555,'1981-06-19');

```

### 4.2.2. Output
![Table department](s9.png)

---

\newpage

## 4.3. Department Locations Table

### 4.3.1. Source Code
```sql
insert into dept_locations
values
    (1,'Houston'),
    (4,'Stafford'),
    (5,'Bellaire'),
    (5,'Sugarland'),
    (5,'Houston');

```

### 4.3.2. Output
![Table dept_locations](s13.png)

---

\newpage

## 4.4. Project Table

### 4.4.1. Source Code
```sql
insert into project
values
        ('ProductX',1,'Bellaire',5),
        ('ProductY',2,'Sugarland',5),
        ('ProductZ',3,'Houston',5),
        ('Computerization',10,'Stafford',4),
        ('Reorganization',20,'Houston',1),
        ('Newbenefits',30,'Stafford',4);
```

### 4.4.2. Output
![Table project](s10.png)


---

\newpage

## 4.5. Works On Table

### 4.5.1. Source Code
```sql
insert into works_on
values
       (123456789,1,32.5),
       (123456789,2,7.5),
       (666884444,3,40.0),
       (453453453,1,20.0),
       (453453453,2,20.0),
       (333445555,2,10.0),
       (333445555,3,10.0),
       (333445555,10,10.0),
       (333445555,20,10.0),
       (999887777,30,30.0),
       (999887777,10,10.0),
       (987987987,10,35.0),
       (987987987,30,5.0),
       (987654321,30,20.0),
       (987654321,20,15.0),
       (888665555,20,16.0);

```

### 4.5.2. Output
![Table works_on](s11.png)

---

\newpage

## 4.6. Dependent Table

### 4.6.1. Source Code
```sql
insert into dependent
values
    (333445555,'Alice','F','1986-04-04','Daughter'),
    (333445555,'Theodore','M','1983-10-25','Son'),
    (333445555,'Joy','F','1958-05-03','Spouse'),
    (987654321,'Abner','M','1942-02-28','Spouse'),
    (123456789,'Michael','M','1988-01-04','Son'),
    (123456789,'Alice','F','1988-12-30','Daughter'),
    (123456789,'Elizabeth','F','1967-05-05','Spouse');

```

### 4.6.2. Output
![Table dependent](s12.png)

---

\newpage

## 4.7. Output
![Employee Table](s15.png)

---
