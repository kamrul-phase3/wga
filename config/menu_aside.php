<?php
// Aside menu
return [
    'items' => [
        // Dashboard
        [
            'title' => 'Dashboard',
            'root' => true,
            'icon' => 'media/svg/icons/Layout/dashboard-main.svg', // or can be 'flaticon-home' or any flaticon-*
            'page' => '/',
            'new-tab' => false,
        ],
         // General
        [
            'section' => 'GENERAL',
        ],
        [
            'title' => 'Media',
            'icon' => 'media/svg/icons/Layout/media.svg',
            'bullet' => 'line',
            'root' => true,
        ],
        [
            'title' => 'Users',
            'icon' => 'media/svg/icons/Layout/User.svg',
            'bullet' => 'line',
            'root' => true,
        ],
        [
            'title' => 'Options',
            'icon' => 'media/svg/icons/Layout/Settings-2.svg',
            'bullet' => 'line',
            'root' => true,
        ],
          // Menu
        [
            'section' => 'Menu',
        ],
        [
            'title' => ' BIA',
            'root' => true,
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'page' => 'nova/resources/bias',
            'visible' => 'preview',
        ],
        [
            'title' => ' MTA',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => ' IHC',
            'desc' => '',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => 'ITSM',
            'desc' => '',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => ' Cloud Readiness',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => ' Risk',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'root' => true,
            'bullet' => 'dot',
        ],
        [
            'title' => ' BCP Assessment',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => ' DR Maturity',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => ' DMM Assessment',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => 'ITCL MTA',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => 'CSA',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
            'root' => true,
        ],
        [
            'title' => 'SFIA',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'root' => true,
            'bullet' => 'dot',
        ],
        [
            'title' => 'Technical Surveys',
            'icon' => 'media/svg/icons/Layout/Thumbtack.svg',
            'bullet' => 'dot',
        ],
    ]
];
