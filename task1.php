<?php

function sortFirstLetters(string $str): array
{
    $words = explode(" ", $str);
    $letters = array_map(function ($el) {
        return mb_strtolower(mb_substr($el, 0, 1));
    }, $words);
    $letters = array_unique($letters);
    sort($letters);
    return $letters;
}
