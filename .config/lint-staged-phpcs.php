<?php

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$root = dirname(__DIR__);

$rules = require "$root/.config/phpcs-rules.php";

$config = new Config('metafox');

$finder = new Finder();

$finder
    ->files()
//    ->append(['app/Http/Kernel.php'])
    ->ignoreDotFiles(true)
    ->ignoreVCSIgnored(true);

$config
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setCacheFile(str_replace('.php', '.cache', __FILE__))
    ->setRules($rules)
    ->setRiskyAllowed(true);

return $config;
