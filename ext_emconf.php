<?php

/**
 * Extension Manager/Repository config file for ext "typo3_theme_boilerplate".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'TYPO3 Theme Boilerplate',
    'description' => 'TYPO3 Theme Boilerplate',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-8.7.99',
            'fluid_styled_content' => '8.7.0-8.7.99',
            'rte_ckeditor' => '8.7.0-8.7.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Marcobiedermann\\Typo3ThemeBoilerplate\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marco Biedermann',
    'author_email' => 'hello@marcobiedermann.com',
    'author_company' => 'marcobiedermann',
    'version' => '1.0.0',
];
