<?php

if (!function_exists('array_keys_exists')) {
    /**
     * Checks if the given indexes exists in the array.
     *
     * @param array $keys
     * @param array $arr
     * @return bool
     */
    function array_keys_exists(array $keys, array $arr)
    {
        return !array_diff_key(array_flip($keys), $arr);
    }
}
