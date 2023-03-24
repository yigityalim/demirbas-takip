<?php

// Path: app/helpers.php
// Yardımcı fonksiyonlar


// env
function genv($key, $default = null)
{
    return Arrilot\DotEnv\DotEnv::get($key, $default);
}
