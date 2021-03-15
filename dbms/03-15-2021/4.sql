select Pname,sum(hours) from (Project join works_on on Pnumber=Pno)
    group by Pname;