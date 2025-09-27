<?php   
return [
    'module' => [
        [
            'title' => 'Article',
            'icon' => 'fa fa-file',
            'name' => ['post'],
            'subModule' => [
                [
                    'title' => 'Article Group',
                    'route' => 'post/catalogue/index'
                ],
                [
                    'title' => 'Article',
                    'route' => 'post/index'
                ]
            ]
        ],
        [
            'title' => 'User Group',
            'icon' => 'fa fa-user',
            'name' => ['user'],
            'subModule' => [
                [
                    'title' => 'User Group',
                    'route' => 'user/catalogue/index'
                ],
                [
                    'title' => 'User',
                    'route' => 'user/index'
                ],
                [
                    'title' => 'Permission',
                    'route' => 'permission/index'
                ]
            ]
        ],
        [
            'title' => 'General',
            'icon' => 'fa fa-file',
            'name' => ['language'],
            'subModule' => [
                [
                    'title' => 'Language',
                    'route' => 'language/index'
                ],
            ]
        ]
    ],
];

