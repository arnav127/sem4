<?php
$servername='localhost:3307';
$username='root';
$password='';
$dbname='mydb';
$con=mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
    echo "server not connected";
}
if(!mysqli_select_db($con, $dbname))
{
    echo "database not connected";
}

function insertrec()
{
    global $con;
    $roll= $_POST['rollno'];
    $name= $_POST['name'];
    $age= $_POST['age'];
    $score= $_POST['score'];
    $query = "insert into student(rollno, name, age, score) values ($roll, '$name', $age, $score)";
    if(mysqli_query($con, $query))
    {
        echo "Data Inserted!";
    }
}
function display()
{
    global $con;
    $result = mysqli_query($con, "SELECT * FROM student");
    echo "
    <table>
        <thead>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Score</th>
        </thead>
        <tbody>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['rollno'] . "</td> <td>" . $row['name']. "</td> <td>" . $row['age']. "</td> <td>" . $row['score'];
        echo "</tr>";

    }
    echo "
    </tbody>
    </table>";
}

function search()
{
    global $con;

    $op = $_POST['field'];
    $vl = $_POST['val'];
    if($op == 'name')
    {
        $result = mysqli_query($con, "SELECT * FROM student where name='$vl'");

    }
    if($op == 'rollno')
    {
        $result = mysqli_query($con, "SELECT * FROM student where rollno=$vl");
        
    }
    if($op == 'age')
    {
        $result = mysqli_query($con, "SELECT * FROM student where age=$vl");
        
    }
    if($op == 'score')
    {
        $result = mysqli_query($con, "SELECT * FROM student where score=$vl");
        
    }
    echo "
    <table>
        <thead>
            <th>Roll Number</th>
            <th>Name</th>
            <th>Age</th>
            <th>Score</th>
        </thead>
        <tbody>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>" . $row['rollno'] . "</td> <td>" . $row['name']. "</td> <td>" . $row['age']. "</td> <td>" . $row['score'];
        echo "</tr>";

    }
    echo "
    </tbody>
    </table>";

}

?> 

<html>
    <head>
        <title>MY page</title>
        <style>
            @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,600);
            *, *:before, *:after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            }
            body {
            background: #dfdfdf;
            font-family: 'Open Sans', sans-serif;
            }
            .container {
            width: 100%;
            height: 100%;
            padding: 0 16px;
            display: flex;
            flex-flow: row nowrap;
            align-items: center;
            justify-content: center;
            }
            h2 {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            /* font-size: 1.2em; */
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: left;
            }
            table {
            background: #012B39;
            border-radius: 0.25em;
            border-collapse: collapse;
            margin: 1em;
            }
            th {
            border-bottom: 1px solid #364043;
            color: #E2B842;
            font-size: 1.2em;
            font-weight: 600;
            padding: 0.5em 1em;
            text-align: left;
            }
            td {
            color: #fff;
            font-weight: 400;
            padding: 0.65em 1em;
            }
            .disabled td {
            color: #4F5F64;
            }
            tbody tr {
            transition: background 0.25s ease;
            }
            tbody tr:hover {
            background: #014055;
            }
            form {
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            }
            form div, form label, form input, form textarea, form select {
            width: 100%;
            }
            .field:nth-of-type(2) {
            margin: 16px 0;
            }
            label, input, textarea {
            padding: 8px;
            }
            label, [placeholder] {
            color: #555;
            }
            label i {
            margin: 0 10px 0 0;
            }
            
            input, textarea {
            background: rgba(255, 255, 255, 0.5);
            border: none;
            border-radius: 4px;
            box-shadow: 0 8px 6px -6px #555;
            }
            
            textarea {
            resize: none;
            }
            textarea::-webkit-scrollbar {
            width: 0;
            }
            button {
            background: #2f4ad0;
            margin: 16px 0 50px 0;
            padding: 8px 16px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 8px 6px -6px #555;
            }
            
        </style>
    </head>
    <body>
    <div class="container">
        <div class="container">
            <form method="post"> 
                Name <input type="text" name="name" placeholder="Name..." /><br />
                Roll No <input type="number" name="rollno" placeholder="Roll Number..." /><br />
                Age <input type="number" name="age" placeholder="Age..." /><br />
                Score <input type="number" name="score" placeholder="Score..."/><br />
                <?php
                if(isset($_POST['Register'])) { 
                    insertrec(); 
                } 
                ?>
                <button type="submit" name=Register>Register</button>
                <button type="submit" name=Display>Display</button>
                Search
            <select id="field" name="field">
                <option value="name">Name</option>
                <option value="rollno">Roll No</option>
                <option value="age">Age</option>
                <option value="score">Score</option>
            </select>
            <input type="text" name="val" placeholder="Value to search..." /><br />
            <button type="submit" name=search>Search</button>
        </form>
        </div>
        <div class="container">
            <?php
                if(isset($_POST['Display'])) { 
                    display(); 
                } 
                if(isset($_POST['search'])) { 
                    search();
                }
            ?>

        </div>
    </div>
</body>
</html>