<?php

function getTime(float $degrees): array
{
    if ($degrees >= 360) {
        return getTime($degrees - 360);
    }
    $hourInSec = 30 / 3600;
    $seconds = round($degrees / $hourInSec);
    $minutes = floor($seconds / 60);
    $seconds = $seconds - ($minutes * 60);
    $hours = floor($minutes / 60);
    $minutes = $minutes - $hours * 60;
    return [
        "часов" => $hours,
        "минут" => $minutes,
        "секунд" => $seconds,
    ];
}
