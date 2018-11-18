<?php
require 'vendor/autoload.php';

$BOS_TEST_CONFIG = [
    'credentials' => array(
        'accessKeyId' => $_ENV['BOS_KEY'],
        'secretAccessKey' => $_ENV['BOS_SECRET'],
    ),
    'endpoint' => 'http://bj.bcebos.com',
    'bucket' => $_ENV['BOS_BUCKET'],
];
