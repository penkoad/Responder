<?php

require "../vendor/autoload.php";

use Nathanmac\Utilities\Responder;
$responder = new Responder();

$body = array(
    'message' => array(
        'to' => 'Jack Smith',
        'from' => 'Jane Doe',
        'subject' => 'Hello World',
        'body' => 'Hello, whats going on...'
    )
);

header('Content-Type: application/vnd.php.serialized');
print $responder->serialize($body);
