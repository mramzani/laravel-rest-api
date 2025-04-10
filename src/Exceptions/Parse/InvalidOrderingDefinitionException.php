<?php

namespace Mramzani\RestAPI\Exceptions\Parse;

use Mramzani\RestAPI\Exceptions\ApiException;
use Mramzani\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}
