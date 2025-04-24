<?php
use App\Models\System;

if (!function_exists('system_key')) {
    function system_key($key, $default = null)
    {
        return System::where('key', $key)->value('value') ?? $default;
    }
}