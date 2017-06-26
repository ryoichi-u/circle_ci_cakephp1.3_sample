<?php
// on cakephp1.3 APP_DIR

$finder = PhpCsFixer\Finder::create()
    ->notName('README.md')
    ->notName('.php_cs')
    ->notName('composer.*')
    ->notName('phpunit.xml*')
    ->notName('*.xml')
    ->exclude('vendor')
    ->exclude('plugin')
    ->exclude('tmp')
    ->in(__DIR__);

return PhpCsFixer\Config::create()
    ->setRules(['@PSR2' => true])  
    ->setUsingCache(false)
    ->setFinder($finder);

