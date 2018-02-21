<?php

return [
	'/' => [
		'Controller' => 'main',
		'Action' => 'index'
	],

    '/about-me' => [
        'Controller' => 'main',
        'Action' => 'about'
    ],

    '/login' => [
        'Controller' => 'account',
        'Action' => 'login',
    ],

    '/loginTo' => [
        'Controller' => 'account',
        'Action' => 'loginTo',
    ],

    '/logout' => [
        'Controller' => 'account',
        'Action' => 'logout',
    ],

    '/admin' => [
        'Controller' => 'admin',
        'Action' => 'admin',
    ],

    '/register' => [
        'Controller' => 'account',
        'Action' => 'register',
    ],

    '/user/create' => [
        'Controller' => 'account',
        'Action' => 'store',
    ],

    '/admin/user/create' => [
        'Controller' => 'admin',
        'Action' => 'store',
    ],

    '/user/show/([0-9]+)' => [
        'Controller' => 'user',
        'Action' => 'show',
    ],

    '/user/update/([0-9]+)' => [
        'Controller' => 'user',
        'Action' => 'show',
    ],

    '/admin/user/edit/([0-9]+)' => [
        'Controller' => 'user',
        'Action' => 'show',
    ],

    '/admin/user/delete/([0-9]+)' => [
        'Controller' => 'user',
        'Action' => 'delete',
    ],

];