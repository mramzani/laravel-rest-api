<?php

namespace Mramzani\RestAPI\Exceptions\Parse;

use Mramzani\RestAPI\Exceptions\ApiException;
use Mramzani\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}
