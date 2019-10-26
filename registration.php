<?php

$firstName= filter_input(INPUT_POST, "firstName");
$lastName= filter_input(INPUT_POST, "lastName");
$birthday=filter_input(INPUT_POST, "birthday");
$email= filter_input(INPUT_POST, "email");
$password= filter_input(INPUT_POST, 'password');
$doubleCheck=strpos($email,'a');

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
    if (empty($firstName)) {
        $firstNameError = "Must provide your first name.";
    }
    if (empty($lastName)) {
        $lastNameError = "Must provide your last name.";
    }
    if (empty($birthday)) {
        $birthdayError = "Must provide your birthday.";
    }
    if (empty($email)) {
        $emailError = "Must type in a valid email.";
    } elseif ($doubleCheck == false) {
        $emailError = "Email is not valid.";
    }

    if (empty($password)) {
        $passwordError = "Must type in a valid password.";
    } elseif (strlen($password) <= 8) {
        $passwordError = "Password must be at least 8 characters long.";
    }
}
?>

<html>

<head><title> Registration Form </title></head>
<body>

    <h2> Registration Information </h2>

<div>
    First Name: <?php echo $firstName; ?>
    <span <span class="error"> <?php echo $firstNameError; ?> </span>
</div>
<div>
    Last Name: <?php echo $lastName; ?>
    <span <span class="error"> <?php echo $lastNameError; ?> </span>
</div>
<div>
    Birthday: <?php echo $birthday; ?>
    <span <span class="error"> <?php echo $birthdayError; ?> </span>
</div>
<div>
    Email: <?php echo $email; ?>
    <span <span class="error"> <?php echo $emailError;?></span>
</div>
<div>
    Password: <?php echo $password; ?>
    <span <span class="error"> <?php echo $passwordError;?></span>
</div>
</body>
</html>








    }