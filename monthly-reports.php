<?php
    require_once 'facebook/src/Facebook/autoload.php';

    $fb = new Facebook\Facebook([
        'app_id' => '1089627791163114',
        'app_secret' => 'd9d6fbca1e8abbf0451e63e38e30cc17',
        'default_graph_version' => 'v2.8',
    ]);

    $access_token = '1089627791163114|BiKyORyarFZ68kyQhVoymenTcno';

    $response = $fb->get('/381679785234002?fields=fan_count', $access_token);

    $json = $response->getBody();

    $array = json_decode($json);

    echo $array->id;


