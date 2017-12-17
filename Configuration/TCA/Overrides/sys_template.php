<?php
defined('TYPO3_MODE') || die();

call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'typo3_theme_boilerplate';

    /**
     * Default TypoScript for Typo3ThemeBoilerplate
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'TYPO3 Theme Boilerplate'
    );
});
