<html>
<style>
#London {background-color:#353535;}
#mid {background-color:#f1e4d5;}
body{background-repeat: no-repeat;background-size:cover;}
</style>
<body>
<?php
session_start();

if(isset($_POST["login"]))
{
    if($_POST["login"])
    {
        
        $password = $_POST["psw"];
        $name = $_POST["user"];
             $user = 'root';
             $pass='';
             $db='motelpro';

             $mysqli= new mysqli('localhost',$user,$pass,$db) or die("LOOSER");

                                    if (mysqli_connect_error())
                                    {
                                            echo 'Error: Could not connect to database. Please try again later.';
                                            exit();
                                    }

                                    $mysqli->select_db("motelpro")
                                            or die("<p>Unable to select the database.</p>"
                                            . "<p>Error code " . mysqli_errno($mysqli)
                                            . ": " . mysqli_error($mysqli)) . "</p>";

                                    $tableName = "Customers";

                                    $SQLstring1 = "SELECT * FROM $tableName WHERE c_name = '$name' AND c_pass = '$password' AND admin =0" ;
                                    
                                    $result = $mysqli->query($SQLstring1);
                                    while ($row = $result->fetch_assoc()) {
                                        $_SESSION["cid"]=$row['c_id'];
                                        $_SESSION["nm"]=$row['c_name'];
                                    }
                                    $numrows = mysqli_num_rows($result);
            if($numrows)
               {
               #echo 'Hello';
                   header("Location: http://localhost/index.html");

               }
            else
               {
                header("Location: http://localhost/login_new.php");
                echo 'Enter valid credentials';
                   
                }

    }
}

if(isset($_POST["loginad"]))
{
    if($_POST["loginad"])
    {

        $password = $_POST["psw"];
        $name = $_POST["user"];
        $user = 'root';
             $pass='';
             $db='motelpro';

             $mysqli= new mysqli('localhost',$user,$pass,$db) or die("LOOSER");

                                    if (mysqli_connect_error())
                                    {
                                            echo 'Error: Could not connect to database. Please try again later.';
                                            exit();
                                    }

                                    $mysqli->select_db("motelpro")
                                            or die("<p>Unable to select the database.</p>"
                                            . "<p>Error code " . mysqli_errno($mysqli)
                                            . ": " . mysqli_error($mysqli)) . "</p>";

                                    $tableName = "Customers";

                                    $SQLstring1 = "SELECT * FROM $tableName WHERE c_name = '$name' AND c_pass = '$password' AND admin =1" ;
                                    
                                    $result = $mysqli->query($SQLstring1);
                                    $numrows = mysqli_num_rows($result);
                                    if($numrows)
                                       {
                                           header("Location: http://localhost/adorders.php");
                                       }
                                       else
               {
                header("Location: http://localhost/login_new.php");
                echo 'Please enter Admin Credentials';
                   
                }
    }
}




?>
<form method="post" >
<div>
     <body background = "grey.png" >
<center>
  <br><br>
<h2>  <font color=#cc4151>Username:</font>
 <input type="text" placeholder="Enter Username" name="user">
        <br><br>
      <font color=#cc4151>Password: </font> <input type="password" placeholder="Enter Password" name="psw"
         >
        <br><br><h2>
        <input type="submit" name="login" value="LOG IN" > &nbsp;&nbsp;&nbsp; <input type="submit" name="loginad" value="LOG IN AS ADMIN" > 
        <br>
        <h2><font color=#ffb6c1>New User?</font> <a href="test.php"> Sign UP </a></h2>
        <br>
        <br>
        

    </center>
</form>
</body>
</html>
