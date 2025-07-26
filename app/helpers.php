<?php 

function mail_validation($email)
{    
    return (bool)filter_var($email, FILTER_VALIDATE_EMAIL); // Basic email validation logic
}