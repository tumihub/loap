<?php

app()->router->get('loap/{key}/server', [
    'as' => 'loap.server.wsdl',
    'uses' => '\Tumihub\Loap\LoapController@server'
]);

app()->router->post('loap/{key}/server', [
    'as' => 'loap.server',
    'uses' => '\Tumihub\Loap\LoapController@server'
]);
