<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 28.08.16
 * Time: 9:18
 */

return [
    'get_all_post' => [
        'pattern' => '/posts',
        'request_method' => 'GET',
        'class' => 'PostController',
        'method' => 'getPostAction'
    ],

    'get_post_by_id' => [
        'pattern' => '/posts/{id}',
        'method' => 'getAllPostAction',
        'class' => 'PostController',
        'requirement' => [
            'id' => '[0-9]+',
            'request_method' => 'GET',
        ]
    ],

    'edit_post_by_id' => [
        'pattern' => '/posts/{id}/edit',
        'method' => 'editPostAction',
        'class' => 'PostController',
        'requirement' => [
            'id' => '[0-9]+',
            'request_method' => 'GET',
        ]
    ],

    'show_post' => [
        'pattern' => '/posts/{id}/show/{num}',
        'method' => 'showPostAction',
        'class' => 'DataController',
        'requirement' => [
            'id' => '[0-9]+',
            'num' => '[0-9]+',
            'request_method' => 'POST',
        ]
    ],
];