<?php
function binTodec($str) {
    return collect(str_split($str))
        ->reverse()
        ->values()
        ->map(function($v, $i) {
            return $v * (2 ** $i);
        })->sum();
}

function build_comment($messages = [])
{
    return collect($messages)
        ->map(function ($message) {
            return "- {$message}";
        })
        ->join("\n");
}
