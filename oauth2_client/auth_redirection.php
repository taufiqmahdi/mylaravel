<?php
$query = http_build_query(array(
    'client_id' => '5',
    'redirect_uri' => 'http://localhost/oauth2_client/callback.php',
    'response_type' => 'code',
    'scope' => '',
));
 
header('Location: http://localhost:8000/oauth/authorize?'.$query);