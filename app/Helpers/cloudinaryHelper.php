<?php

if (!function_exists('add_w_auto_to_cloudinary_url')) {
    function add_w_auto_to_cloudinary_url($url) {
        return substr_replace($url, 'w_auto/', strpos($url, 'upload/') + 7, 0);
    }
}
