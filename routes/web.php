<?php
$router->add('', ['controller' => 'Home' , 'action' => 'index']);
$router->add('home',['controller' => 'Home' , 'action' => 'index']);

$router->add('login' ,
    [
        'controller' => 'AuthController' ,
        'action' => 'login'
    ]
);
$router->add('registration' ,
    [
        'controller' => 'AuthController' ,
        'action' => 'register'
    ]
);
$router->add('auth' ,
    [
        'controller' => 'AuthController' ,
        'action' => 'verify'
    ]
);
$router->add('logout' ,
    [
        'controller' => 'AuthController' ,
        'action' => 'logout'
    ]
);
$router->add('user/store' ,
    [
        'controller' => 'UsersController' ,
        'action' => 'store'
    ]
);
$router->add('posts' ,
    [
        'controller' => 'PostsController' ,
        'action' => 'index'
    ]
);
$router->add('posts/create' ,
    [
        'controller' => 'PostsController' ,
        'action' => 'create'
    ]
);
$router->add('posts/store' ,
    [
        'controller' => 'PostsController' ,
        'action' => 'store'
    ]
);
$router->add('posts/{id:\d+}' ,
    [
        'controller' => 'PostsController' ,
        'action' => 'show'
    ]
);