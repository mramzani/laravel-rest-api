<?php

namespace Mramzani\RestAPI\Tests\Controllers;

use Mramzani\RestAPI\ApiController;
use Mramzani\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}
