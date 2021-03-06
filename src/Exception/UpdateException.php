<?php

namespace Indigerd\Repository\Exception;

use Throwable;

class UpdateException extends \Exception
{
    protected $data;

    public function __construct(array $data, string $message = "", int $code = 0, Throwable $previous = null)
    {
        $this->data = $data;
        parent::__construct($message, $code, $previous);
    }
}
