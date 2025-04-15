<?php
session_start();

function readJSON($file) {
    if (!file_exists($file)) return [];
    return json_decode(file_get_contents($file), true);
}

function writeJSON($file, $data) {
    file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}
