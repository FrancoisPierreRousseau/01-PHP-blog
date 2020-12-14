<?php

use Framework\App;
use GuzzleHttp\Psr7\ServerRequest;

require '../vendor/autoload.php';

$app = new App(
    [\App\Blog\BlogModule::class]
);

$response = $app->run(ServerRequest::fromGlobals());
\Http\Response\send($response);
