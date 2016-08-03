<?php

require __DIR__.'/vendor/autoload.php';

use Laravel\LegacyEncrypter\McryptEncrypter;

$encrypter = new McryptEncrypter(str_random(16));
$encrypted = $encrypter->encrypt('I am working!');

echo $encrypted.PHP_EOL;
echo $encrypter->decrypt($encrypted).PHP_EOL;
