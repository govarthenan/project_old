<?php

function sanitize_input($input)
{
    // sanitize input data
    $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    return $input;
}
