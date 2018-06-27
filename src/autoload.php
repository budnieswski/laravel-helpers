<?php

use Symfony\Component\Finder\Finder;

$finder = (new Finder())->files()->in(__DIR__)->depth(1)->name('*.php');;

foreach ($finder as $file) {
    require_once $file;
}
