<?php

$emailError = $passwordError ="";
$email= filter_input(INPUT_POST, "email");
$password= filter_input(INPUT_POST, 'password');
$doubleCheck=strpos($email,'@');

if ($_SERVER['REQUEST_METHOD']=="POST")
    {
    if (empty($email))
         {
            $emailError="Must type in a valid email.";
         }
        elseif ($doubleCheck == false)
             {
                $emailError = "Email is not valid.";
             }

    if (empty($password))
        {
            $passwordError="Must type in a valid password.";
        }
        elseif (strlen($password)<=8)
            {
              $passwordError="Password must be at least 8 characters long.";
            }
    }
?>

<html>

    <head><title> Login Data </title></head>
<body>

    <h2> Login Form </h2>
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

