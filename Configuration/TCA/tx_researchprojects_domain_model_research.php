<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research',
        'label' => 'projekttitel',
        'iconfile' => 'EXT:research_projects/Resources/Public/Icons/Product.svg'
    ],
    'columns' => [
        'titel' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.titel',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'vorname' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.vorname',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'name' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.name',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'weitere' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.weitere',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'projekttitel' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.projekttitel',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'abteilung' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.abteilung',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'foerderung' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.foerderung',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'betreuer' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.betreuer',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],
        'betreuerURL' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.betreuerURL',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'nameURL' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.nameURL',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'projektURL' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.projektURL',
            'config' => [
                'type' => 'text',
                'eval' => 'trim'
            ]
        ],
        'laufzeit' => [
            'label' => 'LLL:EXT:research_projects/Resources/Private/Language/locallang_db.xlf:tx_researchprojects_domain_model_research.laufzeit',
            'config' => [
                'type' => 'input',
                'eval' => 'trim'
            ]
        ],


    ],
    'types' => [
        '0' => ['showitem' => 'titel, vorname, name, weitere, projekttitel, abteilung, foerderung, betreuer, betreuerURL, nameURL, projektURL, laufzeit']
    ]


];
