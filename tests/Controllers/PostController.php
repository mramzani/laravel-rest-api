<?php

namespace Mramzani\RestAPI\Tests\Controllers;

use Mramzani\RestAPI\ApiController;
use Mramzani\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}
