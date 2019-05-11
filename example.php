<?php
require_once 'webhook.php';
$url = "https://example.org/test.php"; //FILE NON ESISTENTE, è solo un esempio.
$w = new webhook($url);
$arr = ['WebHook' => ['web' => 'hook']];

$w->sendwebhook($arr);
