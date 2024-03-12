<?php

//A function to validate an email and a password using Regex.


function validateEmail($email) {
    
    $pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i';

    return preg_match($pattern, $email) === 1;
}


$email1 = "author@geeksforgeeks.com";
$email2 = "invalid-email";

if (validateEmail($email1)) {
    echo "$email1 is a valid email address.\n";
} else {
    echo "$email1 is an invalid email address.\n";
}

if (validateEmail($email2)) {
    echo "$email2 is a valid email address.\n";
} else {
    echo "$email2 is an invalid email address.\n";
}


function validatePassword($password) {
    
    $pattern = '/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z]).{8,}$/';

    return preg_match($pattern, $password) === 1;
}


$password1 = "GeeksforGeeks@123";
$password2 = "weakpass";

if (validatePassword($password1)) {
    echo "$password1 is a strong password.\n";
} else {
    echo "$password1 is not a strong password.\n";
}

if (validatePassword($password2)) {
    echo "$password2 is a strong password.\n";
} else {
    echo "$password2 is not a strong password.\n";
}
?>
