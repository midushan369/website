<?php

function validatepost($post)
{
    
    $errors = array();

    if(empty($post['title']))
    {
        array_push($errors, 'Title is required');
    }
    if(empty($post['body']))
    {
        array_push($errors, 'Body is required');
    }
    
    $existingpoast = selectOne('post', ['title' => $post['title']]);
    if ($existingpoast) {
        array_push($errors, 'post already exists');
    }
    return $errors;
}

