<?php

if (!function_exists('array_search_multi')):
    /**
     * Searches the array for a given values and returns all occurences
     * if successfully find or false case nothing found.
     *
     * @param $array
     * @param $search
     * @return array|boolean
     */
    function array_search_multi($array, $search)
    {
        $result = [];

        foreach ($array as $key => $value) {
            foreach ($search as $k => $v) {
                // If the array element does not meet the search condition then continue to the next element
                if (!isset($value[$k]) || $value[$k] != $v)
                    continue 2;
            }

            $result[] = $key;
        }

        return $result ? $result : false;
    }
endif;
