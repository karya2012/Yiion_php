<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Form validation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>

    <style>
    .error {
        color: red;
    } 
     </style>
<!-- class erroe from span line 79 -->

</head>
<body>

<?php 
$nameErr= $emailErr=$passErr=$genderErr=" ";
$name = "";
$email = "";
$password = "";
$website = "";
$comment = "";
$gender = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $nameErr = "name is required";
    }
    else{
    $name = test_input($_POST["name"]);
    }

    if(empty($_POST["email"])){
        $emailErr = "email is required.";
    }
    else{
    $email = test_input($_POST["email"]);
    }

    if(empty($_POST["password"])){
        $passwordErr = "password is required";
    }
    else{
    $password = test_input($_POST["password"]);
    }

    $website = test_input($_POST["website"]);
    $comment = test_input($_POST["comment"]);


    if(empty($_POST["gender"])){
        $genderErr = "gender is required";
    }
    else{
    $gender = test_input($_POST["gender"]);
    }
}

#The $_SERVER["PHP_SELF"] is a super global variable that returns the filename of the currently executing script.
#The htmlspecialchars() function converts special characters to HTML entities.


#GET == visible to everyone (all variable names and values are displayed in the URL)
#POST == invisible to others (all names/values are embedded within the body of the HTTP request)
function test_input($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
?>
 
<h2> php form validation</h2>
<p><span class="error">*required field</span></p>
<form method = "post"
     action = "
     <?php 
     echo htmlspecialchars($_SERVER["PHP_SELF"]);
     ?>">

     Name: <input type="text"  name= "name">
     <span class="error">* <?php echo $nameErr; ?> </span>
     <br> <br>
     email: <input type= "text" name="email">
     <span class="error">* <?php echo $emailErr; ?> </span>
     <br> <br>
     password: <input type="text" name="password">
     
     <br> <br>
     werbsite: <input type="text" name="website">
    
     <br> <br>
     comment: <textarea name="comment"  rows="5" cols="40"></textarea>

     <br><br>
     Gender: 
     <br>
     <label><input type ="radio" name="gender" value="female">Female</label> <br>
     <label><input type ="radio" name="gender" value="male">Male</label><br>
     <label><input type ="radio" name="gender" value="other">Other</label>
     
     <span class="error">* <?php echo $genderErr; ?> </span>
     <br><br>
     <input type="submit" name="submit" value="Submit">
</form>

<?php
echo "your input :";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $password;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
echo "<br>";
?>

    
</body>
</html>