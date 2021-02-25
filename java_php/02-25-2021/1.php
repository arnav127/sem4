<html>
    <head>
        <title>
			Validation Form
		</title>
		<style>
            .error {color: #FF0000;}
        </style>
	</head>
	<body style="background-color:powderblue;">
        <?php

            function test_input($data) 
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }

            $nameErr = $emailErr = $mobileErr = $ageErr = "";
            $name = $email = $mobile = $age = "";

            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                if(empty($_POST["name"]))
                    $nameErr = "Name is required";
                else
                {
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$_POST["name"])) 
                    {
                        $nameErr = "Name cannot contain numbers and characters";
                    }
                    else
                        $name = test_input($_POST["name"]);
                }
                if(empty($_POST["email"]))
                    $emailErr = "Email is required";
                else
                {
                    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
                        $emailErr = "Invalid email format";
                      }
                    else
                        $email = test_input($_POST["email"]);
                }
                if(empty($_POST["mobile"]))
                    $mobileErr = "Mobile Number is required";
                else
                {
                    if (!preg_match("/^[0-9]{10}$/",$_POST["mobile"])) 
                    {
                        $mobileErr = "Number is invalid";
                    }
                    else
                        $mobile = test_input($_POST["mobile"]);
                }
                if(empty($_POST["age"]))
                    $ageErr = "Age is required";
                else
                {
                    if ($_POST["age"] < 20 or $_POST["age"]>40) 
                    {
                        $ageErr = "Age should be between 20 and 40";
                    }
                    else
                        $age = test_input($_POST["age"]);
                }
            }
        ?>
        <h1>PHP Validation Form</h1>
        <form method="post" action= "<?php echo ($_SERVER["PHP_SELF"]);?>">
            <table>
                <tr>
                    <td>Name: </td>
                    <td><input type="text" name="name"></td>
                    <td class="error"><?php echo $nameErr; ?></td>
                </tr>
                <tr>
                    <td>E-mail: </td>
                    <td><input type="text" name="email"></td>
                    <td class="error"><?php echo $emailErr; ?></td>
                </tr>
                    <td>Mobile No: </td>
                    <td><input type="number" name="mobile"></td>
                    <td class="error"><?php echo $mobileErr; ?></td>
                </tr>
                    <td>Age: </td>
                    <td><input type="number" name="age"></td>
                    <td class="error"><?php echo $ageErr; ?></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
        </form>

        <?php
            if($_SERVER["REQUEST_METHOD"]=="POST" and $nameErr =="" and $emailErr=="" and $mobileErr=="" and $ageErr=="")
            {
                echo "<h2>Data Entered: </h2>";
                echo "<h3><table>";
                echo "<tr><td>NAME: </td><td>" . $name . "<td />";
                echo "<tr><td>EMAIL ID: </td><td>" . $email . "<td />";
                echo "<tr><td>MOBILE NO: </td><td>" . $mobile . "<td />";
                echo "<tr><td>AGE: </td><td>" . $age . "<td /><table></h3>";
            }
            $nameErr="";
            $emailErr="";
            $mobileErr="";
            $ageErr="";
        ?>

    </body>
</html>