<?php

function validateUser($user)
{
    
    $errors = array();

    if(empty($user['Username']))
    {
        array_push($errors, 'Username is required');
    }
    if(empty($user['email']))
    {
        array_push($errors, 'Email is required');
    }
    if(empty($user['password']))
    {
        array_push($errors, 'password is required');
    }
    if($user['passwordConf'] !== $user['password'] )
    {
        array_push($errors, 'password do not match');
    }

    $existingUser = selectOne('user', ['Email' => $user['email']]);
    if ($existingUser) {
        array_push($errors, 'Email already exists');
    }
    return $errors;
}

function validateLogin($user)
{
    
    $errors = array();

    if(empty($user['Username']))
    {
        array_push($errors, 'Username is required');
    }
  
    if(empty($user['password']))
    {
        array_push($errors, 'password is required');
    }
   
    return $errors;
}