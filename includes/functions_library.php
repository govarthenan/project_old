<?php

function sanitize_input($input)
{
    // sanitize input data
    return htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
}
