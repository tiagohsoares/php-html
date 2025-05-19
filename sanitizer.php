<?php

$fname = filter_input(INPUT_POST, $fname, FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, $email, FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, $cep, FILTER_SANITIZE_STRING);