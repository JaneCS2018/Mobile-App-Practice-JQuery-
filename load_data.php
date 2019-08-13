<?php
// Instantiate Variables
$filename = "data/users.json";
$file = file_get_contents($filename);
$data = json_decode($file);