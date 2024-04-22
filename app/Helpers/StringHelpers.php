<?php

    function limit_words($string, $limit) {
        $words = explode(' ', $string);
        return implode(' ', array_slice($words, 0, $limit));
    }