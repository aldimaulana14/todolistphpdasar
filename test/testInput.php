<?php

require_once "./helper/input.php";

$name = input("Nama");
echo "Hello $name" . PHP_EOL;

$umur = input("Umur");
echo "Umur kamu $umur tahun";