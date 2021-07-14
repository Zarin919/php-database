
<?php

 $username = $password = "";
 $usernameErr = $passwordErr = "";
$isValid = true;
$successfulMessage = $errorMessage = "";



if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $username =$_POST['username'];
$password =$_POST['password'];
if(empty($username)) {
$usernameErr ="Username can not be empty";
$isValid = false;
}

if(empty($password)) {
$passwordErr ="Password can not be empty";
$isValid = false;
}

if($isValid){
$res = register($username, $password);
if($res){
$successfulMessage = "Successfully saved";

}
  else {
$errorMessage = "Error while saving";

}
}
    
}
 function test_input($data){
$data = trim($data);
$data = stripLashes($data);
$data = htmlspecialchars($data);
return $data;


}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <h1>Registration Form</h1>
 


<form method="post" action="" name="registration">

        <fieldset>
            <legend>Basic Information:</legend>

        <label for="fname">First Name:</label>
        <input type="text" name="Firstname"><br>

        <label for="lname">Last name: </label>
        <input type="text" name="Lastname"><br>


            Gender:<br>
            <input type="radio" name="Gender" value="Male">Male<br>
            <input type="radio" name="Gender" value="Female">Female<br>
            <input type="radio" name="Gender" value="Other">Other<br>


         <label for="DOB">DOB</label>
         <input type="date" name="DOB"><br>

         Religion:<br>
            <select name="Religion" > 
                <option value="islam" name="islam" >islam</option> 
                <option value="hindu" name="hindu" >hindu</option> 
            </select>
            </fieldset>
            <br><br><br>




        <fieldset>
        <legend>Contact Information:</legend>
 

        <label for="presentaddress">presentaddress:</label>
        <textarea id="presentaddress" name="presentaddress" rows="2" cols="20"></textarea><br>

        <label for="Permanentaddress">Permanentaddress:</label>
        <textarea id="Permanentaddress" name="Permanentaddress" rows="2" cols="20"></textarea><br>

        
        <label for="phone">phone: </label>
        <input type="phone" name="phone" required><br>

        <label for="Email">Email: </label>
        <input type="Email" name="Email" required><br>

        <label for="Lienk">Personal Website Lienk : </label>
         <input type="Lienk" name="Lienk" required><br>
 
        
        
        </fieldset>
                <legend>Login Info:</legend>

        <br><br>
        <fieldset>
                <label for="username">User Name: </label>
        <input type="username" name="uname" required><br>

        <label for="password">Enter Password :</label>
         <input type="password" name="pass" required><br>
         <input type="submit" name="submit"value="register">
        </fieldset>
    </form>
</body>
</html>