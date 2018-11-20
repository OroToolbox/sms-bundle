<?php

$finder = \PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src');

return PhpCsFixer\Config::create()
    ->setFinder($finder)
    ->setRules([
        '@Symfony' => true
    ])
    ->setLineEnding("\n")
;
