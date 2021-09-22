<?php
$firstnameErr = $lastnameErr = $emailErr = $passwordErr = "";
$firstname = $lastname = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if (empty($_POST["firstname"]))
    {
        $firstnameErr = "Firstname is Required";
    }
    else
    {
        $firstname = test_input($_POST["firstname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $firstname))
        {
            $firstnameErr = "Only alphabets and white space are allowed";

        }
    }
    if (empty($_POST["lastname"]))
    {
        $lastnameErr = "Lastname is Required";
    }
    else
    {
        $lastname = test_input($_POST["lastname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $lastname))
        {
            $lastnameErr = "Only alphabets and white space are allowed";
        }
    }

    if (empty($_POST["email"]))
    {
        $emailErr = "Email is Required";
    }
    else
    {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["password"]))
    {
        $passwordErr = "Password is Required";
    }
    else
    {
        if ($_POST["password"] == 123456){
        $password = test_input($_POST["password"]);

        }else{
            $passwordErr = "Invalid Password";

        }

        
    }
}

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

?>

<html>
   <style>
   .error{
    color: darkred;
   }
</style>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>


 

 <p><span class="error">* Required Field</span></p>
 <form method="post" action="index.php">
  <label>Firstname: <input type="textbox" name="firstname" placeholder="Enter the firstname"/> 
  <span class="error">* <?php echo "$firstnameErr";?> </span>
  </label><br><br>
  <lable>Lastname:  <input type="textbox" name="lastname" placeholder="Enter the lastname"/>
  <span class="error">* <?php echo "$lastnameErr";?> </span>
  </lable><br><br>
  <label>Email: <input type="email" name="email"/>
  <span class="error">* <?php echo "$emailErr";?> </span>
  </label><br><br>
<label>Password: <input type="password" name="password"/>
  <span class="error">* <?php echo "$passwordErr";?> </span>
</label><br><br>
  <input type="submit" name="submit" value="submit" /></label><br/>
 </form> 

  
  <?php
echo "<h2>Your Input:</h2>";
echo $firstname;
echo "<br>";
echo $lastname;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
?>

 </body>
</html>





 