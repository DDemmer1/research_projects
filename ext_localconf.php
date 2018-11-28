<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'HistInst.ResearchProjects',
            'ResearchList',
            [
                'ResearchProjects' => 'list',
            ],
            // non-cacheable actions
            [
                'ResearchProjects' => '',
            ]
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_researchprojects_domain_model_research');

    }
);
