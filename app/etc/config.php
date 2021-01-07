<?php
return [
    'scopes' => [
        'websites' => [
            'admin' => [
                'website_id' => '0',
                'code' => 'admin',
                'name' => 'Admin',
                'sort_order' => '0',
                'default_group_id' => '0',
                'is_default' => '0'
            ],
            'website_1' => [
                'website_id' => '1',
                'code' => 'website_1',
                'name' => 'Website 1',
                'sort_order' => '0',
                'default_group_id' => '1',
                'is_default' => '1'
            ],
            'website_2' => [
                'website_id' => '2',
                'code' => 'website_2',
                'name' => 'Website 2',
                'sort_order' => '1',
                'default_group_id' => '2',
                'is_default' => '0'
            ]
        ],
        'groups' => [
            [
                'group_id' => '0',
                'website_id' => '0',
                'name' => 'Default',
                'root_category_id' => '0',
                'default_store_id' => '0',
                'code' => 'default'
            ],
            [
                'group_id' => '1',
                'website_id' => '1',
                'name' => 'Store 1',
                'root_category_id' => '2',
                'default_store_id' => '1',
                'code' => 'store_1'
            ],
            [
                'group_id' => '2',
                'website_id' => '2',
                'name' => 'Português',
                'root_category_id' => '2',
                'default_store_id' => '2',
                'code' => 'store_2'
            ],
            [
                'group_id' => '3',
                'website_id' => '2',
                'name' => 'English',
                'root_category_id' => '2',
                'default_store_id' => '3',
                'code' => 'store_3'
            ]
        ],
        'stores' => [
            'admin' => [
                'store_id' => '0',
                'code' => 'admin',
                'website_id' => '0',
                'group_id' => '0',
                'name' => 'Admin',
                'sort_order' => '0',
                'is_active' => '1'
            ],
            'store_view_1' => [
                'store_id' => '1',
                'code' => 'store_view_1',
                'website_id' => '1',
                'group_id' => '1',
                'name' => 'Store View 1',
                'sort_order' => '0',
                'is_active' => '1'
            ],
            'pt' => [
                'store_id' => '2',
                'code' => 'pt',
                'website_id' => '2',
                'group_id' => '2',
                'name' => 'Store View 2',
                'sort_order' => '1',
                'is_active' => '1'
            ],
            'en' => [
                'store_id' => '3',
                'code' => 'en',
                'website_id' => '2',
                'group_id' => '3',
                'name' => 'Store View 3',
                'sort_order' => '2',
                'is_active' => '1'
            ]
        ]
    ]
];
