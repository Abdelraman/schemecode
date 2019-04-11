<?php

return [
    'role_structure' => [
        'super_admin' => [
            'team_members' => 'c,r,u,d',
            'contact_us_requests' => 'c,r,u,d',
        ],
    ],
    'permission_structure' => [

    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
