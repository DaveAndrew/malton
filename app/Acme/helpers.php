<?php

function errors_for($attribute, $errors)
{
    return $errors->first($attribute, '<span class="error">:message</span>');
}

function gravatar_url($email)
{
    return 'http://www.gravatar.com/avatar/' . md5($email) . '?s=40';
}
