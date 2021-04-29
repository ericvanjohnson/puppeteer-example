<?php
require __DIR__ . '/vendor/autoload.php';

use Nesk\Puphpeteer\Puppeteer;

$puppeteer = new Puppeteer;
$browser = $puppeteer->launch();

$page = $browser->newPage();
$page->goto('https://diegodev.com');
$page->screenshot(['path' => 'example.png']);

$browser->close();
