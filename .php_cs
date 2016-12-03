<?php

$header = <<<EOF
Theme Manager for Yii2

@link      https://github.com/hiqdev/yii2-thememanager
@package   yii2-thememanager
@license   BSD-3-Clause
@copyright Copyright (c) 2015-2016, HiQDev (http://hiqdev.com/)
EOF;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@Symfony' => true,
        'header_comment'                             => ['header' => $header],
        'indentation_type'                           =>  true,
        'long_array_syntax'                          => false,
        'php4_constructor'                           => false,
        'phpdoc_var_to_type'                         => false,
        'binary_operator_spaces'                     => ['align_double_arrow' => null, 'align_equals' => null],
        'phpdoc_no_empty_return'                     => false,
        'empty_return'                               => false,
        'blank_line_before_return'                   => false,
        'phpdoc_align'                               => false,
        'phpdoc_params'                              => false,
        'phpdoc_scalar'                              => false,
        'phpdoc_separation'                          => false,
        'phpdoc_to_comment'                          => false,
        'method_argument_space'                      => false,
        'concat_space'                               => ['spacing' => 'one'],
        'ereg_to_preg'                               =>  true,
        'blank_line_after_opening_tag'               =>  true,
        'single_blank_line_before_namespace'         =>  true,
        'ordered_imports'                            =>  true,
        'phpdoc_order'                               =>  true,
        'pre_increment'                              =>  true,
        'array_syntax'                               => ['syntax' => 'short'],
        'strict_comparison'                          =>  true,
        'strict_param'                               =>  true,
        'no_multiline_whitespace_before_semicolons'  =>  true,
    ))
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(__DIR__)
            ->notPath('vendor')
            ->notPath('runtime')
            ->notPath('web/assets')
        )
;
