<?php

namespace Mramzani\RestAPI\Tests\Controllers;

use Mramzani\RestAPI\ApiController;
use Mramzani\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}
