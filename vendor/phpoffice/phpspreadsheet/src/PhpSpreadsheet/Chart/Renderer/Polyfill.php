<?php

namespace LWVendor;

// This is a dirty workaround to output JpGraph charts even when antialiasing is not available
if (!\function_exists('imageantialias')) {
    function imageantialias(...$args) : void
    {
        // Do nothing
    }
}